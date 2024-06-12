<?php
if (get_row_layout() == 'steps') {
    $steps = get_sub_field('steps');
?>

    <div class="container mx-auto py-12 px-10">
        <h2 class="text-center text-2xl font-bold mb-8">Experience Creative Deer in just 4 steps.</h2>
        <div class="flex justify-between px-20">
            <?php
            $totalSteps = count($steps);
            foreach ($steps as $index => $step) : ?>
                <div class="flex flex-col items-center">
                    <div class="flex p-1 border-4 border-purple-10 rounded-full h-max">
                        <div class="bg-purple-10 rounded-full shadow-md w-[70px] h-[70px] flex">
                            <img src="<?= $step['icon'] ?>" alt="<?= $step['title'] ?>" class="m-auto">
                        </div>
                    </div>
                </div>
                <?php if ($index < $totalSteps - 1) : ?>
                    <div class="w-full border-2 h-[2px] border-[#404143] my-auto mx-5"></div>
                <?php endif; ?>
                <!-- <h3 class="text-lg font-semibold"><?= $step['title'] ?></h3>
                <p class="text-gray-500"><?= $step['description'] ?></p> -->
            <?php endforeach; ?>
        </div>
        <div class="flex justify-between">
            <?php
            foreach ($steps as $index => $step) : ?>
                <div class="flex flex-col text-center">
                    <h3 class="raleway-800 text-[44px] text-[#333333]"><?= $step['title'] ?></h3>
                    <p class="raleway-500 text-[26px] text-[#2C2C2C]"><?= $step['description'] ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

<?php } ?>