<?php get_header(); ?>
<div class="w-full bg-[#F5F5F7] px-10 py-20">
    <div class="bg-white container mx-auto rounded-[30px] p-5">
        <?php
        // Query for the latest post
        $latest_post_args = array(
            'post_type' => 'post',
            'posts_per_page' => 1 // Get only the latest post
        );
        $latest_post_query = new WP_Query($latest_post_args);

        if ($latest_post_query->have_posts()) :
            while ($latest_post_query->have_posts()) : $latest_post_query->the_post();
        ?>
                <div class="flex gap-10">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="w-1/2 post_thumbnail">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail(); ?>
                            </a>
                        </div>
                    <?php endif; ?>
                    <div class="w-1/2 flex flex-col justify-center max-w-[600px] gap-2">
                        <h3 class="raleway-800 text-[40px] leading-[46px]">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h3>
                        <!-- Add author and date here -->
                        <div class="text-[#777A7F] raleway-600 leading-[26px] text-xl">
                            By <span class="author-name"><?php the_author(); ?></span>
                            on <span class="publish-date"><?php echo get_the_date(); ?></span>
                        </div>
                        <div class="excerpt raleway-500 text-2xl leading-[28px]"><?php echo get_the_excerpt(); ?></div>
                        <a href="<?php the_permalink(); ?>" class="bg-purple-10 text-white px-5 py-2 rounded-full raleway-500 text-[17px] leading-[17px] w-max mt-3">Read More</a>
                    </div>
                </div>
        <?php
            endwhile;
        else :
            echo '<p>No posts found</p>';
        endif;

        // Restore original Post Data
        wp_reset_postdata();
        ?>
    </div>

    <div class="container mx-auto flex flex-wrap gap-y-10 py-20">
        <?php
        // Query for all posts except the latest one
        $other_posts_args = array(
            'post_type' => 'post',
            'posts_per_page' => 10, // Number of posts per page
            'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
            'offset' => 1 // Skip the latest post
        );
        $other_posts_query = new WP_Query($other_posts_args);

        if ($other_posts_query->have_posts()) :
            while ($other_posts_query->have_posts()) : $other_posts_query->the_post();
        ?>
                <div class="flex flex-col w-1/2">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="post_thumbnail">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail(); ?>
                            </a>
                        </div>
                    <?php endif; ?>
                    <h3 class="mt-4"><a href="<?php the_permalink(); ?>" class="raleway-800 text-[#131417] text-[30px] leading-[34.69px]"><?php the_title(); ?></a></h3>
                    <!-- Add author and date here -->
                    <div class="text-[#777A7F] raleway-600 leading-[26px] text-xl mt-2">
                        By <span class="author-name"><?php the_author(); ?></span>
                        on <span class="publish-date"><?php echo get_the_date(); ?></span>
                    </div>
                </div>
        <?php
            endwhile;

            // Pagination
            the_posts_pagination(array(
                'mid_size' => 2,
                'prev_text' => __('Previous', 'textdomain'),
                'next_text' => __('Next', 'textdomain'),
            ));

        else :
            echo '<p>No posts found</p>';
        endif;

        // Restore original Post Data
        wp_reset_postdata();
        ?>
    </div>
<div class="container mx-auto flex">
    <a href="#" class="bg-[#4C2CFF] text-white raleway-700 text-[26px] leading-[26px] px-6 py-2 rounded-full mx-auto">Load More</a>
</div>

</div>


<?php get_footer(); ?>