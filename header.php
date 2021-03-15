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
		<link href="https://fonts.googleapis.com/css2?family=Space+Mono&display=swap" rel="stylesheet">	
		<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond&family=Source+Code+Pro&display=swap" rel="stylesheet"> 

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text&family=Montserrat&display=swap" rel="stylesheet">

		<?php wp_head(); ?>
	</head>
	<body <?php body_class();?>>
	<!--prints the class wp/woocommers need to display -->

    <header>
		<div class='header-container'>
		<?php echo wp_nav_menu('Main Menu'); ?>
		<div id='blog-name'>
		<a id='blog-name' href="https://decoraedit.com/">
		<!-- <img src="<?php echo get_bloginfo('template_url') ?>/img/logo-square-white.svg"/> -->
		</a>
</div>
	

		</div>
<!-- 
		<script>
			function menuOpen() {

            let burgerMenu = document.querySelector("div#burger-menu-container");
            let burgerMenuItems = document.querySelector("div.burger-menu-items");

            burgerMenu.classList.toggle("change");

            if (burgerMenu.className === "") {
            burgerMenuItems.style.display = "none";
            } else if (burgerMenu.className === "change") {
            burgerMenuItems.style.display = 'flex';
            burgerMenuItems.style.flexDirection = 'column';
            burgerMenuItems.style.width = '50vw';
            burgerMenuItems.style.height = '80vh';
            burgerMenuItems.style.position = 'absolute';
            burgerMenuItems.style.zIndex = "1";
			burgerMenuItems.style.background = 'black';
			burgerMenuItems.style.paddingTop = '20%';

		   }
	      }
		</script>

		<div class='header-container-mobile'>
		<div id="burger-menu-container" onclick="menuOpen()">
         <div class="bar1"></div>
         <div class="bar2"></div>
         <div class="bar3"></div>
		</div>
		<div class='burger-menu-items'>
	
			
		 <a href="http://journal.giuliamummolo.com/journal/">journal<sup>NEW</sup></a>    
		 <a href="https://giuliamummolo.com/projects.html">web development</a>
         <a href="https://giuliamummolo.com/contacts.html">contacts</a>
         <a href="https://giuliamummolo.com/about.html">about</a>
         <a href="http://giuliamummolo.com/">home</a>
		 <a href='https://giuliamummolo.com/files/giulia-mummolo-cv.pdf'>cv</a>

		</div>
		<h1>journal</h1>
		<p>a collection of writings on fashion design, sustainability and tech by GIULIA MUMMOLO</p>
		</div> -->

	</header>

