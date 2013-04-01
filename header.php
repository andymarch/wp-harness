<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php bloginfo('name') ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>

    <!--<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Project name</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li class="nav-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
            </ul>
            <form class="navbar-form pull-right">
              <input class="span2" type="text" placeholder="Email">
              <input class="span2" type="password" placeholder="Password">
              <button type="submit" class="btn">Sign in</button>
            </form>
          </div><!--/.nav-collapse -->
        <!--</div>
      </div>
    </div>-->
	
	<div id="masthead" class="container">
		<div id="SiteLogo" class="container">
			<p id="SiteName"><a href="<?php echo get_option('home') ?>/" title="<?php bloginfo('name') ?>" rel="home"><?php bloginfo('name') ?></a></p>
			<p id="SiteDescription"><?php bloginfo('description') ?></p>
			<p>
			<a href="https://twitter.com/andymarch" title="Twitter" rel="home"><img class="socialLink" src="<?php bloginfo('template_url'); ?>/images/twitter.png"/></a>  
			<a href="https://github.com/andymarch" title="GitHub" rel="home"><img class="socialLink" src="<?php bloginfo('template_url'); ?>/images/github.png"/></a>  
			<a href="https://plus.google.com/u/0/115663453266966490755" title="Google+" rel="home"><img class="socialLink" src="<?php bloginfo('template_url'); ?>/images/google.png"/></a>  
			<a href="http://www.facebook.com/andy.j.march" title="Facebook" rel="home"><img class="socialLink" src="<?php bloginfo('template_url'); ?>/images/facebook.png"/></a>  
			<a href="http://www.linkedin.com/in/andymarch" title="LinkedIn" rel="home"><img class="socialLink" src="<?php bloginfo('template_url'); ?>/images/linkedin.png"/></a>  
			<a href="http://andymarch.co.uk/feed/" title="RSS" rel="home"><img class="socialLink" src="<?php bloginfo('template_url'); ?>/images/rss.png"/></a>
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
