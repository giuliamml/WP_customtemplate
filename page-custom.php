<?php /* Template Name: Custom Template */ ?>

<?php get_header(); ?>

<?php
  while ( have_posts() ) : the_post();
?>

<div class='page-custom-content-wrapper'>

  <h1><?php the_title(); ?></h1>

  <hr>

  <?php the_content(); ?>


  <hr>
  <h3>.gm</h3>

 
</div>

<?php
  endwhile;
?>

<?php get_footer(); ?>
