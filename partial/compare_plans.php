<?php if (get_row_layout() == 'compare_plans') {
    $title = get_sub_field('title');
    $description = get_sub_field('description');
    $plans = get_sub_field('plans');

?>

    <div class="w-full bg-white py-20 px-10">
        <div class="container mx-auto rounded-[30px] py-10" style="background: linear-gradient(265.4deg, #030616 46.1%, #4C2CFF 100.4%);">
            <div class="flex flex-col px-10">
                <h2 class="text-white raleway-700 text-[40px] leading-[46px]"><?= $title ?></h2>
                <p class="max-w-[669px] text-white text-xl"><?= $description; ?> </p>
            </div>
            <div class="bg-white flex justify-between mt-10 py-10 mx-[1px]">
                <div class="w-1/2">
                    <p class="text-[#000000] raleway-600 text-xl leading-[23px] ml-20">Service Category</p>
                </div>
                <div class="w-1/2 flex justify-between px-10">
                    <div class="flex flex-col text-center">
                        <p class="text-[#000000] text-xl raleway-600">Essential</p>
                        <p class="raleway-400 text-[#000000] text-sm">Simple design work</p>
                    </div>
                    <div class="flex flex-col text-center">
                        <p class="text-[#000000] text-xl raleway-600">Agency</p>
                        <p class="raleway-400 text-[#000000] text-sm">Complicated design work</p>
                    </div>
                    <div class="flex flex-col text-center">
                        <p class="text-[#000000] text-xl raleway-600">PRO</p>
                        <p class="raleway-400 text-[#000000] text-sm">Complex design work</p>
                    </div>
                </div>
            </div>
            <div class="mx-[1px] bg-white">
                <div class="accordion-group" data-accordion="default-accordion">
                    <?php
                    foreach ($plans as $plan) {
                        foreach ($plan['plan'] as $index => $detail) {
                    ?>
                            <div class="border border-solid border-[#000000] p-4 w-full flex accordion-item<?= $index === 0 ? ' allwayshow' : ' hidden' ?>">
                                <div class="w-1/2">
                                    <p><?= $detail['title'] ?></p>
                                    <p><?= $detail['description'] ?></p>
                                </div>
                                <div class="w-1/2 flex justify-between px-10">
                                    <div class="flex flex-col text-center">
                                        <img src="/wp-content/themes/creativedeer/assets/images/<?= $detail['col_1'] === "Yes" ? 'checked.png' : ($detail['col_1'] === "No" ? 'close.png' : 'blank.png') ?>" alt="<?= $detail['col_1'] === "Yes" ? 'Tick Icon' : ($detail['col_1'] === "No" ? 'X Icon' : '') ?>" class='w-[50px] m-auto'>
                                    </div>
                                    <div class="flex flex-col text-center">
                                        <img src="/wp-content/themes/creativedeer/assets/images/<?= $detail['col_2'] === "Yes" ? 'checked.png' : ($detail['col_2'] === "No" ? 'close.png' : 'blank.png') ?>" alt="<?= $detail['col_1'] === "Yes" ? 'Tick Icon' : ($detail['col_1'] === "No" ? 'X Icon' : '') ?>" class='w-[50px] m-auto'>
                                    </div>
                                    <div class="flex flex-col text-center">
                                        <img src="/wp-content/themes/creativedeer/assets/images/<?= $detail['col_1'] === "Yes" ? 'checked.png' : ($detail['col_1'] === "No" ? 'close.png' : 'blank.png') ?>" alt="<?= $detail['col_3'] === "Yes" ? 'Tick Icon' : ($detail['col_3'] === "No" ? 'X Icon' : '') ?>" class='w-[50px] m-auto'>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

<?php } ?>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const accordionItems = document.querySelectorAll('.accordion-item');
        accordionItems.forEach(item => {
            item.addEventListener('click', () => {
                if (!item.classList.contains('allwayshow')) {
                    item.classList.toggle('hidden');
                    item.classList.toggle('active');
                } else {
                    const otherItems = document.querySelectorAll('.accordion-item.hidden');
                    otherItems.forEach(otherItem => {
                        otherItem.classList.toggle('hidden');
                        otherItem.classList.toggle('active');
                    });
                }
            });
        });
    });
</script>