<?php
// Rede Social do Header e Footer
require get_template_directory().'/include/customizer/header-customizer.php';
require get_template_directory().'/include/customizer/footer-customizer.php';

function up_customize_register( $wp_customizer ){

    up_header_customizer( $wp_customizer );
    up_footer_customizer( $wp_customizer );

}