<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

<!-- Basic Page Needs
================================================== -->
<meta charset="utf-8">
<title>
    <?php
    global $page, $paged;
    wp_title( '|', true, 'right' );
    bloginfo( 'name' );
    $site_description = get_bloginfo( 'description', 'display' );
    
    if ( $site_description && ( is_home() || is_front_page() ) ) {
        echo " | $site_description";
    }
    
    if ( $paged >= 2 || $page >= 2 ) {
        echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );
    }
    ?>
</title>

<meta name="description" content="Fifth Third Microsite">
<meta name="author" content="xixi">

<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory') ?>/css/screen.css">

<!-- JS
================================================== -->
<script src="http://code.jquery.com/jquery.min.js"></script>
<script src="<?php echo get_bloginfo('template_directory') ?>/js/jquery.simplemodal.1.4.3.min.js"></script>

<!-- Favicons
================================================== -->
<link rel="shortcut icon" href="<?php echo get_bloginfo('template_directory') ?>/images/favicon.ico">
<link rel="apple-touch-icon" href="<?php echo get_bloginfo('template_directory') ?>/images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_bloginfo('template_directory') ?>/images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_bloginfo('template_directory') ?>/images/apple-touch-icon-114x114.png">

</head>
<body>
  <div class="wrap">

    <section role="main" class="main">
      <div class="inner">
        <div class="left">
          <h2>Between Nov. 1 – Dec. 30, 2012</h2>
          <div class="item">
            <p>Every time you use your Fifth Third Bank Credit or Debit Card this holiday season you’re automatically entered to win!</p>
          </div>
          <div class="item">
            <p>We’re selecting <strong>100 customers</strong> to win a “Holiday Payback” – a statement credit for every card purchase made that day -  <strong>up to $2,000</strong></p>
          </div>
        </div>
        <div class="right">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
    </section>


    <?php get_template_part('footer'); ?>

    </div> <!-- end .inner. -->
  </div> <!-- end .container -->
</body>
</html>