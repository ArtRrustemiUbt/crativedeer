<?php
if (get_row_layout() == 'hero') {
    $title = get_sub_field('title');
    $description = get_sub_field('description');
    $link = get_sub_field('link');
    $image = get_sub_field('image');

    $words = explode(' ', $title);
    $lastWord = array_pop($words);
    $restOfTitle = implode(' ', $words);
    $formattedTitle = $restOfTitle . ' <span class="text-purple-10 bg-custom-highlight">' . $lastWord . '</span>';
?>
    <div class="w-full bg-[#F5F5F7]">
        <div class="container mx-auto flex flex-col-reverse lg:flex-row justify-between lg:p-20 px-4 py-10">
            <div class="flex flex-col my-auto max-w-[746px] gap-8">
                <h1 class="raleway-800 text-[30px] leading-[33.6px] lg:text-[75px] lg:leading-[84px] text-black-800"><?= $formattedTitle; ?></h1>
                <p class="raleway-500 text-[12px] leading-[13.44px] lg:text-[32px] lg:leading-[35.84px] text-black-800"><?= $description; ?></p>
                <a href="<?= $link['url']; ?>" class="text-white text-[14px] lg:text-2xl bg-purple-10 w-max rounded-full py-[10px] px-[30px]"><?= $link['title']; ?></a>
            </div>
            <img src="<?= $image; ?>" alt="" class="lg:w-[600px] lg:h-[600px] w-[300px] h-[300px] object-contain mx-auto">
        </div>
    </div>


<?php } ?>