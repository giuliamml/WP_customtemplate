<?php get_header(); ?>

<?php
  while ( have_posts() ) : the_post();
?>
<div class='single-post-content'>
 
 
  <img src='<?php echo get_the_post_thumbnail_url(get_the_id(), 'large');?>'/>

  <div class='single-post-title-text'>
   <p><?php the_time('j.m.y') ?></p>
   <h1><?php the_title(); ?></h1>
   <!-- tags loop -->
    <?php
    $tag_terms = get_the_terms(get_the_id(), 'post_tag');
    //function returns terms-item- of category of post, parameters:(id post, type of category/tag/taxonomy)

    if($tag_terms) {
      foreach($tag_terms as $tag_term) {
        echo "<a href='" . get_term_link($tag_term) . "'>" . '#'. $tag_term->name . "</a> ";
        // print_r($tag_term);
      }
    }
   ?>

  </div>

 
<!-- category loop<?php
    $category_terms = get_the_terms(get_the_id(), 'category');
    //function returns terms-item- of category of post, parameters:(id post, type of category/tag/taxonomy)

    if($category_terms) {
      echo "<p>Categories: </p>";

      foreach($category_terms as $category_term) {
        //category_term is an object
        // print_r($category_term);
        //print_r(object to check)to print elements of obj or array
        echo "<a href='" . get_term_link($category_term) . "'>" . $category_term->name . "</a> ";
      }
    }
  ?> -->

 
<!-- <?php echo get_the_title(); if (has_post_thumbnail(get_the_id())){

?> -->

<!--parameters: (id, size of the img -thumbnail, medium, large-) -->

<?php
} else {
  echo "no image found";
}
?>
<hr>
<div class='content-paragraph'>
  <?php the_content(); ?>
</div>

<hr>

<h3>.gm</h3>

</div>
<?php
  endwhile;
?>

<?php get_footer(); ?>