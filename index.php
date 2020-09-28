<?php /* Template Name: Home */ ?>

<?php get_header(); ?>

<?php
while (have_posts()) : the_post();
?>

  <div class='page-container'>
    <h1><?php the_title(); ?></h1>

    <div class='posts-container'>
      <?php
      $args = array(
        'post_type' => array('post'),
        'post_count' => 5,
        'posts_per_page' => 5,
        'orderby' => 'date',
        'order' => 'DESC'
      );

      $query = new WP_Query($args);
      while ($query->have_posts()) : $query->the_post();
      ?>

        <div class="single-post">
          <p class='post-date'><?php the_time('F j, Y') ?></p>
          <?php if (has_post_thumbnail()) {

          ?>
          <a href="<?php the_permalink(); ?>">
            <img class='thumbnail-img' src='<?php echo get_the_post_thumbnail_url(get_the_id(), 'medium'); ?>' />
            <!--parameters: (id, size of the img -thumbnail, medium, large-) -->
          </a>
          <?php
          } else {
            echo  "<p class=''>no image found</p>";
          }
          ?>
          <div class='post-details'>
          <h2><?php the_title(); ?></h2>
          <div class='excerpt-container'><?php the_excerpt(); ?></div>
          <button><a href="<?php the_permalink(); ?>">read more ></a></button>
        </div>
          <hr>
        </div>

      <?php
      endwhile;
      wp_reset_postdata();
      ?>
    </div>
  </div>

<?php
endwhile;
?>

<?php get_footer(); ?>