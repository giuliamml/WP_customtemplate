<!doctype html>
<html>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono&display=swap" rel="stylesheet"> 
		<?php wp_head(); ?>
	</head>
	<body <?php body_class();?>>
	<!--prints the class wp/woocommers need to display -->

    <header>
		<div class='header-container'>
		<h1>blog name</h1>
	
			<ul class='nav-list'>
				<?php echo wp_nav_menu('Main Menu'); ?>
				
			</ul>
		</div>
	</header>

