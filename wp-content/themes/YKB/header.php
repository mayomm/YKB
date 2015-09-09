<!DOCTYPE html>
<html <?php language_attributes(); ?>>	
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <meta name="viewport" content="width=device-width">
        <meta name="description" content="<?php bloginfo( 'description' ); ?>">
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class( ); ?>>
		<div class="header headergambar" id="header" role="banner">
			<div class="container">
				<div class="row">
					<div class="col-md-7 content-header ">
							<a href="<?php echo home_url(); ?>">
								<div class="row">
									<div class="col-md-12">
										<div class="row">
											<div class="col-md-2 img-header">
													<img src="<?php bloginfo(template_url); ?>/images/home/ykb.gif">
											</div>
											<div class="col-md-9">
											<h3 class="site-title-home"><?php bloginfo('name', 'display'); ?></h3>
											<h2 class="site-description-home"><?php bloginfo('description'); ?></h2>
											</div>
										</div>
									</div>
								</div>
							</a>
					</div>
					<div class="col-md-4  headersos">
						<div class="col-sm-offset-3 ">
							<div class="row">
							<form action="<?php get_site_url()?>" role="search" method="get" class="search-form">
								<div class="input-group input-sm headersos ">
									<input type="search" value="" name="s" class="search-field form-control input-sm small-search" placeholder="Search...">
									<div class="input-group-btn">
									  	<button type="submit" class="btn input-sm small-search"><div class="glyphicon glyphicon-search"></div></button>
									</div>
								</div>
								</form>
								<div class="text-right" id="headersite-title">
									<div class="col-md-12">
										<div class="row">
											<div class="col-md-8">
												<div class="headerlogin"> <span>Kunjungi kami di:</span> </div>
											</div>
											<div class="col-md-4">
												<div class="headersosmed-home">
												<a href="https://twitter.com/" ><img src="<?php bloginfo('template_url'); ?>/images/header/twitter-icon.png" class="img-rounded" height="25px" width="25px" ></a> 
												<a href="https://www.facebook.com/" ><img src="<?php bloginfo('template_url'); ?>/images/header/face-icon.png" height="35px" width="35px" class="img-rounded"></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /header -->
		<nav class="navbar navbar-default" role="navigation">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
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
		    </div>
		</nav> <!-- /navi-wrap -->