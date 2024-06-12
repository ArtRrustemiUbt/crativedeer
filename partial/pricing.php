<?php
if (get_row_layout() == 'pricing') {
    $pricing = get_sub_field('repeter');
    $poundImg = get_template_directory_uri() . '/assets/images/pound.svg';
    $checked = get_template_directory_uri() . '/assets/images/checked.png';
    $comingSoonImg = get_template_directory_uri() . '/assets/images/coming-soon.png';
    $pricing = is_array($pricing) ? $pricing : [];

?>

    <div class="w-full px-10 py-20 bg-[#F5F5F7]">
        <div class="container mx-auto flex flex-col">
            <div class="flex mx-auto">
                <?php foreach ($pricing as $key => $price) { ?>
                    <h4 id="category_<?= $key ?>" class="category-tab text-[#000000] raleway-600 text-[32px] leading-[31px] px-8 py-3 <?= $key === 0 ? 'border-b-2 border-b-[#4C2CFF]' : '' ?>">
                        <?= htmlspecialchars($price['category']) ?>
                    </h4>
                <?php } ?>
            </div>
            <div class="text-center flex flex-col">
                
                <?php foreach ($pricing as $key => $price) { ?>
                    <div id="subcategory_<?= $key ?>" class="subcategory-content <?= $key === 0 ? '' : 'hidden' ?> text-center flex flex-col">
                        <h2 class="text-[#4C2CFF] raleway-800 text-[75px] leading-[84px] my-14"><?= htmlspecialchars($price['title']) ?></h2>
                        <p class="text-[#000000] text-2xl leading-[26px]"><?= htmlspecialchars($price['description']) ?></p>
                        <div class="flex mx-auto my-10 gap-5">
                            <?php
                            $plans = isset($price['plans']) && is_array($price['plans']) ? $price['plans'] : [];
                            foreach ($plans as $subKey => $plan) { ?>
                                <p id="month_<?= $subKey; ?>" class="month-tab <?= $subKey === 0 ? 'bg-[#4C2CFF] text-white' : 'bg-[#E8E8E8] text-[#000000]' ?> rounded-full px-10 py-3 raleway-400 text-2xl leading-[26px]">
                                    <?= htmlspecialchars($plan['title']) ?>
                                </p>
                            <?php } ?>
                        </div>


                        <?php
                        foreach ($plans as $subKey => $plan) { ?>
                            <div id="plans_<?= $subKey ?>" class="plan-content <?= $subKey === 0 ? '' : 'hidden' ?> flex justify-between">
                                <?php
                                $planCards = isset($plan['plan_cards']) && is_array($plan['plan_cards']) ? $plan['plan_cards'] : [];
                                foreach ($planCards as $planKey => $planCard) { ?>
                                    <div class="border border-[#4C2CFF] <?= $planKey === 1 ? 'bg-purple-10' : 'bg-purple-10-05 mt-10' ?> rounded-[30px] p-10 text-left w-max">
                                        <p class="raleway-700 <?= $planKey === 1 ? 'text-[#27FF97]' : 'text-[#000000]' ?> text-[32px] leading-[35px]"><?= htmlspecialchars($planCard['type']) ?></p>
                                        <p class="raleway-700 <?= $planKey === 1 ? 'text-white' : 'text-[#000000]' ?> text-[40px] leading-[53.76px] my-2"><?= htmlspecialchars($planCard['price']) ?>/ first month</p>
                                        <p class="raleway-700 <?= $planKey === 1 ? 'text-white' : 'text-[#000000]' ?> text-[24px] leading-[26.88px] my-2"><?= htmlspecialchars($planCard['description_1']) ?></p>
                                        <p class="raleway-500 <?= $planKey === 1 ? 'text-white' : 'text-[#000000]' ?> text-[16px] leading-[17.92px] my-2"><?= htmlspecialchars($planCard['description_2']) ?></p>
                                        <p class="raleway-500 <?= $planKey === 1 ? 'text-white' : 'text-[#000000]' ?> text-[16px] leading-[17.92px]"><?= htmlspecialchars($planCard['description_3']) ?></p>
                                        <div class="border border-[#4C2CFF] w-full p-3 rounded-[15px] bg-white my-5 max-w-[420px]">
                                            <div class="flex">
                                                <img src="<?= $poundImg ?>" alt="">
                                                <p class="raleway-700 text-[#000000] text-[24px] leading-[26.88px] my-2 ml-2"><?= htmlspecialchars($planCard['card_title']) ?></p>
                                            </div>
                                            <p class="raleway-500 text-[#000000] text-[16px] leading-[19px] py-2"><?= htmlspecialchars($planCard['card_description']) ?></p>
                                        </div>
                                        <p class="raleway-700 text-[16px] leading-[17px] <?= $planKey === 1 ? 'text-white' : 'text-[#000000]' ?>"><?= htmlspecialchars($planCard['plans_title']) ?></p>

                                        <?php
                                        $features = isset($planCard['features']) && is_array($planCard['features']) ? $planCard['features'] : [];
                                        foreach ($features as $feature) { ?>
                                            <div class="flex gap-2 my-4">
                                                <img src="<?= $checked ?>" alt="" class="max-w-[17px] min-w-[17px]">
                                                <p class="raleway-500 <?= $planKey === 1 ? 'text-white' : 'text-[#000000]' ?> text-[16px] leading-[17.92px]"><?= htmlspecialchars($feature['feature_title']) ?></p>
                                            </div>
                                        <?php } ?>

                                        <div class="w-full border border-purple-10 h-[1px] my-10"></div>
                                        <div class="w-full flex">
                                            <button class="bg-purple-10 text-white text-[26px] raleway-600 rounded-full px-10 py-3 mx-auto <?= $planKey === 1 ? 'border-4 border-white' : '' ?>">Get started</button>
                                        </div>
                                    </div>
                                <?php }
                                if (empty($planCards)) { ?>
                                    <div class="w-full flex">
                                        <img src="<?= $comingSoonImg ?>" class="mx-auto" alt="Coming Soon">
                                    </div>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>

            <p class="raleway-500 text-[#000000] text-2xl max-w-[866px] mx-auto text-center my-14">Every plan includes unlimited requests, unlimited revisions, unlimited users and unlimited brands.</p>
            <p class="raleway-500 text-[#000000] text-2xl text-center mb-14">All pricing excludes VAT</p>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const categoryTabs = document.querySelectorAll(".category-tab");
            const subcategoryContents = document.querySelectorAll(".subcategory-content");
            const monthTabs = document.querySelectorAll(".month-tab");
            const planContents = document.querySelectorAll(".plan-content");

            // Function to handle category tab clicks
            categoryTabs.forEach(tab => {
                tab.addEventListener("click", function() {
                    const targetId = this.id.replace('category_', 'subcategory_');

                    subcategoryContents.forEach(content => {
                        if (content.id === targetId) {
                            content.classList.remove("hidden");
                        } else {
                            content.classList.add("hidden");
                        }
                    });

                    categoryTabs.forEach(tab => tab.classList.remove('border-b-2', 'border-b-[#4C2CFF]'));
                    this.classList.add('border-b-2', 'border-b-[#4C2CFF]');
                });
            });

            // Function to handle month tab clicks
            monthTabs.forEach(tab => {
                tab.addEventListener("click", function() {
                    const targetId = this.id.replace('month_', 'plans_');

                    planContents.forEach(plan => {
                        if (plan.id === targetId) {
                            plan.classList.remove("hidden");
                        } else {
                            plan.classList.add("hidden");
                        }
                    });

                    monthTabs.forEach(tab => {
                        tab.classList.remove('bg-[#4C2CFF]', 'text-white');
                        tab.classList.add('bg-[#E8E8E8]', 'text-[#000000]');
                    });
                    this.classList.add('bg-[#4C2CFF]', 'text-white');
                    this.classList.remove('bg-[#E8E8E8]');
                });
            });
        });
    </script>

<?php } ?>