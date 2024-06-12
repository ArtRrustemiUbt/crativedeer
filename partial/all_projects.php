<?php if (get_row_layout() == 'all_projects') { ?>

    <div class="container mx-auto py-8 px-10">
        <div class="grid grid-cols-custom gap-8">
            <?php
            // Example data array
            $cards = array_fill(0, 8, 'Tripmonsters');

            // Loop to dynamically generate the cards
            foreach ($cards as $index => $title) {
                $sizeClass = ($index == 3 || $index == 4) ? 'col-span-3' : 'col-span-2';
                echo "
            <div class='$sizeClass'>
                <div class='h-80 bg-[#D9D9D9] rounded-[30px] flex items-center justify-center'>
                <img src='" . get_template_directory_uri() . "/assets/images/image.png' alt='$title'>
                </div>
                <h2 class='mt-2 text-[36px] raleway-600'>$title</h2>
                <div class='flex space-x-2 mt-1'>
                    <span class='text-purple-10 border-2 border-purple-10 px-2 py-1 rounded-full raleway-500 text-sm'>Branding</span>
                    <span class='text-purple-10 border-2 border-purple-10 px-2 py-1 rounded-full raleway-500 text-sm'>Websites</span>
                    <span class='text-purple-10 border-2 border-purple-10 px-2 py-1 rounded-full raleway-500 text-sm'>Printing Materials</span>
                </div>
            </div>";
            }
            ?>
        </div>
    </div>

<?php } ?>