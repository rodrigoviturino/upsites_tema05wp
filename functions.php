<?php 

// INCLUDE
    require get_template_directory().'./include/setup.php';
    require get_template_directory().'./include/customizer/theme-customizer.php';


// HOOKS
    add_action('after_setup_theme' , 'up_after_setup');
    add_action('wp_enqueue_scripts', 'up_theme_styles');

    // Customizer Personalizar
    add_action('customize_register', 'up_customize_register');