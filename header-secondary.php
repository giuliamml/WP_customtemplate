<!doctype html>
<html>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond&family=Source+Code+Pro&display=swap" rel="stylesheet"> 
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text&family=Montserrat&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Alegreya&display=swap" rel="stylesheet"> 
		<?php wp_head(); ?>
	</head>
	<body <?php body_class();?>>
	<!--prints the class wp/woocommers need to display -->

    <header>
		<div class='header-container' id='secondary'>
			<div></div>
			<a id='blog-name' href="<?php echo get_bloginfo() ?>">
				<img src="<?php echo get_bloginfo('template_url') ?>/img/new-logo-gr.png"/> 
			</a>

			<?php echo wp_nav_menu('Main Menu'); ?>


		</div>


	</header>

