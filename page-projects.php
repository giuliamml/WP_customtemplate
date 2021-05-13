<?php /* Template Name: Page-Projects */ ?>

<?php get_header(); ?>



<?php
while (have_posts()) : the_post();
?>


    <div class='resources-page-container'>
    <h1><?php the_title(); ?></h1>

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

        <div class="single-resource">

          
          <?php if (has_post_thumbnail()) {
          ?>
          <a href="<?php the_permalink(); ?>">
            <img class='thumbnail-img' src='<?php echo get_the_post_thumbnail_url(get_the_id(), 'thumbnail'); ?>' />
            <!--parameters: (id, size of the img -thumbnail, medium, large-) -->
          </a>
          <?php
      } else {
          echo  "<p class=''>no image found</p>";
      }
          ?>
        <div class='resource-details'>

        <?php
            $project_terms = get_the_terms(get_the_id(), 'project-type');
             if ($project_terms) {
                 foreach ($project_terms as $project_term) {
                     echo "<a href='" . get_term_link($project_term) . "'>". "#". $project_term->name . "</a> ";
                 }
             }
         ?>

          <h2><?php the_title(); ?></h2>

          <div class='excerpt-container'><?php the_excerpt(); ?></div> 
          <button><a href="<?php the_permalink(); ?>">discover more</a></button>
        </div>
          
        </div>

      <?php
      endwhile;
      wp_reset_postdata();
      ?>
    </div>

<?php
endwhile;
?>  


<?php get_footer(); ?>