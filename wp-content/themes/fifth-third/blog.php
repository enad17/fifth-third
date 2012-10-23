<?php
/*
Template Name: Blog
*/
?>
<?php get_header(); ?>
<body>
  <div class="wrap">
    
    <section role="main" class="main blog">
      <div class="inner clearfix">
        <div class="blog-header">
         <a class="sprite-logo-blog" href="<?php echo home_url(); ?>">Fifth Third Bank Holiday Payback Sweepstakes</a>
          <div class="right-side">
            <div class="item">
              <div class="sprite-home-icon-1"></div>
              <p>Every time you use your Fifth Third Bank Credit or Debit Card this holiday season you’re automatically entered to win!</p>
            </div>
            <div class="item">
              <div class="sprite-home-icon-2"></div>
              <p>We’re selecting <strong>100 customers</strong> to win a “Holiday Payback” &mdash; a statement credit for every card purchase made that day &mdash; <strong>up to $2,000.</strong></p>
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
          while ( have_posts() ) : the_post(); 
          $customField = get_post_custom(get_the_ID());

          ?>
              <article class="clearfix">
                <div class="image">
                  <?php the_post_thumbnail(array(75, 75)); ?>
                </div>
                <div class="text">
                  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                  <div class="excerpt">
                    <?php echo $customField['home_teaser'][0]; ?>
                  </div>
                  <div class="meta clearfix">
                    <a class="readMoreLink" href="<?php the_permalink() ?>">Read More</a>
                    <a class="sprite-facebook-small" data-link="<?php the_permalink(); ?>" href="#"><?php the_title(); ?></a>
                    <!-- [post title] | @FifthThird #HolidayPayback #shoppingtips [bit.ly link] -->
                    <a class="sprite-twitter-small" href="http://twitter.com/intent/tweet?text=<?php the_title(); ?>%20%7C%20%40FifthThird%20%23HolidayPayback%20%23shoppingtips%20%20<?php the_permalink(); ?>">Share <?php the_title(); ?> on Twitter</a>
                  </div>
                </div>
              </article>
              
          <?php endwhile; // End the loop. Whew. ?>
        </div>
        <div class="right">
          <?php get_template_part('blog-sidebar'); ?>
        </div>
      </div>
    </section>

    <script>
    $(function() {
      $('.sprite-facebook-small').click(function(e) {
        e.preventDefault();

        var me = $(this);
        var name = me.html() + ' | Fifth Third Bank';
        var link = me.attr('data-link');
        var picture = me.closest('article').find('.wp-post-image').attr('src');
        var caption = "Fifth Third Bank";
        var description = me.closest('article').find('.excerpt').html();

        FB.ui({
            method: 'feed',
            name: name,
            link: link,
            picture: picture,
            caption: caption,
            description: description
        });

        // console.log(link);
        // console.log(name);
        // console.log(link);
        // console.log(picture);
        // console.log(caption);
        // console.log(description);

      });
    });
    </script>

    <?php get_footer(); ?>

  </div> <!-- end .wrap -->

  <!-- include our modals -->
  <?php get_template_part('modals'); ?>

  <div id="fb-root"></div>


<div id="fb-root"></div>
<script src="https://connect.facebook.net/en_US/all.js"></script>
<script>
  FB.init({
    appId : '415794678475251',
  });
</script>

</body>
</html>