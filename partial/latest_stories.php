<?php
if (get_row_layout() == 'latest_stories') {
    $title = get_sub_field('title');
    $small_title = get_sub_field('small_title');
    $card1 = get_sub_field('card_1');
    $card2 = get_sub_field('card_2');
    $card3 = get_sub_field('card_3');
    $card4 = get_sub_field('card_4');
?>

    <div class="p-5 lg:p-10 w-full">
        <div class="container mx-auto">
            <h2 class="raleway-800 text-[20px] leading-[18.33px] lg:text-[64px] text-center lg:text-left lg:leading-[58px] text-black-800"><?= $title; ?></h2>
            <h3 class="raleway-800 lg:text-2xl leading-[14.09px] lg:leading-[58px] mb-4 text-purple-10 text-[12px] text-center lg:text-left"><?= $small_title; ?></h3>

            <div class="flex flex-col lg:flex-row lg:flex-wrap justify-between gap-y-10">
                <div class="h-auto lg:h-[500px] lg:w-[48%] flex flex-col">
                    <img src="<?= $card1['image'] ?>" alt="" class="rounded-[24px] h-[220px] lg:h-[350px] w-full object-cover">
                    <h3 class="text-[#131417] poppins-700 text-[14.28px] lg:text-[30px] leading-[16.52px] lg:leading-[34.69px] lg:mt-10 mt-5"><?= $card1['title']; ?></h3>
                    <div class="flex gap-0.5 text-[#777A7F] raleway-600 text-[10px] lg:text-xl lg:mt-auto">
                        <p><?= $card1['author'] ?></p>
                        <p> - </p>
                        <p> <?= $card1['date'] ?></p>
                    </div>
                </div>

                <div class="h-auto lg:h-[500px] lg:w-[48%] flex flex-col">
                    <img src="<?= $card2['image'] ?>" alt="" class="rounded-[24px] h-[220px] lg:h-[350px] w-full object-cover">
                    <h3 class="text-[#131417] poppins-700 text-[14.28px] lg:text-[30px] leading-[16.52px] lg:leading-[34.69px] lg:mt-10 mt-5"><?= $card2['title']; ?></h3>
                    <div class="flex gap-0.5 text-[#777A7F] raleway-600 text-[10px] lg:text-xl lg:mt-auto">
                        <p><?= $card2['author'] ?></p>
                        <p> - </p>
                        <p> <?= $card2['date'] ?></p>
                    </div>
                </div>

                <div class="h-auto lg:h-[500px] lg:w-[48%] flex flex-col">
                    <img src="<?= $card3['image'] ?>" alt="" class="rounded-[24px] h-[220px] lg:h-[350px] w-full object-cover">
                    <h3 class="text-[#131417] poppins-700 text-[14.28px] lg:text-[30px] leading-[16.52px] lg:leading-[34.69px] lg:mt-10 mt-5"><?= $card3['title']; ?></h3>
                    <div class="flex gap-0.5 text-[#777A7F] raleway-600 text-[10px] lg:text-xl lg:mt-auto">
                        <p><?= $card3['author'] ?></p>
                        <p> - </p>
                        <p> <?= $card3['date'] ?></p>
                    </div>
                </div>

                <div class="h-auto lg:h-[500px] lg:w-[48%] flex flex-col">
                    <img src="<?= $card4['image'] ?>" alt="" class="rounded-[24px] h-[220px] lg:h-[350px] w-full object-cover">
                    <h3 class="text-[#131417] poppins-700 text-[14.28px] lg:text-[30px] leading-[16.52px] lg:leading-[34.69px] lg:mt-10 mt-5"><?= $card4['title']; ?></h3>
                    <div class="flex gap-0.5 text-[#777A7F] raleway-600 text-[10px] lg:text-xl lg:mt-auto">
                        <p><?= $card4['author'] ?></p>
                        <p> - </p>
                        <p> <?= $card4['date'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php } ?>