<?php if (get_row_layout() == 'text_with_image') {
    $image = get_sub_field('image');
    $title = get_sub_field('title');
    $description = get_sub_field('description');
?>

    <div class="w-full bg-white">
        <div class="container mx-auto flex py-20 px-10">
            <div class="w-1/2">
                <img src="<?= $image ?>" alt="" class="max-w-[550px] min-w-[550px] mx-auto">
            </div>
            <div class="w-1/2">
                <h2 class="raleway-800 text-[#333333] text-[48px] leading-[48px]"><?= $title; ?></h2>
                <p class="raleway-500 text-2xl leading-[28.18px] mt-10"><?= nl2br($description); ?></p>
            </div>
        </div>
    </div>

<?php } ?>