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
		<a id='blog-name' href="https://giuliamummolo.com/"><span class='animation'></span><?php echo get_bloginfo(); ?></a>
		<a href='https://giuliamummolo.com/'>home</a>
		<a href='http://journal.giuliamummolo.com/journal/'>journal</a>
	    <p>a collection of writings on fashion design, sustainability and tech<br> by GIULIA MUMMOLO</p>
			<!-- <ul class='nav-list'>
				<?php echo wp_nav_menu('Main Menu'); ?>
				
			</ul> -->
		</div>

		<div class='header-container-mobile'>
		<div id="burger-menu-container" onclick="myFunction(this)">
         <div class="bar1"></div>
         <div class="bar2"></div>
         <div class="bar3"></div>
		
		<div class='burger-menu-items'>
			<a href='https://giuliamummolo.com/'>home</a>
			<a href='http://journal.giuliamummolo.com/journal/'>journal</a>
		</div>
		</div> 
		<h1>journal</h1>
		<p>a collection of writings on fashion design, sustainability and tech by GIULIA MUMMOLO</p>
		</div>

	</header>

