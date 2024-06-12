<?php
if (get_row_layout() == 'our_service') {
    $title = get_sub_field('title');
    $small_title = get_sub_field('small_title');
    $description = get_sub_field('description');
    $card1 = get_sub_field('card_1');
    $card2 = get_sub_field('card_2');
    $card3 = get_sub_field('card_3');
?>
    <div class="w-full bg-white pb-20">
        <div class="container mx-auto lg:pt-20 lg:px-10 px-4 py-5 flex flex-col lg:flex-row justify-between">
            <div>
                <h2 class="raleway-800 text-[20px] lg:text-[64px] leading-[58px] text-black-800 text-center lg:text-left"><?= $title; ?></h2>
                <h3 class="raleway-800 text-[12px] leading-[14.09px] lg:text-2xl lg:leading-[58px] text-purple-10 text-center lg:text-left"><?= $small_title; ?></h3>
                <p class="max-w-[635px] raleway-500 text-[12px] leading-[14.09px] lg:text-xl text-center lg:text-left"><?= $description; ?></p>
            </div>

            <div class="bg-[#F5F5F7] p-5 rounded-[25px] max-w-[830px] w-full flex justify-between">
                <div class="flex flex-col gap-3 max-w-[430px]">
                    <h3 class="poppins-700 lg:text-[30px] text-[13.33px]"><?= $card1['title'] ?></h3>
                    <p class="text-[10.47px] lg:text-xl raleway-500"><?= $card1['description']; ?></p>
                    <div class="flex gap-2">
                        <a href="<?= $card1['link']['url'] ?>" class="text-purple-10 text-[10.47px] lg:text-xl raleway-600"><?= $card1['link']['title'] ?></a>
                        <img src="<?= get_template_directory_uri() ?> /assets/images/r_arrow.svg" alt="" class="">
                    </div>
                </div>
                <div class="lg:pr-10 flex">
                    <img src="<?= $card1['image'] ?>" alt="" class="w-[54px] min-w-[54px] h-[54px] min-h-[54px]  lg:w-[151px] lg:min-w-[151px] object-contain lg:my-auto">
                </div>
            </div>
        </div>
        <div class="container mx-auto flex lg:px-10 px-4 py-5">
            <div class="bg-[#F5F5F7] p-5 rounded-[25px] max-w-[830px] w-full flex justify-between">
                <div class="flex flex-col gap-3 max-w-[430px]">
                    <h3 class="poppins-700 lg:text-[30px] text-[13.33px]"><?= $card2['title'] ?></h3>
                    <p class="text-[10.47px] lg:text-xl raleway-500"><?= $card2['description']; ?></p>
                    <div class="flex gap-2">
                        <a href="<?= $card2['link']['url'] ?>" class="text-purple-10 text-[10.47px] lg:text-xl raleway-600"><?= $card2['link']['title'] ?></a>
                        <img src="<?= get_template_directory_uri() ?> /assets/images/r_arrow.svg" alt="">
                    </div>
                </div>
                <div class="pr-10 flex">
                    <img src="<?= $card3['image'] ?>" alt="" class="w-[54px] min-w-[54px] h-[54px] min-h-[54px] lg:w-[151px] lg:min-w-[151px] object-contain lg:my-auto">
                </div>
            </div>
        </div>
        <div class="container mx-auto flex lg:px-10 px-4 py-5">
            <div class="bg-[#F5F5F7] p-5 rounded-[25px] max-w-[830px] w-full flex justify-between ml-auto">
                <div class="flex flex-col gap-3 max-w-[430px]">
                    <h3 class="poppins-700 lg:text-[30px] text-[13.33px]"><?= $card3['title'] ?></h3>
                    <p class="text-[10.47px] lg:text-xl raleway-500"><?= $card3['description']; ?></p>
                    <div class="flex gap-2">
                        <a href="<?= $card3['link']['url'] ?>" class="text-purple-10 text-[10.47px] lg:text-xl raleway-600"><?= $card3['link']['title'] ?></a>
                        <img src="<?= get_template_directory_uri() ?> /assets/images/r_arrow.svg" alt="">
                    </div>
                </div>
                <div class="pr-10 flex">
                    <img src="<?= $card1['image'] ?>" alt="" class="w-[54px] min-w-[54px] h-[54px] min-h-[54px] lg:w-[151px] lg:min-w-[151px] object-contain lg:my-auto">
                </div>
            </div>
        </div>
    </div>


<?php } ?>