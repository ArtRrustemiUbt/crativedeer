<?php
// Enqueue styles and scripts
function creativedeer_enqueue_scripts()
{
    // Enqueue main stylesheet
    wp_enqueue_style('creativedeer-style', get_stylesheet_uri());

    // Enqueue Tailwind CSS output file
    wp_enqueue_style('custom_style', get_template_directory_uri() . '/dist/style.css', array());
    wp_enqueue_style('tailwindcss', get_template_directory_uri() . '/dist/output.css');
    wp_enqueue_style('swipercss', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');

    wp_enqueue_script('swiperjs', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', true);
    wp_enqueue_script('customjs', get_template_directory_uri() . '/assets/js/common.js', array(), null, true);


    // Enqueue Leaflet CSS
    wp_enqueue_style('leaflet-css', 'https://unpkg.com/leaflet@1.9.4/dist/leaflet.css', array(), null, 'all');

    // Enqueue Leaflet JS
    wp_enqueue_script('leaflet-js', 'https://unpkg.com/leaflet@1.9.4/dist/leaflet.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'creativedeer_enqueue_scripts');

// Register navigation menus
function creativedeer_register_menus()
{
    register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'creativedeer')
    ));
}
add_action('after_setup_theme', 'creativedeer_register_menus');

add_theme_support('post-thumbnails');


// Filter to change the excerpt length
function custom_excerpt_length($length)
{
    return 25;
}
add_filter('excerpt_length', 'custom_excerpt_length');

// Filter to change the excerpt more text
function custom_excerpt_more($more)
{
    return '...'; // Custom ellipsis
}
add_filter('excerpt_more', 'custom_excerpt_more');


function create_projects_post_type()
{
    $labels = array(
        'name'               => _x('Projects', 'post type general name', 'your-textdomain'),
        'singular_name'      => _x('Project', 'post type singular name', 'your-textdomain'),
        'menu_name'          => _x('Projects', 'admin menu', 'your-textdomain'),
        'name_admin_bar'     => _x('Project', 'add new on admin bar', 'your-textdomain'),
        'add_new'            => _x('Add New', 'project', 'your-textdomain'),
        'add_new_item'       => __('Add New Project', 'your-textdomain'),
        'new_item'           => __('New Project', 'your-textdomain'),
        'edit_item'          => __('Edit Project', 'your-textdomain'),
        'view_item'          => __('View Project', 'your-textdomain'),
        'all_items'          => __('All Projects', 'your-textdomain'),
        'search_items'       => __('Search Projects', 'your-textdomain'),
        'parent_item_colon'  => __('Parent Projects:', 'your-textdomain'),
        'not_found'          => __('No projects found.', 'your-textdomain'),
        'not_found_in_trash' => __('No projects found in Trash.', 'your-textdomain')
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'projects'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments')
    );

    register_post_type('projects', $args);
}

add_action('init', 'create_projects_post_type');

function create_projects_taxonomy()
{
    $labels = array(
        'name'              => _x('Project Categories', 'taxonomy general name', 'your-textdomain'),
        'singular_name'     => _x('Project Category', 'taxonomy singular name', 'your-textdomain'),
        'search_items'      => __('Search Project Categories', 'your-textdomain'),
        'all_items'         => __('All Project Categories', 'your-textdomain'),
        'parent_item'       => __('Parent Project Category', 'your-textdomain'),
        'parent_item_colon' => __('Parent Project Category:', 'your-textdomain'),
        'edit_item'         => __('Edit Project Category', 'your-textdomain'),
        'update_item'       => __('Update Project Category', 'your-textdomain'),
        'add_new_item'      => __('Add New Project Category', 'your-textdomain'),
        'new_item_name'     => __('New Project Category Name', 'your-textdomain'),
        'menu_name'         => __('Project Categories', 'your-textdomain'),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'project-category'),
    );

    register_taxonomy('project_category', array('projects'), $args);
}
add_action('init', 'create_projects_taxonomy');


function fetch_projects_by_category()
{
    $category_id = intval($_POST['category_id']);

    $projects_query = new WP_Query(array(
        'post_type' => 'projects',
        'tax_query' => array(
            array(
                'taxonomy' => 'project_category',
                'field'    => 'term_id',
                'terms'    => $category_id,
            ),
        ),
        'posts_per_page' => 4, // Limit to 4 posts
    ));

    ob_start();

    if ($projects_query->have_posts()) {
        while ($projects_query->have_posts()) {
            $projects_query->the_post();
            // Fetch the excerpt with a controlled length
            $excerpt = wp_trim_words(get_the_excerpt(), 25, '...');
?>
            <div class="bg-[#FFFFFF] rounded-[41px] p-5 flex flex-col w-full lg:w-[650px] h-max <?= $projects_query->current_post % 2 == 1 ? 'mt-10' : '' ?>">
                <div class="bg-[#D9D9D9] rounded-[41px] flex">
                    <?php if (has_post_thumbnail()) { ?>
                        <?= get_the_post_thumbnail(get_the_ID(), 'full', array('class' => 'm-auto rounded-[41px]')); ?>
                    <?php } ?>
                </div>
                <a href="<?= get_permalink() ?>" class="text-[#000000] raleway-600 lg:text-4xl my-5 text-[14px]"><?= get_the_title() ?></a>
                <div class="flex gap-3">
                    <?php
                    $post_categories = get_the_terms(get_the_ID(), 'project_category');
                    if ($post_categories && !is_wp_error($post_categories)) {
                        foreach ($post_categories as $category) { ?>
                            <p class="border-2 border-purple-10 rounded-full px-2 lg:px-5 py-1 text-purple-10 raleway-500 text-[10px] lg:text-[16px]"><?= $category->name ?></p>
                    <?php }
                    } ?>
                </div>
                <p class="text-[#333333] text-[10px] lg:text-xl raleway-500 py-5"><?= $excerpt ?></p>
            </div>
<?php
        }
        wp_reset_postdata();
    }

    $html = ob_get_clean();

    echo json_encode(array('html' => $html));
    wp_die();
}

add_action('wp_ajax_fetch_projects_by_category', 'fetch_projects_by_category');
add_action('wp_ajax_nopriv_fetch_projects_by_category', 'fetch_projects_by_category');
