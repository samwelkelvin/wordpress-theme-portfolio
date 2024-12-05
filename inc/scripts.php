<?php

/**
 * 
 * Register css scripts.
 */
function portfolio_load_styles()
{
   // wp_register_style('portfolio-additional-style', THEME_DIR_URI . '/assets/css/additional.css', array(), filemtime(get_template_directory() . '/assets/css/additional.css'), 'all');

    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', array(), THEME_VERSION, 'all');

    wp_register_style('portfolio-bootstrap', THEME_DIR_URI . '/assets/vendor/bootstrap/css/bootstrap.min.css', array(), filemtime(get_template_directory() . '/assets/vendor/bootstrap/css/bootstrap.min.css'), 'all');
    
    wp_register_style('portfolio-bootstrap-icons', THEME_DIR_URI . '/assets/vendor/bootstrap-icons/bootstrap-icons.css', array('portfolio-bootstrap'), filemtime(get_template_directory() . '/assets/vendor/bootstrap-icons/bootstrap-icons.css'), 'all');
    
    wp_register_style('portfolio-aos', THEME_DIR_URI . '/assets/vendor/aos/aos.css', array('portfolio-bootstrap-icons'), filemtime(get_template_directory() . '/assets/vendor/aos/aos.css'), 'all');
    
    wp_register_style('portfolio-swipper', THEME_DIR_URI . '/assets/vendor/swiper/swiper-bundle.min.css', array('portfolio-aos'), filemtime(get_template_directory() . '/assets/vendor/swiper/swiper-bundle.min.css'), 'all');
    
    wp_register_style('portfolio-glightbox', THEME_DIR_URI . '/assets/vendor/glightbox/css/glightbox.min.css', array('portfolio-swipper'), filemtime(get_template_directory() . '/assets/vendor/glightbox/css/glightbox.min.css'), 'all');
    
    wp_register_style('portfolio-main-style', THEME_DIR_URI . '/assets/css/main.css', array('portfolio-glightbox'), filemtime(get_template_directory() . '/assets/css/main.css'), 'all');

    // can use condition
    wp_enqueue_style('google-fonts');

    wp_enqueue_style('portfolio-bootstrap');

    wp_enqueue_style('portfolio-bootstrap-icons');

    wp_enqueue_style('portfolio-aos');

    wp_enqueue_style('portfolio-swipper');
    
    wp_enqueue_style('portfolio-glightbox');

    wp_enqueue_style('portfolio-main-style');

}

add_action('wp_enqueue_scripts', 'portfolio_load_styles');

/**
 * Register js scripts.
 */
function portfolio_load_scripts()
{

    wp_register_script('portfolio-bundle', THEME_DIR_URI . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array(), filemtime(get_template_directory() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js'), true);
    
    wp_register_script('portfolio-validate', THEME_DIR_URI . '/assets/vendor/php-email-form/validate.js', array('portfolio-bundle'), filemtime(get_template_directory() . '/assets/vendor/php-email-form/validate.js'), true);
    
    wp_register_script('portfolio-ao-js', THEME_DIR_URI . '/assets/vendor/aos/aos.js', array('portfolio-validate'), filemtime(get_template_directory() . '/assets/vendor/aos/aos.js'), true);
    
    wp_register_script('portfolio-waypont', THEME_DIR_URI . '/assets/vendor/waypoints/noframework.waypoints.js', array('portfolio-ao-js'), filemtime(get_template_directory() . '/assets/vendor/waypoints/noframework.waypoints.js'), true);

    wp_register_script('portfolio-vanilla', THEME_DIR_URI . '/assets/vendor/purecounter/purecounter_vanilla.js', array('portfolio-waypoint'), filemtime(get_template_directory() . '/assets/vendor/purecounter/purecounter_vanilla.js'), true);

    wp_register_script('portfolio-swipper', THEME_DIR_URI . '/assets/vendor/swiper/swiper-bundle.min.js', array('portfolio-vanilla'), filemtime(get_template_directory() . '/assets/vendor/swiper/swiper-bundle.min.js'), true);

    wp_register_script('portfolio-glightbox-js', THEME_DIR_URI . '/assets/vendor/glightbox/js/glightbox.min.js', array('portfolio-swipper'), filemtime(get_template_directory() . '/assets/vendor/glightbox/js/glightbox.min.js'), true);

    wp_register_script('portfolio-pkgd', THEME_DIR_URI . '/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js', array('portfolio-vanilla'), filemtime(get_template_directory() . '/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js'), true);

    wp_register_script('portfolio-isotope-js', THEME_DIR_URI . '/assets/vendor/isotope-layout/isotope.pkgd.min.js', array('portfolio-pkgd'), filemtime(get_template_directory() . '/assets/vendor/isotope-layout/isotope.pkgd.min.js'), true);

    wp_register_script('portfolio-main-js', THEME_DIR_URI . '/assets/js/main.js', array('portfolio-isotope-js'), filemtime(get_template_directory() . '/assets/js/main.js'), true);


    wp_enqueue_script('portfolio-bundle');

    wp_enqueue_script ('portfolio-validate');

    wp_enqueue_script('portfolio-ao-js');

    wp_enqueue_script('portfolio-waypont');

    wp_enqueue_script('portfolio-vanilla');

    wp_enqueue_script('portfolio-swipper');
    
    wp_enqueue_script('portfolio-glightbox-js');

    wp_enqueue_script('portfolio-pkgd');

    wp_enqueue_script('portfolio-isotope-js');

    wp_enqueue_script('portfolio-main-js');

}

add_action('wp_enqueue_scripts', 'portfolio_load_scripts');

/**
 * Register editor styles.
 */
function portfolio_add_editor_styles()
{
    add_theme_support('editor-styles');

    add_editor_style(THEME_DIR_URI . '/assets/css/additional.css');

    add_editor_style('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

    add_editor_style(THEME_DIR_URI . '/assets/vendor/bootstrap/css/bootstrap.min.css');

    add_editor_style(THEME_DIR_URI . '/assets/vendor/bootstrap-icons/bootstrap-icons.css');

    add_editor_style(THEME_DIR_URI . '/assets/vendor/aos/aos.css');

    add_editor_style(THEME_DIR_URI . '/assets/vendor/swiper/swiper-bundle.min.css');

    add_editor_style(THEME_DIR_URI . '/assets/vendor/glightbox/css/glightbox.min.css');

    add_editor_style(THEME_DIR_URI . '/assets/css/main.css');

}

add_action('after_setup_theme', 'portfolio_add_editor_styles');
