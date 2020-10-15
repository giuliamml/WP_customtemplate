<?php get_header(); ?>

<?php
  while ( have_posts() ) : the_post();
?>
<div class='single-project-content'>
  <div class='single-project-details-wrapper'>
<img src='<?php echo get_the_post_thumbnail_url(get_the_id(), 'large');?>'/>


<div class='single-project-details'>
<h1><?php the_title(); ?></h1>
<p>Project description: <?php the_field('subtitle') ?></p>


<hr>

<?php
    $project_terms = get_the_terms(get_the_id(), 'project-type');
    //function returns terms-item- of category of post, parameters:(id post, type of category/tag/taxonomy)

    if($project_terms) {
      echo "<p>Project type: ";

      foreach($project_terms as $project_term) {
        //category_term is an object
        // print_r($category_term);
        //print_r(object to check)to print elements of obj or array
        echo "<a href='" . get_term_link($project_term) . "'>" . $project_term->name . "</a></p> ";
      }
    }
  ?>


<hr>
<div class='project-links'>

<?php 

if (have_rows('link')):
  while (have_rows('link')) : the_row();

  $link_value = get_sub_field('value');
  $link_URL = get_sub_field('url');

  echo "<a href=$link_URL>$link_value</a>";
 
  
endwhile;
endif;
?>
</div>
<div class='project-technologies'>
<?php

if( have_rows('technologies') ):

    // Loop through rows.
    while( have_rows('technologies') ) : the_row();

        // Load sub field value.
        $image_id = get_sub_field('technology');
        // Do something...
      print_r($image_id);
        echo "<img src=' " . wp_get_attachment_image_url($image_id, 'thumbnail') . " ' />";

    // End loop.
    endwhile;

endif;

?>
</div>




</div>

</div>

<div class='single-project-description'>
<hr>
<?php the_content(); ?>
<hr>
</div>
<!-- the_field() is not a build in function but added with plug in advanced custom field argument(field name)
also works as build in function with echo get_field() or the_field()
the_field() returns img id
-->
<div class='project-gallery'>
<?php
//acf function (no wp), checking if the fields has rows. function doesn't change
if( have_rows('images') ):

    // Loop through rows.
    while( have_rows('images') ) : the_row();

        // Load sub field value.
        $image_id = get_sub_field('image');
        // Do something...
        echo "<img id='project_gallery' src=' " . wp_get_attachment_image_url($image_id, 'large') . " ' />";

    // End loop.
    endwhile;

endif;

?>


<!-- <p class='single-post-page-date'>This article was published on <?php the_time('j.m.y') ?></p> -->
<!-- <?php echo get_the_title(); if (has_post_thumbnail(get_the_id())){

?> -->

<!--parameters: (id, size of the img -thumbnail, medium, large-) -->

<?php
} else {
  echo "no image found";
}
?>

</div>

<h3><span class='animation' id='single-post'></span>gm</h3>

<?php
  endwhile;
?>

<?php get_footer(); ?>
