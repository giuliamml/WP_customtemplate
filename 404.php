<!DOCTYPE html>
<html lang="en">
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
<body>
<?php get_header('secondary'); ?>

 <div class='error-page-container'>
	<h1>page not found <br><span class='animation'></span><span class='animation'></span><span class='animation'></span></h1>
	
 </div>

	
</body>
</html>