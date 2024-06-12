<?php
if (get_row_layout() == 'reviews') {
    $title = get_sub_field('title');
    $description = get_sub_field('description');
    $logo = get_sub_field('logo');
    $card1 = get_sub_field('card_1');
    $card2 = get_sub_field('card_2');
    $card3 = get_sub_field('card_3');
?>

    <div class="w-full bg-[#F5F5F7]">
        <div class="p-5 lg:p-10 flex flex-col">
            <h2 class="text-center text-black-800 raleway-800 text-[20px] lg:text-[64px]"><?= $title; ?></h2>
            <div class="flex mx-auto">
                <img src="<?= get_template_directory_uri() ?>/assets/images/star.svg" alt="" class="min-w-[19px] min-h-[19px] max-w-[19px] max-h-[19px] lg:min-w-[42px] lg:min-h-[40px] lg:max-w-[42px] lg:max-h-[40px]">
                <img src="<?= get_template_directory_uri() ?>/assets/images/star.svg" alt="" class="min-w-[19px] min-h-[19px] max-w-[19px] max-h-[19px] lg:min-w-[42px] lg:min-h-[40px] lg:max-w-[42px] lg:max-h-[40px]">
                <img src="<?= get_template_directory_uri() ?>/assets/images/star.svg" alt="" class="min-w-[19px] min-h-[19px] max-w-[19px] max-h-[19px] lg:min-w-[42px] lg:min-h-[40px] lg:max-w-[42px] lg:max-h-[40px]">
                <img src="<?= get_template_directory_uri() ?>/assets/images/star.svg" alt="" class="min-w-[19px] min-h-[19px] max-w-[19px] max-h-[19px] lg:min-w-[42px] lg:min-h-[40px] lg:max-w-[42px] lg:max-h-[40px]">
                <img src="<?= get_template_directory_uri() ?>/assets/images/star.svg" alt="" class="min-w-[19px] min-h-[19px] max-w-[19px] max-h-[19px] lg:min-w-[42px] lg:min-h-[40px] lg:max-w-[42px] lg:max-h-[40px]">
            </div>
            <div class="flex mx-auto my-5 gap-4">
                <p class="raleway-400 text-black-800 text-[11px] lg:text-2xl"><?= $description; ?></p>
                <img src="<?= $logo; ?>" alt="" class="min-w-[45px] max-w-[45px] lg:min-w-[100px] lg:max-w-[100px]">
            </div>

            <div class="flex justify-around py-10 lg:py-20 overflow-x-auto gap-5 lg:gap-0">
                <div class="flex flex-col min-w-[300px] lg:min-w-[395px] w-[395px] lg:h-[348px] h-max bg-white rounded-[34px] p-5">
                    <div class="flex gap-4">
                        <img src="<?= $card1['image'] ?>" alt="" class="w-[55px] h-[55px] rounded-full">
                        <div class="flex flex-col justify-center">
                            <p class="tex-black-800 raleway-700 text-[13.33px] lg:text-xl"><?= $card1['name'] ?></p>
                            <p class="text-[#727272] text-[10px] lg:text-[15px] raleway-400"><?= $card1['date'] ?></p>
                        </div>
                    </div>
                    <div class="flex mt-5 mb-3">
                        <?php
                        $rating_stars = $card1['rating_stars'];
                        for ($i = 0; $i < $rating_stars; $i++) {
                            echo '<img src="' . get_template_directory_uri() . '/assets/images/smallStar.svg" alt="star">';
                        }
                        ?>
                    </div>
                    <p class="raleway-500 text-[12px] leading-[13px] lg:text-xl lg:leading-[23px]"><?= $card1['rating'] ?></p>
                    <a href="<?= $card1['link']['url'] ?>" class="text-[#727272] text-[12px] leading-[13px] lg:text-xl lg:leading-[23px] raleway-400 lg:mt-auto mt-2"><?= $card1['link']['title'] ?></a>

                </div>

                <div class="flex flex-col min-w-[300px] lg:min-w-[395px] w-[395px] lg:h-[348px] h-max bg-white rounded-[34px] p-5">
                    <div class="flex gap-4">
                        <img src="<?= $card2['image'] ?>" alt="" class="w-[55px] h-[55px] rounded-full">
                        <div class="flex flex-col justify-center">
                            <p class="tex-black-800 raleway-700 text-[13.33px] lg:text-xl"><?= $card2['name'] ?></p>
                            <p class="text-[#727272] text-[10px] lg:text-[15px] raleway-400"><?= $card2['date'] ?></p>
                        </div>
                    </div>
                    <div class="flex mt-5 mb-3">
                        <?php
                        $rating_stars = $card2['rating_stars'];
                        for ($i = 0; $i < $rating_stars; $i++) {
                            echo '<img src="' . get_template_directory_uri() . '/assets/images/smallStar.svg" alt="star">';
                        }
                        ?>
                    </div>
                    <p class="raleway-500 text-[12px] leading-[13px] lg:text-xl lg:leading-[23px]"><?= $card2['rating'] ?></p>
                    <a href="<?= $card2['link']['url'] ?>" class="text-[#727272] text-[12px] leading-[13px] lg:text-xl lg:leading-[23px] raleway-400 lg:mt-auto mt-2"><?= $card2['link']['title'] ?></a>

                </div>

                <div class="flex flex-col min-w-[300px] lg:min-w-[395px] w-[395px] lg:h-[348px] h-max bg-white rounded-[34px] p-5">
                    <div class="flex gap-4">
                        <img src="<?= $card3['image'] ?>" alt="" class="w-[55px] h-[55px] rounded-full">
                        <div class="flex flex-col justify-center">
                            <p class="tex-black-800 raleway-700 text-[13.33px] lg:text-xl"><?= $card3['name'] ?></p>
                            <p class="text-[#727272] text-[10px] lg:text-[15px] raleway-400"><?= $card3['date'] ?></p>
                        </div>
                    </div>
                    <div class="flex mt-5 mb-3">
                        <?php
                        $rating_stars = $card3['rating_stars'];
                        for ($i = 0; $i < $rating_stars; $i++) {
                            echo '<img src="' . get_template_directory_uri() . '/assets/images/smallStar.svg" alt="star">';
                        }
                        ?>
                    </div>
                    <p class="raleway-500 text-[12px] leading-[13px] lg:text-xl lg:leading-[23px]"><?= $card3['rating'] ?></p>
                    <a href="<?= $card3['link']['url'] ?>" class="text-[#727272] text-[12px] leading-[13px] lg:text-xl lg:leading-[23px] raleway-400 lg:mt-auto mt-2"><?= $card3['link']['title'] ?></a>
                </div>

            </div>
        </div>
    </div>


<?php } ?>