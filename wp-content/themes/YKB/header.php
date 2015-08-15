<!DOCTYPE html>
<html <?php language_attributes(); ?>>	
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <meta name="viewport" content="width=device-width">
        <meta name="description" content="<?php bloginfo( 'description' ); ?>">
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php wp_head(); ?>
    </head>
    <body <?php body_class( ); ?>>
		<div class="container">
			<div class="header row col-md-14 headergambar" id="header" role="banner">
						<div class="col-md-4 content-header">
								<a href="<?php echo home_url(); ?>">
									<div class="col-md-3 img-header">
											<img src="<?php bloginfo(template_url); ?>/images/jesus.png">
									</div>
									<div class="col-md-12">
									<h3 id="site-title"><?php bloginfo('name', 'display'); ?></h3>
									<h2 id="site-description"><?php bloginfo('description'); ?></h2>
									</div>
								</a>
						</div>
						<div class="col-md-4 col-md-offset-3 headersos">
							<div class="col-sm-offset-3 ">
								<div class="text-right" id="headersite-title">
									<address>
										<a href="" class="headerlogin"><div class="glyphicon glyphicon-off"></div> <span>Sign In</span></a> 
										<a href="" ><img src="<?php bloginfo('template_url'); ?>/images/header/twitter-icon.png" class="img-rounded" height="25px" width="25px" ></a> 
										<a href="" ><img src="<?php bloginfo('template_url'); ?>/images/header/face-icon.png" height="35px" width="35px" class="img-rounded"></a>
										
									<address>
								</div>
								<div class="input-group input-sm headersos ">
									<input type="search" value="" name="s" class="search-field form-control input-sm" placeholder="Search...">
									<div class="input-group-btn">
									  <button type="submit" class="btn input-sm"><div class="glyphicon glyphicon-search"></div></button>
									</div>
								</div>
							</div>
						</div>
			</div>
			<!-- /header -->
				<div class="navi-wrap">
                        <?php $romangie_defaults = array(
                            'theme_location' => 'header-menu',
                            'container' => 'ol',
                            'menu_class' => 'flexnav'
                            );
                        
                        wp_nav_menu($romangie_defaults); ?>
                </div> <!-- /navi-wrap -->
				<br class="clear" />