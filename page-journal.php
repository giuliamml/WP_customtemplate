<?php /* Template Name: Journal Page */ ?>

<!--*TO DO: add filter tab on top of the page -->

<div class='journal-page-wrapper'>

<?php get_header('secondary'); ?>



<div class='posts-container' id='page-journal'>




<?php
while (have_posts()) : the_post();
?>


<?php
$args = array(
     'post_type' => array('post'),
     'post_count' => 100,
     'posts_per_page' => 100,
     'orderby' => 'date',
     'order' => 'DESC'
);

$query = new WP_Query($args);
while ($query->have_posts()) : $query->the_post();
?>


 <div class="single-post-homepage">


 
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
  <div class='post-details'>
      <?php
        $tag_terms = get_the_terms(get_the_id(), 'post_tag');
        if($tag_terms) {
        foreach($tag_terms as $tag_term) {
        echo "<a class='tag-link' href='" . get_term_link($tag_term) . "'>" . "#". $tag_term->name . "</a> ";
          }
         }
      ?>
    <a href="<?php the_permalink(); ?>">  
      <h2><?php the_title(); ?></h2>
      <div class='excerpt-container'>
      <?php the_excerpt(); ?></div>
    </a>

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