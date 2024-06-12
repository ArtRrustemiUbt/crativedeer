<?php
if (get_row_layout() == 'project_description') {
    $title1 = get_sub_field('title_1');
    $description1 = get_sub_field('description_1');
    $title2 = get_sub_field('title_2');
    $description2 = get_sub_field('description_2');
    $image = get_sub_field('image');
    $bigimage = get_sub_field('big_image');
?>

    <div class="w-full bg-white">
        <div class="container mx-auto flex justify-between p-20 gap-5">
            <div class="flex flex-col max-w-[688px]">
                <h2 class="text-[#2C2C2C] raleway-800 text-[64px]"><?= $title1; ?></h2>
                <p class="raleeay-500 text-2xl leading-[36px] mt-10"><?= $description1; ?></p>

                <img src="<?= $image; ?>" alt="" class="mt-20">
            </div>
            <div class="flex flex-col max-w-[688px]">
                <h2 class="text-[#2C2C2C] raleway-800 text-[64px]"><?= $title2; ?></h2>
                <p class="raleeay-500 text-2xl leading-[36px] mt-10"><?= $description2; ?></p>
            </div>
        </div>
    </div>
    <div class="bg-[#F5F5F7] w-full pt-20 px-20">
        <img src="<?= $bigimage ?>" alt="" class="mx-auto">
    </div>

<?php } ?>