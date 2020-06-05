<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo(); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link href="//db.onlinewebfonts.com/c/6ef3076e880d44c4f86c908020821c7b?family=FTY+SKORZHEN+NCV" rel="stylesheet" type="text/css"/> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <!-- nav -->
    <nav>
        <div class="container">
            <a class="logo"  href="<?php echo home_url('/'); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/Logo%202.png" alt=""></a>
            <?php
                $args = array(
                    'theme_location' => 'primary'
                );
            ?>
            <?php wp_nav_menu('primary'); ?>
        </div>
    </nav>