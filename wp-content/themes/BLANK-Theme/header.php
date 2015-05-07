<!--<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
	<link rel="shortcut icon" href="/favicon.ico">
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
	<div id="page-wrap">

		<div id="header">
			<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
			<div class="description"><?php bloginfo('description'); ?></div>
		</div>
-->


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kairos Team | Potatoes</title>
    <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <link href="<?php echo bloginfo('template_directory');?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo bloginfo('template_directory');?>/css/flexslider.css" rel="stylesheet" >
    <link href="<?php echo bloginfo('template_directory');?>/css/styles.css" rel="stylesheet">
    <link href="<?php echo bloginfo('template_directory');?>/css/queries.css" rel="stylesheet">
    <link href="<?php echo bloginfo('template_directory');?>/css/animate.css" rel="stylesheet">
    
	 <!--Section Separators-->	 
	 <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory');?>/css/normalize.css" />
	 <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory');?>/css/demo.css" />
	 <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory');?>/css/icons.css" />
	 <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory');?>/css/component.css" />
		
		    
	 	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory');?>/css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory');?>/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory');?>/css/component.css" />
		<script src="<?php echo bloginfo('template_directory');?>/js/snap.svg-min.js"></script>
		<script src="<?php echo bloginfo('template_directory');?>/js/classie.js"></script>
		<script src="<?php echo bloginfo('template_directory');?>/js/svgLoader.js"></script>
		
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
      </head>
      <body id="top">
        <div class="containerr show">
		  <div id="loader" class="pageload-overlay" data-opening="M -18 -26.90625 L -18 86.90625 L 98 86.90625 L 98 -26.90625 L -18 -26.90625 Z M 40 29.96875 C 40.01804 29.96875 40.03125 29.98196 40.03125 30 C 40.03125 30.01804 40.01804 30.03125 40 30.03125 C 39.98196 30.03125 39.96875 30.01804 39.96875 30 C 39.96875 29.98196 39.98196 29.96875 40 29.96875 Z">
				<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 80 60" preserveAspectRatio="xMidYMid slice">
					<path d="M -18 -26.90625 L -18 86.90625 L 98 86.90625 L 98 -26.90625 L -18 -26.90625 Z M 40 -25.6875 C 70.750092 -25.6875 95.6875 -0.7500919 95.6875 30 C 95.6875 60.750092 70.750092 85.6875 40 85.6875 C 9.2499078 85.6875 -15.6875 60.750092 -15.6875 30 C -15.6875 -0.7500919 9.2499078 -25.6875 40 -25.6875 Z"/>
				</svg>
		  </div><!-- /pageload-overlay -->      
        </div>
        
        <header id="home">
          <nav>
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
                  <nav class="pull">
                    <ul class="top-nav">
                      <li><a href="#intro">Introduction <span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
                      <li><a href="#features">Core Features <span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
                      <li><a href="#potatocodes">Potatocodes <span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
                      <li><a href="#activities">Activities <span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
                      <li><a href="#team">Meet the Team <span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
                      <li><a href="#contact">Contact Us <span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </nav>
          <section class="hero" id="hero">
            <div class="container">
              <div class="row">
                <div class="col-md-12 text-right navicon">
                  <a id="nav-toggle" class="nav_slide_button" href="#"><span></span></a>
                </div>
              </div>
              <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center inner">
                  <h1 class="animated fadeInDown">Kairos<span>Team</span></h1>
                  <p class="animated fadeInUp delay-05s"><em>Potatocodes</em> First Batch of Interns</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                  <a href="#intro" class="learn-more-btn">more</a>
                </div>
              </div>
            </div>
          </section>
        </header>