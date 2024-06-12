<?php if (get_row_layout() == 'ready_to_grow') {
    $title = get_sub_field('title');
    $link = get_sub_field('link');
    $description = get_sub_field('description');
    $image_url = get_template_directory_uri() . '/assets/images/block.png';
?>

    <div class='w-full h-[500px] bg-no-repeat bg-cover bg-purple-10 flex' style="background-image: url('<?php echo $image_url; ?>');">
        <div class="container mx-auto py-8 flex flex-col justify-center gap-10">
            <h2 class="text-white raleway-800 text-[75px] leading-[84px] text-center"><?= $title; ?></h2>
            <p class="text-white raleway-700 text-[65px] leading-[72px] text-center"><?= $description; ?></p>
            <a href="<?= $link['url'] ?>" class="bg-white text-purple-10 raleway-700 text-2xl h-max py-4 px-14 rounded-full w-max mx-auto"><?= $link['title'] ?></a>
        </div>
    </div>

<?php } ?>