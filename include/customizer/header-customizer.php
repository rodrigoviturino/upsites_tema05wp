<?php 
// Rede Social do Header

function up_header_customizer( $wp_customize ) {

    // Settings

    $wp_customize->add_setting('up_btn_sale', ['default' => '']);

    // Sections
    $wp_customize->add_section('up_header_section', [
        'title' => 'Header - Infos e Redes Sociais',
        'priority' => '1'
    ]);

    // Controllers

    // Infos
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,

            'up_btn_sale',
                [
                    'label'=>'Texto Botão de Venda',
                    'section' => 'up_header_section',
                    'settings' => 'up_btn_sale',
                    'type' => 'text'
                ]
        )
    );


}