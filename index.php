<?php /* Template Name: Home */ ?>


 
  <?php get_header(); ?>

  <div class='landing-page'>


    <h1>A journey into revisiting the old while enchanting the new.</h1>

    
    <div id="container">
      <div id="circle">
      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="300px" height="300px" viewBox="0 0 300 300" enable-background="new 0 0 300 300" xml:space="preserve">
          <defs>
              <path id="circlePath" d="M 150, 150 m -60, 0 a 60,60 0 0,1 120,0 a 60,60 0 0,1 -120,0 "/>
          </defs>
          <circle cx="150" cy="100" r="75" fill="none"/>
          <g>
              <use xlink:href="#circlePath" fill="none"/>
              <text fill="#000">
                  <textPath xlink:href="#circlePath">Welcome to the Decora Edit • Welcome to the Decora Edit •</textPath>
              </text>
          </g>
      </svg>
      </div>
      </div>

  


  </div>

      <ul id='homepage-categories-navigation'>
      <?php
        $terms = get_terms(
    array(
                'taxonomy'   => 'category',
                'hide_empty' => false,
            )
);

        // Check if any term exists
        if (! empty($terms) && is_array($terms)) {
            // Run a loop and print them all
            foreach ($terms as $term) { ?>
                <li><a href="<?php echo esc_url(get_term_link($term)) ?>">
                    <?php echo $term->name; ?>
                </a>
                </li>
                <?php
            }
        }
          
        ?>

        </ul>

 <div class='posts-container'>

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
            if ($tag_terms) {
                foreach ($tag_terms as $tag_term) {
                    echo "<a class='tag-link' href='" . get_term_link($tag_term) . "'>" . "#". $tag_term->name . "</a> ";
                }
            }
          ?>

          <h2><?php the_title(); ?></h2>

             <hr>
       <div class='excerpt-container'>
         <?php the_excerpt(); ?>
        </div> 
        <a id='single-post-button' href="<?php the_permalink(); ?>">read more</a>
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


  <?php echo wdi_feed(array('id'=>'1')); ?>

  <?php get_footer(); ?>
