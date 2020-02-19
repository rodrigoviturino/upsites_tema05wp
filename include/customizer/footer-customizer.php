<?php 
// Footer informações das colunas

function up_footer_customizer( $wp_customize ) {
 
    // Settings 
        // Informações
    $wp_customize->add_setting( 'up_title_menu', [ 'default' => "" ]);
    $wp_customize->add_setting( 'up_title_courses', [ 'default' => "" ]);
    $wp_customize->add_setting( 'up_title_topics', [ 'default' => "" ]);
    $wp_customize->add_setting( 'up_title_info', [ 'default' => "" ]);

    $wp_customize->add_setting( 'up_copyright', [ 'default' => "" ]);

        // Rede social Footer
    $wp_customize->add_setting('up_facebook', ['default' => '']);
    $wp_customize->add_setting('up_twitter', ['default' => '']);
    $wp_customize->add_setting('up_linkedin', ['default' => '']);
    $wp_customize->add_setting('up_instagram', ['default' => '']);

    //Sections
    $wp_customize->add_section('up_footer_section', [
        'title' => 'Footer - Infos',
        'priority' => 2
    ]);

    //Controllers 
    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,

            'up_title_menu',
            [
                'label' => 'Titulo Coluna Menu',
                'section' => 'up_footer_section',
                'settings' => 'up_title_menu',
                'type' => 'text' ,

            ]
        )
    );
    
    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,

            'up_title_courses',
            [
                'label' => 'Titulo Coluna Cursos',
                'section' => 'up_footer_section',
                'settings' => 'up_title_courses',
                'type' => 'text' ,

            ]
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,

            'up_title_topics',
            [
                'label' => 'Titulo Coluna Tópicos',
                'section' => 'up_footer_section',
                'settings' => 'up_title_topics',
                'type' => 'text' ,

            ]
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,

            'up_title_info',
            [
                'label' => 'Titulo Coluna Info',
                'section' => 'up_footer_section',
                'settings' => 'up_title_info',
                'type' => 'text' ,

            ]
        )
    );

    // Copyright
    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,

            'up_copyright',
            [
                'label' => 'Texto Copyright',
                'section' => 'up_footer_section',
                'settings' => 'up_copyright',
                'type' => 'text' ,

            ]
        )
    );

  
    
    // Rede Social Footer
    
    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,

            'up_facebook',
            [
                'label' => 'Link do Facebook',
                'section' => 'up_footer_section',
                'settings' => 'up_facebook',
                'type' => 'text' ,

            ]
        )
    );
    
    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,

            'up_twitter',
            [
                'label' => 'Link do Twitter',
                'section' => 'up_footer_section',
                'settings' => 'up_twitter',
                'type' => 'text' ,

            ]
        )
    );
    
    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,

            'up_linkedin',
            [
                'label' => 'Link do Linkedin',
                'section' => 'up_footer_section',
                'settings' => 'up_linkedin',
                'type' => 'text' ,

            ]
        )
    );
    
    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,

            'up_instagram',
            [
                'label' => 'Link do Instagram',
                'section' => 'up_footer_section',
                'settings' => 'up_instagram',
                'type' => 'text' ,

            ]
        )
    );
    

}