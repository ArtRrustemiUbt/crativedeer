<?php
if (get_row_layout() == 'our_clients') {
    $title = get_sub_field('title');
    $description = get_sub_field('description');
    $images = get_sub_field('clients');
?>
    <div class="w-full bg-[#F5F5F7]">
        <div class="container mx-auto p-20 px-4 py-10">
            <h2 class="text-center raleway-800 text-[20px] leading-[18.33px] lg:text-[64px] lg:leading-[58px] text-black-800"><?= $title; ?></h2>
            <p class="mx-auto text-center max-w-[574px] raleway-500 text-[12px] lg:text-xl mt-5"><?= $description; ?></p>
        </div>
        <div class="flex mx-10 justify-between lg:pb-20 pb-10 gap-5 overflow-x-auto">
            <?php foreach ($images as $image) { ?>
                <img src="<?= $image['image']; ?>" alt="" class="max-w-[81px] lg:max-w-[217px] max-h-[71px] object-contain">
            <?php } ?>
        </div>
    </div>


<?php } ?>