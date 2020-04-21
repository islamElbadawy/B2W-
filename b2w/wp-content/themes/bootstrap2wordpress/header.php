<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_to_Wordpress
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/assets/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/assets/css/bootstrap.min.css">
	
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/assets/css/font-awesome/css/font-awesome.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

        
       

	<?php wp_head(); ?>
	 <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bootstrap2wordpress' ); ?></a>

	<!------Header------>
        <header class="site-header" role="banner">

            <!-----Navbar------>
            <div class="navbar-wrapper">
                <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle Navegation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="/"><img src="<?php bloginfo('stylesheet_directory') ?>/assets/images/logo.png" alt="Bootstrap To Wordpress"></a>
						</div><!--Navbar-header-->
						 <!--
                        If the menu (WP admin area) is not set,
                        then the "menu_class" is applied to "container".
                        In other words, it overwrites the "container_class".
                        Ref: http://wordpress.org/support/topic/wp_nav_menu-menu_class-usage-bug?replies=4
                        -->

                        <?php
                        wp_nav_menu(array(
                                'theme_location' => 'primary',
                                'container'      => 'nav',
                                'container_class'=> 'navbar-collapse collapse',
                                'menu_class'     => 'nav navbar-nav navbar-right'
                            )
                        );
                        ?>
                    </div><!--container-->
                </div><!--navbar-->
            </div><!--navbar-wrapper-->

        </header>