<?php get_header(); ?>

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

<div>
  <img src="<?php echo get_the_post_thumbnail_url(get_the_id(), 'thumbnail'); ?>" alt="">
  <h2><?php the_title(); ?></h2>
  <p><?php echo get_the_date(); ?></p>
  <div><?php the_excerpt(); ?></div>
  <a href="<?php echo get_the_permalink(); ?>">Read article</a>
  <hr>
</div>

<?php
  endwhile;
  wp_reset_postdata();
?>

<?php get_footer(); ?>