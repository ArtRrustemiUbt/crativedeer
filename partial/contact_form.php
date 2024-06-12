<?php
if (get_row_layout() == 'contact_form') {
    $icon = get_sub_field('icon');
    $icon2 = get_sub_field('icon_2');
    $phone = get_sub_field('phone');
    $description = get_sub_field('description');
    $description2 = get_sub_field('description_2');
    $phone_number = get_sub_field('phone_number');
    $email = get_sub_field('email');
    $emailField = get_sub_field('email_field');
    $shortcode = get_sub_field('short_code');
    $image = get_sub_field('image');
    $shortcode_output = do_shortcode($shortcode);
?>

    <div class="w-full bg-[#F5F5F7]">
        <div class="container mx-auto flex p-10">
            <div class="rounded-[15px] bg-white flex flex-col gap-10 py-10 my-10 w-full">
                <div class="flex flex-col p-10">
                    <img src="<?= $icon ?>" alt="" class="w-max">
                    <h3><?= $phone ?></h3>
                    <p><?= $description ?></p>
                    <p><?= $phone_number ?></p>
                </div>
                <div class="flex flex-col p-10">
                    <img src="<?= $icon2 ?>" alt="" class="w-max">
                    <h3><?= $email ?></h3>
                    <p><?= $description2 ?></p>
                    <p><?= $emailField ?></p>
                </div>
            </div>
            <div class="bg-[#404143] p-10 rounded-[15px]">
                <?php echo $shortcode_output; ?>
            </div>
            <div class="rounded-[15px] bg-white flex flex-col py-10 my-10 w-full">
                <img src="<?= $image ?>" alt="" class="w-max m-auto">
            </div>
        </div>
    </div>

<?php } ?>