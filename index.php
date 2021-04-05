<?php /* Template Name: Home */ ?>


 
 
  <div class='landing-page'>

    <?php get_header(); ?>

      <div class='featured-post'>

        <?php
        $args = array(
        'posts_per_page' => 1,
        'meta_key' => 'meta-checkbox',
        'meta_value' => 'yes'
        );
        $featured = new WP_Query($args);
 
        if ($featured->have_posts()): while($featured->have_posts()): $featured->the_post(); ?>

      <div class='hero'>
      </div>

      <?php if (has_post_thumbnail()) : ?>

      <figure> <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a> </figure>    
      
      <?php
      endif;
      endwhile; else:
      endif;
      ?>
    </div>

  </div>

  <h1 id='homepage-quote'>moving the fashion industry towards an ethical ecosystem.</h1>


 <div class='posts-container'>


   <?php
   while (have_posts()) : the_post();
   ?>

   
   <?php
   $args = array(
         'post_type' => array('post'),
         'post_count' => 3,
         'posts_per_page' => 3,
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

          <h2><?php the_title(); ?></h2>

  
       <div class='excerpt-container'><?php the_excerpt(); ?></div> 
      </div>
        
    </div>

      <?php
      endwhile;
      wp_reset_postdata();
      ?>
    
  

   <?php
   endwhile;
   ?>

</div>



<div class='featured-video'>

   <h1 id='homepage-heading'>Latest upcycling video</h1>
        <?php
        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'category_name' => 'featured',
            'posts_per_page' => 1,
        );
        $arr_posts = new WP_Query( $args );
        
        if ( $arr_posts->have_posts() ) :
        
        while ( $arr_posts->have_posts() ) :
          $arr_posts->the_post();
        ?>

          <div class="video-content">
            <?php the_content() ?>
          </div>

        <?php
        endwhile;
        endif;
        wp_reset_postdata();

        ?>

</div> 

<div class='featured-podcast'>

   <h1 id='homepage-heading'>The Decora Edit Podcast</h1>
        <?php
        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'category_name' => 'podcast',
            'posts_per_page' => 1,
        );
        $arr_posts = new WP_Query( $args );
        
        if ( $arr_posts->have_posts() ) :
        
        while ( $arr_posts->have_posts() ) :
          $arr_posts->the_post();
        ?>

          <div class="podcast-content">
            <?php the_content() ?>
          </div>

        <?php
        endwhile;
        endif;
        wp_reset_postdata();

        ?>

</div> 

  <?php echo wdi_feed(array('id'=>'1')); ?>

  <?php get_footer(); ?>
