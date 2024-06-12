<?php if (get_row_layout() == 'platforms') {
    $title = get_sub_field('title');
    $description = get_sub_field('description');
    $card1 = get_sub_field('card_1');
    $card2 = get_sub_field('card_2');
    $card3 = get_sub_field('card_3');
    $card4 = get_sub_field('card_4');
    $card5 = get_sub_field('card_5');
    $card6 = get_sub_field('card_6');
?>

    <div class="w-full bg-[#F5F5F7]">
        <div class="container mx-auto py-20 px-10">
            <h2 class="max-w-[769px] raleway-800 text-[64px] leading-[64px] text-center mx-auto"><?= $title; ?></h2>
            <p class="max-w-[579px] mx-auto text-center text-2xl raleway-500 leading-[28.18px] mt-10"><?= $description; ?></p>

            <div class="py-20 flex flex-wrap justify-center gap-5">
                <div class="max-w-[450px] min-w-[450px] max-h-[277px] min-h-[277px] bg-white rounded-[30px] p-10 flex flex-col">
                    <img src="<?= $card1['image'] ?>" alt="" class="max-w-[147px] min-w-[147px] mx-auto">
                    <h4 class="text-[#333333] raleway-700 text-[40px] leading-[40px] text-center mt-auto"><?= $card1['title'] ?></h4>
                </div>
                <div class="max-w-[450px] min-w-[450px] max-h-[277px] min-h-[277px] bg-white rounded-[30px] p-10 flex flex-col">
                    <img src="<?= $card2['image'] ?>" alt="" class="max-w-[147px] min-w-[147px] mx-auto">
                    <h4 class="text-[#333333] raleway-700 text-[40px] leading-[40px] text-center mt-auto"><?= $card2['title'] ?></h4>
                </div>
                <div class="max-w-[450px] min-w-[450px] max-h-[277px] min-h-[277px] bg-white rounded-[30px] p-10 flex flex-col">
                    <img src="<?= $card3['image'] ?>" alt="" class="max-w-[147px] min-w-[147px] mx-auto">
                    <h4 class="text-[#333333] raleway-700 text-[40px] leading-[40px] text-center mt-auto"><?= $card3['title'] ?></h4>
                </div>
                <div class="max-w-[450px] min-w-[450px] max-h-[277px] min-h-[277px] bg-white rounded-[30px] p-10 flex flex-col">
                    <img src="<?= $card4['image'] ?>" alt="" class="max-w-[147px] min-w-[147px] mx-auto">
                    <h4 class="text-[#333333] raleway-700 text-[40px] leading-[40px] text-center mt-auto"><?= $card4['title'] ?></h4>
                </div>
                <div class="max-w-[450px] min-w-[450px] max-h-[277px] min-h-[277px] bg-white rounded-[30px] p-10 flex flex-col">
                    <img src="<?= $card5['image'] ?>" alt="" class="max-w-[147px] min-w-[147px] mx-auto">
                    <h4 class="text-[#333333] raleway-700 text-[40px] leading-[40px] text-center mt-auto"><?= $card5['title'] ?></h4>
                </div>
                <div class="max-w-[450px] min-w-[450px] max-h-[277px] min-h-[277px] bg-white rounded-[30px] p-10 flex flex-col">
                    <img src="<?= $card6['image'] ?>" alt="" class="max-w-[147px] min-w-[147px] mx-auto">
                    <h4 class="text-[#333333] raleway-700 text-[40px] leading-[40px] text-center mt-auto"><?= $card6['title'] ?></h4>
                </div>
            </div>
        </div>
    </div>

<?php } ?>