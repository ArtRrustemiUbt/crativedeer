<?php
if (get_row_layout() == 'interactive_section') {
    $title = get_sub_field('title');
    $description = get_sub_field('description');
    $link = get_sub_field('link');
    $card1 = get_sub_field('card_1');
    $card2 = get_sub_field('card_2');
    $card3 = get_sub_field('card_3');
    $card4 = get_sub_field('card_4');
    $bg_image_url = get_template_directory_uri() . '/assets/images/line4.png';
    $bg_image_url2 = get_template_directory_uri() . '/assets/images/line5.png';
?>

    <div class="w-full bg-[#4C2CFF] bg-no-repeat" style="background-image: url('<?= $bg_image_url ?>'), url('<?= $bg_image_url2 ?>'); background-size: contain, contain; background-position: left, right;">
        <div class="container mx-auto flex flex-col px-20 py-28">
            <h2 class="text-white text-center raleway-800 text-[75px]"><?= $title; ?></h2>
            <p class="raleway-500 text-white text-[32px] leading-[36px] mt-10"><?= $description; ?></p>
            <a href="<?= $link['url']; ?>" class="text-[#4C2CFF] bg-white rounded-[32px] raleway-700 text-[26px] w-max px-[30px] py-2 mx-auto my-14"><?= $link['title']; ?></a>

            <div class="flex w-full flex-col lg:flex-row bg-white rounded-[30px] justify-center p-5">
                <div class="flex flex-col p-5 max-w-[330px] border-r-2 border-r-[#4C2CFF]">
                    <h4 class="text-[#4C2CFF] text-xl realway-600"><?= $card1['title']; ?></h4>
                    <h3 class="text-[#2C2C2C] raleway-700 text-[55px]"><?= $card1['text']; ?></h3>
                    <p class="text-[#2C2C2C] raleway-500 text-xl leading-[24px]"><?= $card1['description']; ?></p>
                </div>
                <div class="flex flex-col p-5 max-w-[330px] border-r-2 border-r-[#4C2CFF]">
                    <h4 class="text-[#4C2CFF] text-xl realway-600"><?= $card2['title']; ?></h4>
                    <h3 class="text-[#2C2C2C] raleway-700 text-[55px]"><?= $card2['text']; ?></h3>
                    <p class="text-[#2C2C2C] raleway-500 text-xl leading-[24px]"><?= $card2['description']; ?></p>
                </div>
                <div class="flex flex-col p-5 max-w-[330px] border-r-2 border-r-[#4C2CFF]">
                    <h4 class="text-[#4C2CFF] text-xl realway-600"><?= $card3['title']; ?></h4>
                    <h3 class="text-[#2C2C2C] raleway-700 text-[55px]"><?= $card3['text']; ?></h3>
                    <p class="text-[#2C2C2C] raleway-500 text-xl leading-[24px]"><?= $card3['description']; ?></p>
                </div>
                <div class="flex flex-col p-5 max-w-[330px]">
                    <h4 class="text-[#4C2CFF] text-xl realway-600"><?= $card4['title']; ?></h4>
                    <h3 class="text-[#2C2C2C] raleway-700 text-[55px]"><?= $card4['text']; ?></h3>
                    <p class="text-[#2C2C2C] raleway-500 text-xl leading-[24px]"><?= $card4['description']; ?></p>
                </div>
            </div>
        </div>
    </div>

<?php } ?>