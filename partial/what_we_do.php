<?php if (get_row_layout() == 'what_we_do') {
    $title = get_sub_field('title');
    $description = get_sub_field('description');
    $card1 = get_sub_field('card_1');
    $card2 = get_sub_field('card_2');
    $card3 = get_sub_field('card_3');
    $card4 = get_sub_field('card_4');
    $card5 = get_sub_field('card_5');
    $card6 = get_sub_field('card_6');
?>

    <?php
    $bg_image_url = get_template_directory_uri() . '/assets/images/bg.png';
    ?>
    <div class="w-full bg-[#F5F5F7]">
        <div class="container mx-auto py-20 px-10 flex justify-between">
            <div class="min-w-[579px] max-w-[579px] my-auto">
                <h2 class="text-[64px] raleway-800 leading-[64px] text-[#333333]"><?= $title; ?></h2>
                <p class="text-2xl raleway-500 leading-[28px] text-[#333333]"><?= $description; ?> </p>
            </div>
            <div class="flex flex-wrap gap-7 justify-center bg-no-repeat bg-center" style="background-image: url('<?= $bg_image_url ?>'); background-size: contain;">
                <div class="w-[376px] h-[358px] bg-white rounded-[30px] flex flex-col p-6">
                    <img src="<?= $card1['image'] ?>" alt="" class="max-w-[56px] min-w-[56px] ml-auto">
                    <div class="flex flex-col mt-auto gap-3">
                        <h3 class="raleway-800 text-[30px] text-[#333333] max-w-[170px] leading-[34px]"><?= $card1['title'] ?></h3>
                        <p class="raleway-500 text-2xl text-[#333333] leading-[28px]"><?= $card1['description'] ?></p>
                    </div>
                </div>
                <div class="w-[376px] h-[358px] bg-white rounded-[30px] flex flex-col p-6">
                    <img src="<?= $card2['image'] ?>" alt="" class="max-w-[56px] min-w-[56px] ml-auto">
                    <div class="flex flex-col mt-auto gap-3">
                        <h3 class="raleway-800 text-[30px] text-[#333333] max-w-[170px] leading-[34px]"><?= $card2['title'] ?></h3>
                        <p class="raleway-500 text-2xl text-[#333333] leading-[28px]"><?= $card2['description'] ?></p>
                    </div>
                </div>
                <div class="w-[376px] h-[358px] bg-white rounded-[30px] flex flex-col p-6">
                    <img src="<?= $card3['image'] ?>" alt="" class="max-w-[56px] min-w-[56px] ml-auto">
                    <div class="flex flex-col mt-auto gap-3">
                        <h3 class="raleway-800 text-[30px] text-[#333333] max-w-[170px] leading-[34px]"><?= $card3['title'] ?></h3>
                        <p class="raleway-500 text-2xl text-[#333333] leading-[28px]"><?= $card3['description'] ?></p>
                    </div>
                </div>
                <div class="w-[376px] h-[358px] bg-white rounded-[30px] flex flex-col p-6">
                    <img src="<?= $card4['image'] ?>" alt="" class="max-w-[56px] min-w-[56px] ml-auto">
                    <div class="flex flex-col mt-auto gap-3">
                        <h3 class="raleway-800 text-[30px] text-[#333333] max-w-[170px] leading-[34px]"><?= $card4['title'] ?></h3>
                        <p class="raleway-500 text-2xl text-[#333333] leading-[28px]"><?= $card4['description'] ?></p>
                    </div>
                </div>
                <div class="w-[376px] h-[358px] bg-white rounded-[30px] flex flex-col p-6">
                    <img src="<?= $card5['image'] ?>" alt="" class="max-w-[56px] min-w-[56px] ml-auto">
                    <div class="flex flex-col mt-auto gap-3">
                        <h3 class="raleway-800 text-[30px] text-[#333333] max-w-[170px] leading-[34px]"><?= $card5['title'] ?></h3>
                        <p class="raleway-500 text-2xl text-[#333333] leading-[28px]"><?= $card5['description'] ?></p>
                    </div>
                </div>
                <div class="w-[376px] h-[358px] bg-white rounded-[30px] flex flex-col p-6">
                    <img src="<?= $card6['image'] ?>" alt="" class="max-w-[56px] min-w-[56px] ml-auto">
                    <div class="flex flex-col mt-auto gap-3">
                        <h3 class="raleway-800 text-[30px] text-[#333333] max-w-[170px] leading-[34px]"><?= $card6['title'] ?></h3>
                        <p class="raleway-500 text-2xl text-[#333333] leading-[28px]"><?= $card6['description'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>