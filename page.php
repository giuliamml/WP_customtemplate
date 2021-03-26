<div class='page-container'>
  
<?php get_header('secondary'); ?>
<?php
  while ( have_posts() ) : the_post();
?>

<div class='page-content-wrapper'>

<h1><?php the_field('purpose_intro') ?></h1>
 <?php the_content(); ?> 
</div>

<?php
  endwhile;
?>

<?php get_footer(); ?>

</div>
