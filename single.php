<?php get_header(); ?>

<div class="w-full bg-[#F5F5F7] px-10 py-20">
    <div class="container mx-auto max-w-[1015px]">
        <a href="/blogs" class="bg-[#4C2CFF] text-white raleway-700 text-[26px] leading-[26px] px-6 py-2 rounded-full mx-auto">All posts</a>
        <h1 class="raleway-800 text-[67px] leading-[77px] text-[#131417] mt-10"><?php the_title(); ?></h1>
        <div class="text-[#777A7F] raleway-600 leading-[26px] text-xl mt-2">
            By <span class="author-name"><?php the_author(); ?></span>
            on <span class="publish-date"><?php echo get_the_date(); ?></span>
        </div>
        <div class="w-full single_thumbnail post_thumbnail my-10">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail(); ?>
            <?php endif; ?>
        </div>
        <div class="text-2xl leading-[38px] text-[#000000]">
            <?php the_content(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>