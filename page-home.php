<?php
get_header();
?>


<?php
global $post;

if (have_rows('sections')) :
    while (have_rows('sections')) : the_row();
        if (get_row_layout()) {
            get_template_part('partial/' . get_row_layout());
        }
    endwhile;
elseif (get_the_content()) :
endif;
?>

<?php
get_footer();
?>