<?php
if (get_row_layout() == 'book_a_call') {
    $title = get_sub_field('title');
    $link = get_sub_field('link');
?>

<div class="w-full h-[250px] lg:h-[500px] bg-no-repeat bg-cover flex" style="background-image: url('./wp-content/themes/creativedeer/assets/images/call.png');">
    <div class="m-auto py-2 lg:py-4 lg:px-20 px-5 flex gap-10 rounded-full" style="background: linear-gradient(270deg, #4C2CFF 44.14%, rgba(76, 44, 255, 0) 109.57%);">
        <h2 class="text-white my-auto raleway-800 text-[14px] lg:text-[64px] leading-[12.83px] lg:leading-[58px]"><?= $title; ?></h2>
        <a href="<?= $link['url'] ?>" class="bg-white text-purple-10 raleway-700 text-[12px] lg:text-2xl h-max py-2 lg:py-4 lg:px-14 px-5 rounded-full"><?= $link['title'] ?></a>
    </div>    
</div>


<?php } ?>