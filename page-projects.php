<?php /* Template Name: Page-Projects */ ?>

<?php get_header(); ?>

<?php
while (have_posts()) : the_post();
?>

  <div class='page-container'>
    <div class='title'>
    <h1><?php the_title(); ?></h1>
</div>

    <div class='posts-container'>
      <?php
      $args = array(
        'post_type' => array('project'),
        'post_count' => 6,
        'posts_per_page' => 6,
        'orderby' => 'date',
        'order' => 'DESC'
      );

      $query = new WP_Query($args);
      while ($query->have_posts()) : $query->the_post();
      ?>

        <div class="single-project">
          
          <?php if (has_post_thumbnail()) {

          ?>
          <a href="<?php the_permalink(); ?>">
            <img class='thumbnail-img' src='<?php echo get_the_post_thumbnail_url(get_the_id(), 'large'); ?>' />
            <!--parameters: (id, size of the img -thumbnail, medium, large-) -->
          </a>
          <?php
          } else {
            echo  "<p class=''>no image found</p>";
          }
          ?>
        <div class='project-details'>
          <h2><?php the_title(); ?></h2>
          <!-- <div class='excerpt-container'><?php the_excerpt(); ?></div> -->
          <button><a href="<?php the_permalink(); ?>">view more ></a></button>
        </div>
          
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