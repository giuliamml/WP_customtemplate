<?php get_header(); ?>

<?php
  while ( have_posts() ) : the_post();
?>
<div class='single-project-content'>
<img src='<?php echo
wp_get_attachment_image_url(get_field('banner'), 'large');
//function to retrive img (img id, size)
?>' />

<div class='single-project-details'>
<h1><?php the_title(); ?></h1>

<?php
    $project_terms = get_the_terms(get_the_id(), 'project-type');
    //function returns terms-item- of category of post, parameters:(id post, type of category/tag/taxonomy)

    if($project_terms) {
      echo "<p>Project type: </p>";

      foreach($project_terms as $project_term) {
        //category_term is an object
        // print_r($category_term);
        //print_r(object to check)to print elements of obj or array
        echo "<a href='" . get_term_link($project_term) . "'>" . $project_term->name . "</a> ";
      }
    }
  ?>

<p>Project description: <?php the_field('subtitle') ?></p>







</div>
<hr>

<?php the_content(); ?>
<hr>

<!-- the_field() is not a build in function but added with plug in advanced custom field argument(field name)
also works as build in function with echo get_field() or the_field()
the_field() returns img id
-->
<div class='project-gallery'>
<?php
//acf function (no wp), checking if the fields has rows. function doesn't change
if( have_rows('gallery') ):

    // Loop through rows.
    while( have_rows('gallery') ) : the_row();

        // Load sub field value.
        $image_id = get_sub_field('image');
        $caption = get_sub_field('caption');
        // Do something...

        echo "<div class='slider'> <img src=' " . wp_get_attachment_image_url($image_id, 'medium') . " ' />";
        echo "<p>" . $caption . "</p> </div>";

    // End loop.
    endwhile;

endif;

?>
</div>

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
<?php
  endwhile;
?>

<?php get_footer(); ?>
