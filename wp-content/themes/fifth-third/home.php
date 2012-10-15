<?php get_header(); ?>
<body>
  <div class="wrap">
    
    <section role="main" class="main">
      <div class="inner">
        <div class="left">
          <a class="sprite-logo" href="https://www.53.com/site" target="_blank"></a>
          <h2>Between Nov. 1 – Dec. 30, 2012</h2>
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
        <div class="right">
          <!-- facebook sweeps -->
          <div class="block">
            <div class="sprite-green-border"></div>
            <div class="prize">
              <img src="<?php echo get_bloginfo('template_directory') ?>/images/ipad.png" />
              <div class="week">1st Week's Prize</div>
              <div class="prize-name">iPad 2</div>
            </div>
            <div class="sprite-block-details-background">
              <h2>Facebook Sweepstakes</h2>
              <div class="dates">Every Friday Between Nov. 9 – Dec. 28, 2012</div>
              <a class="callToAction modalLink" data-name="facebookSweepstakes" href="#">Details &amp; Prizes</a>
              <img src="<?php echo get_bloginfo('template_directory') ?>/images/fb-sweeps-photo.png" />
              <div class="blurb">Check back Nov.9 to see the winner and the next week’s prize!</div>
              <a href="https://www.facebook.com/FifthThirdBank" target="_blank" class="sprite-like-us-button" href="#">Like Us Now</a>
            </div>
          </div>

          <!-- twitter sweeps -->
          <div class="block">
            <div class="sprite-green-border"></div>
            <div class="sprite-tweet-background">
              <script>
                Chirp({
                  user: 'FifthThird', //Twitter username
                  max: 1, //Maximum number of tweets to show 
                  count: 1, //Total tweets to retrieve
                  retweets: false, //Show/Don't show retweets
                  replies: false,  //Show/Don't show replies
                  cacheExpire: 1000 * 60 * 2, //Number of milliseconds to cache tweets
                  templates: {
                    base:'<div class="sprite-tweet-quote"></div> {{tweets}}',
                    tweet: '<p>{{html}}</p><a href="http://twitter.com/{{user.screen_name}}" class="user">-@{{user.screen_name}}</a>'
                  }
                })
              </script>
            </div>
            <div class="sprite-block-details-background">
              <h2>Twitter Sweepstakes</h2>
              <div class="dates">Between Nov. 21 - Nov. 26, 2012</div>
              <a class="callToAction modalLink" data-name="twitterSweepstakes" href="#">See Details</a>
              <img src="<?php echo get_bloginfo('template_directory') ?>/images/gift-card.png" />
              <div class="blurb">Check back for a chance to win a $100 Fifth Third Bank Gift Card.</div>
              <a href="https://www.twitter.com/FifthThird" target="_blank" class="sprite-follow-us-button" href="#">Like Us Now</a>
            </div>
          </div>

          <!-- blog post -->
        <?php 
          $wp_query = new WP_Query(
          array(
            'post_type' => 'post', 
            'orderby' => 'date', 
            'order' => 'DESC',
            'posts_per_page' => 1
          ));
          while ( have_posts() ) : the_post();

          $customField = get_post_custom(get_the_ID());

          ?>
          <div class="block no-margin">
            <div class="sprite-green-border"></div>
            <div class="sprite-tweet-background">
              <?php the_post_thumbnail(); ?>
            </div>
            <div class="sprite-block-details-background">
              <h2 class="blog-title"><?php the_title(); ?></h2>              
              <div class="excerpt">
                <?php echo $customField['home_teaser'][0]; ?>
              </div>
              <a class="callToAction" href="<?php the_permalink(); ?>">Read More</a>              
            </div>
            <?php endwhile; // End the loop. Whew. ?>            
          </div>
        </div>
      </div>
    </section>

    <?php get_footer(); ?>

  </div> <!-- end .wrap -->

  <!-- include our modals -->
  <?php get_template_part('modals'); ?>

</body>
</html>