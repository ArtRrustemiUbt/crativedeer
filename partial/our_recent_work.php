<?php
if (get_row_layout() == 'our_recent_work') {
    $title = get_sub_field('title');
    $small_title = get_sub_field('small_title');
    $posts = get_sub_field('posts');

    // Fetch terms from the custom 'project_category' taxonomy
    $categories = get_terms(array(
        'taxonomy' => 'project_category',
        'hide_empty' => false,
    ));

    // Separate 'All Project Types' category
    $all_project_types_category = null;
    $other_categories = [];

    foreach ($categories as $category) {
        if ($category->name === 'All Project Types') {
            $all_project_types_category = $category;
        } else {
            $other_categories[] = $category;
        }
    }

    // Ensure 'All Project Types' is the first category displayed
    if ($all_project_types_category) {
        array_unshift($other_categories, $all_project_types_category);
    }

    // Fetch projects that have the 'All Project Types' category
    $all_project_types_posts = array();
    if ($all_project_types_category) {
        $all_project_types_posts_query = new WP_Query(array(
            'post_type' => 'projects',
            'tax_query' => array(
                array(
                    'taxonomy' => 'project_category',
                    'field'    => 'term_id',
                    'terms'    => $all_project_types_category->term_id,
                ),
            ),
            'posts_per_page' => 4, // Limit to 4 posts
        ));
        $all_project_types_posts = $all_project_types_posts_query->posts;
    }
?>

    <div class="w-full bg-[#F5F5F7]">
        <div class="container mx-auto lg:p-20 p-5">
            <h2 class="raleway-800 text-[20px] leading-[18.33px] lg:text-[64px] text-center lg:text-left lg:leading-[58px] text-black-800"><?= $title; ?></h2>
            <h3 class="raleway-800 lg:text-2xl leading-[14.09px] lg:leading-[58px] mb-4 text-purple-10 text-[12px] text-center lg:text-left"><?= $small_title; ?></h3>
            <div class="flex flex-col lg:flex-row gap-2 mt-10 mb-20">
                <?php foreach ($other_categories as $index => $category) { ?>
                    <div class="<?= $index === 0 ? 'bg-[#4C2CFF] active-category' : 'bg-[#D9D9D9]' ?> category-item rounded-full px-5 py-2" data-category-id="<?= $category->term_id ?>">
                        <p class="<?= $index === 0 ? 'text-white' : 'text-[#333333]' ?> raleway-500 text-2xl cursor-pointer"><?= $category->name ?></p>
                    </div>
                <?php } ?>
            </div>

            <div id="projects-container" class="flex flex-wrap justify-center gap-x-10">
                <?php foreach ($all_project_types_posts as $index => $post) {
                    // Fetch the excerpt with a controlled length
                    $excerpt = wp_trim_words(get_the_excerpt($post->ID), 55, '...');
                ?>
                    <div class="bg-[#FFFFFF] rounded-[41px] p-5 flex flex-col w-full lg:w-[650px] h-max <?= $index % 2 == 1 ? 'mt-10' : '' ?>">
                        <div class="bg-[#D9D9D9] rounded-[41px] flex">
                            <?php if (has_post_thumbnail($post->ID)) { ?>
                                <?= get_the_post_thumbnail($post->ID, 'full', array('class' => 'm-auto rounded-[41px]')); ?>
                            <?php } ?>
                        </div>
                        <a href="<?= get_permalink($post->ID) ?>" class="text-[#000000] raleway-600 lg:text-4xl my-5 text-[14px]"><?= get_the_title($post->ID) ?></a>
                        <div class="flex gap-3">
                            <?php
                            $post_categories = get_the_terms($post->ID, 'project_category');
                            if ($post_categories && !is_wp_error($post_categories)) {
                                foreach ($post_categories as $category) { ?>
                                    <p class="border-2 border-purple-10 rounded-full px-2 lg:px-5 py-1 text-purple-10 raleway-500 text-[10px] lg:text-[16px]"><?= $category->name ?></p>
                            <?php }
                            } ?>
                        </div>
                        <p class="text-[#333333] text-[10px] lg:text-xl raleway-500 py-5"><?= $excerpt ?></p>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
<?php } ?>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const categories = document.querySelectorAll('.category-item');
        categories.forEach(category => {
            category.addEventListener('click', function() {
                const categoryId = this.getAttribute('data-category-id');

                // Remove active class from all categories
                categories.forEach(cat => {
                    cat.classList.remove('bg-[#4C2CFF]');
                    cat.classList.remove('active-category');
                    cat.classList.add('bg-[#D9D9D9]');
                    cat.querySelector('p').classList.remove('text-white');
                    cat.querySelector('p').classList.add('text-[#333333]');
                });

                // Add active class to the clicked category
                this.classList.remove('bg-[#D9D9D9]');
                this.classList.add('bg-[#4C2CFF]');
                this.classList.add('active-category');
                this.querySelector('p').classList.remove('text-[#333333]');
                this.querySelector('p').classList.add('text-white');

                fetchProjects(categoryId);
            });
        });

        function fetchProjects(categoryId) {
            const xhr = new XMLHttpRequest();
            xhr.open('POST', '<?= admin_url('admin-ajax.php'); ?>', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
            xhr.onload = function() {
                if (xhr.status === 200) {
                    const response = JSON.parse(xhr.responseText);
                    const projectsContainer = document.getElementById('projects-container');
                    projectsContainer.innerHTML = response.html;
                }
            };
            xhr.send('action=fetch_projects_by_category&category_id=' + categoryId);
        }
    });
</script>