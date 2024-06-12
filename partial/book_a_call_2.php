<?php
if (get_row_layout() == 'book_a_call_2') {
    $title = get_sub_field('title');
    $link = get_sub_field('link');
    $background_image_url = get_template_directory_uri() . '/assets/images/call2.png';
?>

    <div class="w-full h-[500px] bg-no-repeat bg-cover flex" style="background-image: url('<?= $background_image_url; ?>');">
        <div class="m-auto py-4 px-20 flex gap-10 rounded-full" style="background: linear-gradient(270deg, #4C2CFF 44.14%, rgba(76, 44, 255, 0) 109.57%);">
            <h2 class="text-white raleway-800 text-[64px] leading-[58px]"><?= $title; ?></h2>
            <a href="<?= esc_url($link['url']); ?>" class="bg-white text-purple-10 raleway-700 text-2xl h-max py-4 px-14 rounded-full"><?= esc_html($link['title']); ?></a>
        </div>
    </div>

<?php } ?>