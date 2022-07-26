<?php
//ajouter une nouvelle zone de menu à mon thème
function my_custom_menu() {
    register_nav_menus(
        array(
            'my-custom-menu' => _( 'My Custom Menu' ),
            'my-custom-menu-2' =>_('My Second Custom Menu')
        )
    );
}

add_action( 'init', 'my_custom_menu' );

function fninja_customize_register( $wp_customize ) 
{

    ######################## Home page ############################
    $wp_customize->add_section( 'fninja_home' , array(
        'title'    => __( 'Home management', 'starter' ),
        'priority' => 3
    ) );   

    $wp_customize->add_setting( 'Index_title_text_block' , array(
        'default'   => __( 'The Food Ninja Blog', 'theme-name' ),
		
        
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize,'fninja_home', array(
        'label'    => __( 'Title page' ),
        'section'  => 'fninja_home',
        'settings' => 'Index_title_text_block',
		'type'     => 'text'
    ) ) );

    $wp_customize->add_setting( 'Index_subtitle_text_block' , array(
        'default'   => __( 'A blog about food, experiences, and recipes.', 'theme-name' ),
		
        
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize,'fninja_home', array(
        'label'    => __( 'Subtitle page' ),
        'section'  => 'fninja_home',
        'settings' => 'Index_subtitle_text_block',
		'type'     => 'text'
    ) ) );





    ######################## Section footer ############################
    $wp_customize->add_section( 'fninja_section_footer' , array(
        'title'    => __( 'Footer management', 'starter' ),
        'priority' => 4
    ) );   

    $wp_customize->add_setting( 'Copyright_text_block' , array(
        'default'   => __( 'Copyright © 2021 Food Ninja Blog. All Rights Reserved.', 'theme-name' ),
		
        
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize,'fninja_section_footer',array(
        'label'    => __( 'Copyright', 'starter' ),
        'section'  => 'fninja_section_footer',
        'settings' => 'Copyright_text_block',
		'type'     => 'text'
    ) ) );
}


add_action( 'customize_register', 'fninja_customize_register');

?>