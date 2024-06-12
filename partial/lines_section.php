<?php
if (get_row_layout() == 'lines_section') {
    $section1 = get_sub_field('section_1');
    $section2 = get_sub_field('section_2');
    $section3 = get_sub_field('section_3');
?>
    <div class="w-full bg-[#FFFFFF]">
        <div class="container mx-auto bg-contain bg-no-repeat bg-right-top" style="background-image: url('./wp-content/themes/creativedeer/assets/images/line1.png'); background-size: 900px;">
            <div class="flex flex-col lg:flex-row justify-between lg:px-10 lg:pt-20 p-5">
                <div class="flex flex-col max-w-[635px] my-auto">
                    <h3 class="text-[20px] lg:text-[48px] raleway-800 text-[#333333] leading-[24px] lg:leading-[57px]"><?= $section1['title']; ?></h3>
                    <p class="raleway-500 text-[#333333] text-[12px] lg:text-2xl mt-5"><?= $section1['description'] ?></p>
                </div>
                <div class="flex gap-4">
                    <div class="flex flex-col gap-4">
                        <img src="<?= $section1['image_1'] ?>" alt="" class="lg:max-w-[300px] lg:max-h-[300px] lg:min-w-[300px] lg:min-h-[300px] max-w-[184px] max-h-[184px] min-w-[184px] min-h-[184px] object-cover rounded-[28px]">
                        <img src="<?= $section1['image_2'] ?>" alt="" class="lg:max-w-[150px] lg:max-h-[150px] lg:min-w-[150px] lg:min-h-[150px] max-w-[106px] max-h-[106px] min-w-[106px] min-h-[106px] object-cover rounded-[28px] ml-auto">
                    </div>
                    <div class="flex-col">
                        <img src="<?= $section1['image_3'] ?>" alt="" class="lg:max-w-[170px] lg:max-h-[170px] lg:min-w-[170px] max-w-[106px] max-h-[106px] min-w-[106px] min-h-[106px] lg:min-h-[170px] object-cover rounded-[28px]">
                        <img src="<?= $section1['image_4'] ?>" alt="" class="lg:max-w-[170px] lg:max-h-[170px] lg:min-w-[170px] max-w-[106px] max-h-[106px] min-w-[106px] min-h-[106px] lg:min-h-[170px] object-cover rounded-[28px]">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-no-repeat bg-right-bottom" style="background-image: url('./wp-content/themes/creativedeer/assets/images/line3.png'); background-size: 500px;">
        <div class="w-full">
            <div class="container mx-auto bg-contain bg-no-repeat bg-left-top py-[100px]" style="background-image: url('./wp-content/themes/creativedeer/assets/images/line2.png'); background-size: 500px;">
                <div class="flex flex-col lg:flex-row-reverse justify-between px-10 lg:my-[300px]">
                    <div class="flex flex-col max-w-[635px] my-auto">
                        <h3 class="text-[20px] lg:text-[48px] raleway-800 text-[#333333] leading-[24px] lg:leading-[57px]"><?= $section2['title']; ?></h3>
                        <p class="raleway-500 text-[#333333] text-[12px] lg:text-2xl mt-5"><?= $section2['description'] ?></p>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex flex-col gap-4">
                            <img src="<?= $section2['image_1'] ?>" alt="" class="lg:max-w-[300px] lg:max-h-[300px] lg:min-w-[300px] lg:min-h-[300px] max-w-[184px] max-h-[184px] min-w-[184px] min-h-[184px] object-cover rounded-[28px]">
                            <img src="<?= $section2['image_2'] ?>" alt="" class="lg:max-w-[150px] lg:max-h-[150px] lg:min-w-[150px] lg:min-h-[150px] max-w-[106px] max-h-[106px] min-w-[106px] min-h-[106px] object-cover rounded-[28px] ml-auto">
                        </div>
                        <div class="flex-col">
                            <img src="<?= $section2['image_3'] ?>" alt="" class="lg:max-w-[170px] lg:max-h-[170px] lg:min-w-[170px] max-w-[106px] max-h-[106px] min-w-[106px] min-h-[106px] lg:min-h-[170px] object-cover rounded-[28px]">
                            <img src="<?= $section2['image_4'] ?>" alt="" class="lg:max-w-[170px] lg:max-h-[170px] lg:min-w-[170px] max-w-[106px] max-h-[106px] min-w-[106px] min-h-[106px] lg:min-h-[170px] object-cover rounded-[28px]">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full">
            <div class="container mx-auto bg-contain bg-no-repeat bg-left-top py-[100px]">
                <div class="flex flex-col lg:flex-row justify-between px-10">
                    <div class="flex flex-col max-w-[635px] my-auto">
                        <h3 class="text-[20px] lg:text-[48px] raleway-800 text-[#333333] leading-[24px] lg:leading-[57px]"><?= $section3['title']; ?></h3>
                        <p class="raleway-500 text-[#333333] text-[12px] lg:text-2xl mt-5"><?= $section3['description']; ?></p>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex flex-col gap-4">
                            <img src="<?= $section3['image_1'] ?>" alt="" class="lg:max-w-[300px] lg:max-h-[300px] lg:min-w-[300px] lg:min-h-[300px] max-w-[184px] max-h-[184px] min-w-[184px] min-h-[184px] object-cover rounded-[28px]">
                            <img src="<?= $section3['image_2'] ?>" alt="" class="lg:max-w-[150px] lg:max-h-[150px] lg:min-w-[150px] lg:min-h-[150px] max-w-[106px] max-h-[106px] min-w-[106px] min-h-[106px] object-cover rounded-[28px] ml-auto">
                        </div>
                        <div class="flex-col">
                            <img src="<?= $section3['image_3'] ?>" alt="" class="lg:max-w-[170px] lg:max-h-[170px] lg:min-w-[170px] max-w-[106px] max-h-[106px] min-w-[106px] min-h-[106px] lg:min-h-[170px] object-cover rounded-[28px]">
                            <img src="<?= $section3['image_4'] ?>" alt="" class="lg:max-w-[170px] lg:max-h-[170px] lg:min-w-[170px] max-w-[106px] max-h-[106px] min-w-[106px] min-h-[106px] lg:min-h-[170px] object-cover rounded-[28px]">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


<?php } ?>