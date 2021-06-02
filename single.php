
<div class='single-post-container'>

<?php get_header('secondary'); ?>


<?php
  while (have_posts()) : the_post();
?>



<div class='single-post-content'>



  <div class='single-post-landing-page'>
    <img src='<?php echo get_the_post_thumbnail_url(get_the_id(), 'large');?>'/>

    <div class='single-post-title-text'>

    <h1><?php the_title(); ?></h1>

    <hr>

    <!-- tags loop -->
      <?php
      $tag_terms = get_the_terms(get_the_id(), 'post_tag');
      //function returns terms-item- of category of post, parameters:(id post, type of category/tag/taxonomy)

      if ($tag_terms) {
          foreach ($tag_terms as $tag_term) {
              echo "<a class='tag-link' href='" . get_term_link($tag_term) . "'>" . '#'. $tag_term->name . "</a> ";
              // print_r($tag_term);
          }
      }
      ?>

    <p><?php the_excerpt(); ?></p>

    <?php the_field('video'); ?>

   </div>

  </div>

 
<!-- category loop<?php
    $category_terms = get_the_terms(get_the_id(), 'category');
    //function returns terms-item- of category of post, parameters:(id post, type of category/tag/taxonomy)

    if ($category_terms) {
        echo "<p>Categories: </p>";

        foreach ($category_terms as $category_term) {
            //category_term is an object
            // print_r($category_term);
            //print_r(object to check)to print elements of obj or array
            echo "<a href='" . get_term_link($category_term) . "'>" . $category_term->name . "</a> ";
        }
    }
  ?> -->

 
<!-- <?php echo get_the_title(); if (has_post_thumbnail(get_the_id())) {
      ?> -->

<!--parameters: (id, size of the img -thumbnail, medium, large-) -->

<?php
  } else {
      echo "no image found";
  }
?>



<div class='content-paragraph'>
<p id='date'><?php the_time('j.m.y') ?></p>


<?php the_content();?> 
<p id='signature'>words and visual by <a href='https://giuliamummolo.com/'>Giulia Mummolo</a></p>


</div>

<div class='resource-list'>

  <h2>resources</h2>

 

  <?php

  

  if (have_rows('resources')):
    while (have_rows('resources')) : the_row();


    $source = get_sub_field('source');
    $author = get_sub_field('author');

      if (have_rows('title')):
       while (have_rows('title')) : the_row();
  
        $title_value = get_sub_field('value');
        $title_URL = get_sub_field('link');
  
        echo "<div class='single-post-resource'>
        <a href=$title_URL>$title_value</a>";
  
      endwhile;
      endif;
    echo " -<p>$source ($author)</p></div>";

  endwhile;
  endif;
  ?>
  

</div>



</div>
<?php
//for use in the loop, list 5 post titles related to first tag on current post

$tags = wp_get_post_tags($post->ID);

if ($tags) {
    $posttags = get_the_tags();
    if ($posttags) {
        foreach ($posttags as $tag) {
            echo   '<div class='."related-posts-heading>".'<h1> more from <span>' . $tag->name .'</span> </h1></div><div class='.'related-posts-wrapper'.'>';
        }
    }
    $first_tag = $tags[0]->term_id;
    $args=array(
'tag__in' => array($first_tag),
'post__not_in' => array($post->ID),
'posts_per_page'=>3,
'ignore_sticky_posts'=>1
);
    $my_query = new WP_Query($args);
    if ($my_query->have_posts()) {
        while ($my_query->have_posts()) : $my_query->the_post(); ?>
        <div class='related-single-post'>

          <a href="<?php the_permalink(); ?>">
            <img class='thumbnail-img' src='<?php echo get_the_post_thumbnail_url(get_the_id(), 'large'); ?>' />
          </a>
          <h2><?php the_title(); ?></h2>
          <a id='single-post-button' href="<?php the_permalink(); ?>">read more</a>



        </div>
<?php
endwhile;
    }
    wp_reset_query();
}
?>
<?php
  endwhile;
?>
</div>
<?php get_footer(); ?> 

</div>