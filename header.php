<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title><?php bloginfo('name'); if ( is_single() ) { _e('&raquo; Blog Archive', 
'minimalism'); } wp_title(); ?></title>
  <meta name="description" content="web development, html, css, javascript, html5, css3, web design, dan ubilla, books, movies, music">
  <meta name="author" content="Dan Ubilla">

  <!-- Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

  <!-- CSS: implied media="all" -->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

  <!-- All JavaScript at the bottom, except for Modernizr and Respond.
     Modernizr enables HTML5 elements & feature detects; Respond is a polyfill for min/max-width CSS3 Media Queries -->
  <!-- Don't forget to go ahead and make sure this works in all environments [DBU 05/29/2011]  -->
  <?php wp_enqueue_script('jquery'); ?>
  <?php wp_enqueue_script('global','/wp-content/plugins/global.js'); ?>
  <?php wp_enqueue_script('global','/scripts/libs/modernizr-1.7.min.js'); ?>
  <script src="http://localhost/clients/danubilla/0-js/libs/respond.min.js"></script>

  <?php wp_head(); ?>
</head>
    
<body>

<div id="wrapper">  
  
	<div id="header">  
                   
  		<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>  

	</div>
	<ul id="nav" class="nav">
		<li><a href="#">Originals</a>
		    <?php $songPosts = new WP_Query(); ?>
			<?php $songPosts->query('cat=23&tag=original'); ?>
			<ul class="subnav">
				<?php if ( $songPosts->have_posts() ) : while ( $songPosts->have_posts() ) : $songPosts->the_post(); ?>
						<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
					<?php endwhile; ?>
					<?php else: ?>
						<li>No originals yet.</li>
				<?php endif; ?>
			</ul>
		</li>
		<li><a href="#">Covers</a>
			<?php $newsPosts = new WP_Query(); ?>
			<?php $newsPosts->query('cat=23&tag=cover'); ?>
			<ul class="subnav">
				<?php if ( $newsPosts->have_posts() ) : while ( $newsPosts->have_posts() ) : $newsPosts->the_post(); ?>
						<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
					<?php endwhile; ?>
						<li><a href="#">Covers Archive</a></li>
					<?php else: ?>
						<li><a href="#">No covers yet.</a></li>
				<?php endif; ?>
			</ul>
		</li>
	</ul>
