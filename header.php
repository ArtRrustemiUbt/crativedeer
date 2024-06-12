<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header class=" bg-white sticky">
        <div class="container mx-auto flex xl:px-20 px-5 justify-between py-3">
            <div class="logo flex logo_image">
                <a href="<?php echo home_url(); ?>" class="my-auto">
                    <?php
                    $logo_url = get_template_directory_uri() . '/assets/images/logo.png';
                    ?>
                    <img src="<?php echo $logo_url; ?>" alt="Logo" class="w-[229px]">

                </a>
            </div>


            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary-menu',
                'menu_id'        => 'primary-menu',
                'menu_class'     => 'main_menu flex flex-wrap items-center justify-between p-5 w-full desktop_menu', // Add your custom classes here
                'container'      => 'nav',
                'container_class' => 'bg-white border-gray-200 lg:flex items-center justify-between w-full hidden w-max', // Add your custom classes here
                'link_before'    => '', // Add HTML before the link text
                'link_after'     => '', // Add HTML after the link text
            ));
            ?>

            <div>

            </div>
        </div>

    </header>
    