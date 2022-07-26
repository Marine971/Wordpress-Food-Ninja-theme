<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/css/bootstrap.css'; ?>">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>

<body <?php body_class(); ?>>
	<header id="site-header" class="menu">
		<div class="container-fluid ">
			<section class="row ">
                <div class="col-md-3 offset-md-1">
                <h1 id="title"><?php echo get_bloginfo( 'name' ); ?></h1>
                </div>
                <div class="col-md-3 offset-md-5">
                    <ul>
                    <header id="site-header" class="header-footer-group" role="banner">
                    <?php 
                        wp_nav_menu( 
                            array( 
                                'theme_location' => 'my-custom-menu'
                            ) 
                        ); 
                    ?>
                    </ul>
                </div>
            </section>
        </div>
    </header>

