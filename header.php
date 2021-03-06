<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php bloginfo('name') ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Andy March">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
	<?php wp_head(); ?>
  </head>

  <body>
	
	<div id="masthead" class="container">
		<div id="SiteLogo" class="container">
			<p id="SiteName"><a href="<?php echo get_option('home') ?>/" title="<?php bloginfo('name') ?>" rel="home"><?php bloginfo('name') ?></a></p>
			<p id="SiteDescription"><?php bloginfo('description') ?></p>
			<p id="SocialMedia">
			<a href="https://twitter.com/andymarch" title="Twitter" rel="me"><img class="socialLink" src="<?php bloginfo('template_url'); ?>/images/twitter.png"/></a>  
			<a href="https://github.com/andymarch" title="GitHub" rel="me"><img class="socialLink" src="<?php bloginfo('template_url'); ?>/images/github.png"/></a>  
			<a href="http://www.facebook.com/andy.j.march" title="Facebook"><img class="socialLink" src="<?php bloginfo('template_url'); ?>/images/facebook.png"/></a>  
			<a href="http://www.linkedin.com/in/andymarch" title="LinkedIn"><img class="socialLink" src="<?php bloginfo('template_url'); ?>/images/linkedin.png"/></a>  
			<a href="http://andymarch.co.uk/feed/" title="RSS"><img class="socialLink" src="<?php bloginfo('template_url'); ?>/images/rss.png"/></a>
			</p>
		</div>
			<div id="navwrap">
			<div id="masthead-meta" class="container">  
			  <!-- meta Area -->
				<?php wp_register('', ''); ?> <?php wp_loginout() ?> <?php wp_meta() ?>
			</div>
		</div>
	</div>

    <div class="container">
