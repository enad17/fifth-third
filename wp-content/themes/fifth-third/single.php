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
            <div class="socialBar">
              <div class="facebook">
                <iframe src="//www.facebook.com/plugins/like.php?href=<?php the_permalink(); ?>;send=false&amp;layout=button_count&amp;width=450&amp;show_faces=true&amp;action=recommend&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:21px;" allowTransparency="true"></iframe>                
              </div>
              <div class="twitter">
                <a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
              </div>
              <div class="gplus">
                <div class="g-plusone" data-size="medium"></div>
                <script type="text/javascript">
                  (function() {
                    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                    po.src = 'https://apis.google.com/js/plusone.js';
                    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                  })();
                </script>                
              </div>
            </div>
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
            <div class="moreTips">
              <h2>More Tips</h2>
                <div class="otherStory">
                  <img src="" />
                  <h3>Other Title Here</h3>
                </div>
                <div class="otherStory">
                  <img src="" />
                  <h3>Other Title Here</h3>
                </div>
                <div class="otherStory">
                  <img src="" />
                  <h3>Other Title Here</h3>
                </div>
                <div class="otherStory">
                  <img src="" />
                  <h3>Other Title Here</h3>
                </div>
                <div class="otherStory">
                  <img src="" />
                  <h3>Other Title Here</h3>
                </div>
            </div>
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