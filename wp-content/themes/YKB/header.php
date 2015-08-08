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
						<div class="col-md-offset-1 col-md-4">
							<h1 id="site-title">
								<a href="<?php echo home_url(); ?>"><?php bloginfo('name', 'display'); ?></a>
							</h1>
							<h2 id="site-description"><?php bloginfo('description'); ?></h2>
						</div>
						<div class="col-md-4 col-md-offset-2 headersos">
							<div class="col-sm-offset-3">
								<div class="text-right" id="headersite-title">
									<address>
										<a href="" class="glyphicon glyphicon-off headerlogin"> SignIn</a> 
										<a href="" ><img src="<?php bloginfo('template_url'); ?>/images/header/twitter-icon.png" class="img-rounded" height="25px" width="25px" ></a> 
										<a href="" ><img src="<?php bloginfo('template_url'); ?>/images/header/face-icon.png" height="35px" width="35px" class="img-rounded"></a>
									<address>
								</div>
								<div class="input-group input-sm headersos ">
									<input type="search" value="" name="s" class="search-field form-control input-sm" placeholder="Search...">
									<span class="input-group-btn">
									  <button type="submit" class="search-submit btn input-sm"><span class="glyphicon glyphicon-search"></span></button>
									</span>
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