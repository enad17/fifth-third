<?php get_header(); ?>
<body>
  <div class="wrap">
    
    <section role="main" class="main blog single">
      <div class="inner">

        <div class="blog-header">
          <a class="sprite-logo-blog" href="https://www.53.com/site" target="_blank"></a>
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
          while ( have_posts() ) : the_post(); ?>

          <div class="right">
            <?php get_template_part('blog-sidebar'); ?>
          </div>              
          <div class="article-content">
            <?php
              $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
              echo "<a class=\"backLink\" href='$url'>BACK</a>"; 
            ?>                
            <div class="text">
              <h2><?php the_title(); ?></h2>
              <div class="content">
                <?php the_content(); ?>
              </div>
            </div>
          </div>                
        <div class="nav">
          <?php previous_post_link('%link', 'Previous'); ?> 
          <?php next_post_link('%link', 'Next'); ?> 
        </div>              
              
          <?php endwhile; // End the loop. Whew. ?>
        </div>
      </div>
    </section>

    <?php get_footer(); ?>

  </div> <!-- end .wrap -->

  <!-- include our modals -->
  <?php get_template_part('modals'); ?>

</body>
</html>