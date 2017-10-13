<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<title><?php wp_title('/'); ?></title>
		<link rel="alternate" type="application/rdf+xml" title="RDF mapping" href="<?php bloginfo('rdf_url'); ?>">
		<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss_url'); ?>">
		<link rel="alternate" type="application/rss+xml" title="Comments RSS" href="<?php bloginfo('comments_rss2_url'); ?>">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
		<?php wp_head(); ?>
	</head>
	<!-- BEGIN body -->
	<body <?php body_class(); ?>>			
		<!-- Main wrapper -->
        <div id="wrapper" class="boxed">
        	<div style="padding-top: 20px;"></div>            
            <!-- Header -->
            <header id="header" class="center container">
            	<div id="logo">
				    <a href="<?php echo home_url(); ?>">
						<img src="<?php if (defined('FW')){ echo fw_get_db_settings_option('kdv_logo')['url']; }?>" alt="<?php bloginfo('description'); ?>">
					</a>  
				</div>
			</header>
            <!-- Primary navigation -->
			<nav id="primary-navigation" class="light">
				<div class="inner">
					<?php
						$args = array('theme_location' => 'top', 'container'=> 'div', 'container_class' => 'container', 'menu_class' => 'primary-navigation', 'menu_id' => 'main_menu', 'before' => '<span style="background-color: #FF9900"></span>');
						wp_nav_menu($args);
					?>
				</div>
			<nav>
			<div style="margin-bottom: 25px;"></div>