<!doctype html>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/slick.css">
	
	<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
	<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
	<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
	<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">
		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title><?php wp_title(''); ?></title>
		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
            <meta name="theme-color" content="#121212">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>
		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>
	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
		<div class="fixed-container navbar-fixed-top">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<header>
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
									<div class="logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Pacira_logo.svg" alt="Pacira 	logo"></a></div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
									<div class="tagline">A Passion For Delivering Improved Patient Care<sup>TM</sup></div>
								</div>
							</div>
						</header>
					</div>
				</div>
			
				<div class="container">
					<div class="row">
						<div class="navigation">
							<div class="col-xs-12">

								<div id="navigation">
									<nav class="navbar navbar-gradient">
										<div class="container-fluid">
											<div class="navbar-header">
												<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
													<span class="sr-only">Toggle navigation</span>
													<span class="icon-bar"></span>
													<span class="icon-bar"></span>
													<span class="icon-bar"></span>
												</button>
											</div>
											<?php
    		     					   			wp_nav_menu( array(
    		     					   				'menu'              => 'primary',
    		     					   				'theme_location'    => 'primary',
    		     					   				'depth'             => 2,
    		     					   				'container'         => 'div',
    		     					   				'container_class'   => 'collapse navbar-collapse',
    		     					   				'container_id'      => 'bs-example-navbar-collapse-1',
    		     					   				'menu_class'        => 'nav navbar-nav',
    		     					   				'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
    		     					   				'walker'            => new wp_bootstrap_navwalker())
    		     					   			);
    		     					   		?>
									
											<!-- Collect the nav links, forms, and other content for toggling -->
											<!--
											<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
												<ul class="nav navbar-nav">
													<li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
													<li><a href="#">Link</a></li>
													<li class="dropdown">
														<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
														<ul class="dropdown-menu">
															<li><a href="#">Action</a></li>
															<li><a href="#">Another action</a></li>
															<li><a href="#">Something else here</a></li>
															<li role="separator" class="divider"></li>
															<li><a href="#">Separated link</a></li>
															<li role="separator" class="divider"></li>
															<li><a href="#">One more separated link</a></li>
														</ul>
													</li>
												</ul>
											</div> --><!-- /.navbar-collapse -->
										</div><!-- /.container-fluid -->
									</nav>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

			
