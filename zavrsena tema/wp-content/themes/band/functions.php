<?php
    
    // THeme support - sta tema podrzava
    function band_theme_support() {
        
        // Navigacija
        register_nav_menus(array(
            'primary' => __('Primary Menu')
        ));
        
        //Izdvojena slika - featured image
        add_theme_support('post-thumbnails');
        
    }
    add_action('after_setup_theme', 'band_theme_support');


    function set_excerpt_length() {
        return 70;
    }
    add_filter('excerpt_length', 'set_excerpt_length');


    //Widgets
    function sidebar($id) {
        register_sidebar(array(
            'name' => 'Sidebar',
            'id' => 'sidebar',
            'before_widget' => '<div class="box">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
        ));
    }
    add_action('widgets_init', 'sidebar');