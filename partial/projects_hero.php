<?php
if (get_row_layout() == 'projects_hero') {
    $title = get_sub_field('title');
    $description = get_sub_field('description');
    $image = get_sub_field('image');
    $bg_image_url = get_template_directory_uri() . '/assets/images/bg-block.png';
?>

    <div class="w-full bg-[#F5F5F7]" style="background-image: url('<?= $bg_image_url; ?>');">
        <div class="container mx-auto flex justify-between p-20">
            <div class="flex flex-col my-auto max-w-[746px] gap-8">
                <h1 class="raleway-800 text-[75px] leading-[84px] text-black-800"><?= $title; ?></h1>
                <p class="raleway-500 text-[32px] leading-[35.84px] text-black-800"><?= $description; ?></p>
            </div>
            <img src="<?= $image; ?>" alt="" class="w-[600px] h-[600px] object-contain">
        </div>
    </div>

<?php } ?>