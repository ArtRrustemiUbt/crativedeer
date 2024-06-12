<?php if (get_row_layout() == 'faq') {
    $title = get_sub_field('title');
    $description = get_sub_field('description');
    $questions = get_sub_field('questions');

?>
    <div class="w-full bg-[#F5F5F7]">
        <div class="container mx-auto flex items-center justify-center py-20 px-10">
            <div class="w-full">
                <h2 class="text-[64px] raleway-800 text-[#333333] mb-4">Pricing and set up FAQ's</h2>
                <p class="raleway-500 text-[#333333] text-2xl max-w-[823px] mb-20">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <?php foreach ($questions as $question) { ?>
                    <div class="faq-item border-b border-[#4C2CFF] border-2 rounded-2xl mb-5 py-4">
                        <div class="px-10 faq-question cursor-pointer text-[32px] text-[#4C2CFF] raleway-700"><?= $question['question'] ?>
                            <img src="/wp-content/themes/creativedeer/assets/images/down-arrow.svg" class="float-right mt-[15px]">
                        </div>
                        <div class="faq-answer px-10 mt-2 text-[333333] text-2xl">
                            <?= $question['answer'] ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <script>
        document.querySelectorAll('.faq-question').forEach(item => {
            item.addEventListener('click', event => {
                const answer = item.nextElementSibling;
                const allAnswers = document.querySelectorAll('.faq-answer');

                // Hide all answers
                allAnswers.forEach(ans => {
                    if (ans !== answer) ans.style.display = 'none';
                });

                // Toggle the clicked answer
                if (answer.style.display === 'block') {
                    answer.style.display = 'none';
                } else {
                    answer.style.display = 'block';
                }
            });
        });
    </script>
<?php } ?>