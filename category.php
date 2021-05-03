<?php get_header('secondary'); ?>

<?php
  $category_id = get_query_var('cat');
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
        'taxonomy' => 'category',
        'field'    => 'id',
        'terms'    => array($category_id),
      ),
    ),
    //when you do filtering on website
  );

  $query = new WP_Query($args);
  while($query->have_posts()) : $query->the_post();
?>

<div class='filter-categories-container'>


  <div class='filter-category-img'>
    <img src="<?php echo get_the_post_thumbnail_url(get_the_id(), 'large'); ?>" alt="">
  </div>

  <div class='filter-category-details'>
    <h1><?php the_title(); ?></h1>
    <p class='post-date'><?php echo get_the_date(); ?></p>
    <p><?php the_excerpt(); ?></p>
    <a href="<?php echo get_the_permalink(); ?>">Read more</a>
  </div>

</div>

<?php
  endwhile;
  wp_reset_postdata();
?>

<?php get_footer(); ?>