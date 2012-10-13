<?php
/*
Template Name: Blog
*/
?>
<?php get_header(); ?>
<body>
  <div class="wrap">
    
    <section role="main" class="main blog">
      <div class="inner">

        <div class="blog-header">
          <a class="sprite-logo" href="https://www.53.com/site" target="_blank"></a>
          <div class="right-side">
            <div class="item">
              <div class="sprite-home-icon-1"></div>
              <p>Every time you use your Fifth Third Bank Credit or Debit Card this holiday season you’re automatically entered to win!</p>
            </div>
            <div class="item">
              <div class="sprite-home-icon-2"></div>
              <p>We’re selecting <strong>100 customers</strong> to win a “Holiday Payback” – a statement credit for every card purchase made that day -  <strong>up to $2,000</strong></p>
            </div>
            <a class="callToAction modalLink" data-name="seeDetails" href="#">See Details</a>
          </div>
        </div>

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
                  <a class="sprite-facebook-small" href="#">Share <?php the_title(); ?> on Facebook</a>
                  <a class="sprite-twitter-small" href="#">Share <?php the_title(); ?> on Twitter</a>
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