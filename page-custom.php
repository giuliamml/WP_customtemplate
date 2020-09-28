<?php /* Template Name: Custom Template */ ?>

<?php get_header(); ?>

<?php
  while ( have_posts() ) : the_post();
?>

<div class='page-content-wrapper'>

  <h1><?php the_title(); ?></h1>

  <?php the_content(); ?>
 
</div>

<?php
  endwhile;
?>

<?php get_footer(); ?>
