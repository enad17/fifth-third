<?php
/*
Template Name: Blog
*/
?>
<?php get_header(); ?>
<body>
  <div class="wrap">
    
    <section role="main" class="main">
      <div class="inner">
        <div class="left">

          <?php 
          $wp_query = new WP_Query(
            array(
              'post_type' => 'post', 
              'orderby' => 'date', 
              'order' => 'DESC',
              'paged' => $paged
            )
          );
          while ( have_posts() ) : the_post(); ?>
              <article>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div class="excerpt"><?php the_excerpt(); ?></div>
                <div class="meta">
                  <a href="#">facebook</a>
                  <a href="#">twitter</a>
                  <a href="<?php the_permalink() ?>">>> Read More</a>
                </div>
              </article>
              
          <?php endwhile; // End the loop. Whew. ?>
        </div>
        <div class="right">

        </div>
      </div>
    </section>

    <?php get_footer(); ?>

  </div> <!-- end .wrap -->

  <!-- include our modals -->
  <?php get_template_part('modals'); ?>

</body>
</html>