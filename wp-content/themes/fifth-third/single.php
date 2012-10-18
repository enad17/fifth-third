<?php get_header(); ?>
<body>
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=311995645536386";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>  
  <div class="wrap">
    
    <section role="main" class="main blog single">
      <div class="inner">

        <div class="blog-header">
          <a class="sprite-logo-blog modalLink" data-name="seeDetails" href="#" target="_blank"></a>
          <div class="right-side">
            <div class="item">
              <div class="sprite-home-icon-1"></div>
              <p>Every time you use your Fifth Third Bank Credit or Debit Card this holiday season you’re automatically entered to win!</p>
            </div>
            <div class="item">
              <div class="sprite-home-icon-2"></div>
              <p>We’re selecting <strong>100 customers</strong> to win a “Holiday Payback” – a statement credit for every card purchase made that day -  <strong>up to $2,000.</strong></p>
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
            <div class="headerBar">

<div id="article-sharing">
                  <ul id="social-share">
                      <li><div style="margin-top:2px; float:left;">
                          <fb:like send="false" layout="button_count" width="450" show_faces="true"></fb:like>
                        </div></li>
                        <li><div style="margin:2px 0 0 10px; float:left; width:90px;">
                          <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://bit.ly/V0vKlY" data-lang="en">Tweet</a></div>
                          <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                       </li>
                        <li>
                          <div style="margin:2px 0 0 -3px; float:left; width:90px;">
                              <div style="height: 20px; width: 90px; display: inline-block; text-indent: 0px; margin: 0px; padding: 0px; background-color: transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline; background-position: initial initial; background-repeat: initial initial; " id="___plusone_0"><iframe allowtransparency="true" frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 90px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 20px; " tabindex="0" vspace="0" width="100%" id="I0_1350529357612" name="I0_1350529357612" src="https://plusone.google.com/_/+1/fastbutton?bsv=m&amp;abtk=AEIZW7RbaTGPXyyZwkvRc73fDfYGk%2B1/RI2UhYlackyytobFpmsh18B/aiCbTdcIbmIUzP0A8X%2B64IIVcdpxgOz2VST60pVAoqT5IXn0qxbJlJ46mu7d%2BJE%3D&amp;size=medium&amp;hl=en-US&amp;origin=http%3A%2F%2Fstaging1.net&amp;url=http%3A%2F%2Fstaging1.net%2Fdln-staging%2Ftransmission-insight%2Fchina-conference-automatic-transmissions-for-trucks-and-bus-rapid-transit-vehicles%2F&amp;ic=1&amp;jsh=m%3B%2F_%2Fapps-static%2F_%2Fjs%2Fgapi%2F__features__%2Frt%3Dj%2Fver%3DFR4Bxq03aOY.en_US.%2Fsv%3D1%2Fam%3D!2H2H8ZqGj6aIqyfgIg%2Fd%3D1%2Frs%3DAItRSTMIuC4qhrvc5n2HxJ_fAlIFdYG3DA#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled&amp;id=I0_1350529357612&amp;parent=http%3A%2F%2Fstaging1.net" title="+1"></iframe></div>
                            </div>
                            <!-- Place this render call where appropriate -->
                            <script type="text/javascript">
                              (function() {
                                var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                                po.src = 'https://apis.google.com/js/plusone.js';
                                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                              })();
                            </script>
                        </li>
                    </ul><!-- End #social-share-->
                    
                    <ul id="article-tools">
                      <li><a href="#email-frame" id="email-link"><img src="http://staging1.net/dln-staging/wp-content/themes/dln/images/button-email.jpg" alt="Email" height="24" width="30"></a></li>
                       
                        <li><?php if(function_exists('wp_print')) { print_link(); } ?></li>
                        
                        <li>
                          <!-- AddThis Button BEGIN -->
                            <div class="addthis_toolbox addthis_default_style addthis_default_style" style="float:right; margin:4px;">
                              <a class="addthis_button_compact"></a>
                            </div>
                            <!--<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>-->
                            <script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4e30157d66307238"></script>
                            <!-- AddThis Button END -->
                        </li>
                       
                    </ul><!-- End #article-tools-->
                </div>

<!--               <div class="socialBar">
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
              </div> -->
              <?php
                $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
                echo "<a class=\"backLink\" href='$url'>BACK</a>"; 
              ?>    
            </div>    
                    
            <div class="text">
              <h2><?php the_title(); ?></h2>
              <div class="content">
                <?php the_content(); ?>
              </div>
            </div>

        <?php endwhile; wp_reset_query(); // End the loop. Whew. ?>

            <div class="moreTips">
              <h2>More Tips:</h2>
              <?php 
              // lets store the current post ID so we can get all the posts that are NOT this one
              $currentPostID = get_the_ID();
              $wp_query = new WP_Query(
                array(
                  'post_type' => 'post', 
                  'orderby' => 'date', 
                  'order' => 'DESC',
                  'post__not_in' => array($currentPostID),
                )
              );
              while ( have_posts() ) : the_post(); ?>              
                <a href="<?php the_permalink(); ?>" class="otherStory">
                  <div class="innerPadding">
                    <div class="image">
                      <?php if (class_exists('MultiPostThumbnails')) : MultiPostThumbnails::the_post_thumbnail('post', 'secondary-image'); endif; ?>
                    </div>
                    <h3><?php the_title(); ?></h3>
                  </div>
                </a>
              <?php endwhile; ?>
            </div>
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