<?php
if (get_row_layout() == 'partners') {
    $title = get_sub_field('title');
    $logos = get_sub_field('logos');
?>

    <div class="lg:px-10 lg:py-20 p-5 w-full bg-[#F5F5F7]">
        <div class="container mx-auto">
            <h2 class="raleway-800 text-[20px] lg:text-[64px] leading-[58px] text-purple-10 text-center mb-10"><?= $title; ?></h2>

            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <?php foreach ($logos as $logo) { ?>
                        <div class="swiper-slide">
                            <img src="<?= $logo['logo'] ?>" alt="">
                        </div>
                    <?php } ?>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>

    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 6,
            spaceBetween: 40,
            freeMode: true,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
<?php } ?>