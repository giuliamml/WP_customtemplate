
<!-- page is not filtering tags -->
<?php get_header(); ?>
<div class='filtered-tags-posts'>
<?php

  $tag_id = get_query_var('tag');
    //parameters:(cat/tag/taxonomy)
    //id of the category/tag
  $args = array(
    'post_type' => array('post'),
    'post_count' => 5,
    'posts_per_page' => 5,
    'orderby' => 'date',
    'order' => 'DESC',
    
    'tax_query' => array(
      array(
        'taxonomy' => 'post_tag',
        'field'    => 'id',
        'terms'    => array($tag_id),
      ),
    ),
    //when you do filtering on website
  );

  $query = new WP_Query($args);
  while($query->have_posts()) : $query->the_post();

?>


<div class='single-filtered-post'>
<a href="<?php echo get_the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(get_the_id(), 'medium'); ?>" alt=""></a>
  <div class='filtered-post-details'>
  <p><?php echo get_the_date(); ?></p>
  <h1><?php the_title(); ?></h1>
  <div><?php the_excerpt(); ?></div>
  <a href="<?php echo get_the_permalink(); ?>"><button>Read article ></button></a>
  <hr>
</div>
</div>

<?php
  endwhile;
  wp_reset_postdata();
?>
</div>

<?php get_footer(); ?>