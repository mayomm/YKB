<?php
/*
Template Name: Page Renungan Pemuda
*/
get_header(); ?>
<?php session_start();
	$_SESSION["devotion"]="Renungan Pemuda";
?>
	<div id="content" class="content-area col-sm-12 col-md-12 ">
		<div class="container-fluid">
		  <div class="row">
			<div class="col-sm-4 col-md-3 sidebar margin-devotion-sidebar">
			  <ul class="nav nav-sidebar">
				<li class="sidebar-font-top"><span>DEVOTION</span></li>
				<li class="sidebar-background"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/1.jpg" width="40px" height="40px" class="img-circle img-navbar"><small> Renungan Keluarga </small></a></li>
				<li class="sidebar-background"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/1.jpg" width="40px" height="40px" class="img-circle img-navbar"><small> Renungan Pemuda </small></a></li>
				<li class="sidebar-background"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/1.jpg" width="40px" height="40px" class="img-circle img-navbar"><small> Renungan Anak </small></a></li>
				<li class="sidebar-background"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/1.jpg" width="40px" height="40px" class="img-circle img-navbar"><small> Renungan Umum </small></a></li>
				<li class="sidebar-background"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/1.jpg" width="40px" height="40px" class="img-circle img-navbar"><small> Renungan Remaja </small></a></li>
				<li class="sidebar-background"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/1.jpg" width="40px" height="40px" class="img-circle img-navbar"><small> Renungan Lansia </small></a></li>
			  </ul>
		  </div>
			<div class="col-md-7 main content-devotion-background ">
			<?php
					$today = getdate();
					$args = array(
						'date_query' => array(
							array(
								'year'  => $today['year'],
								'month' => $today['mon'],
								'day'   => $today['mday'],
							),
						),
						'category_name' => 'Renungan Pemuda',
					);
				// The Query
				query_posts( $args );

				// The Loop
				?>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="devotion-content">
					<div id="img-content-top"class="col-md-14 img-devotion-content-top">
						<img src="<?php bloginfo('template_url'); ?>/images/devotion/Renungan Pemuda.jpg" class="img-devotion-main">
					</div>
					<div class="devotion-content-top">
						<div class="row">
							<div class="">
								<div class="col-md-2 background-color-a devotion-date">
									<div class="devotion-date-tgl">
										<span class="devotion-date-tgl"><?php the_time('j'); ?></span>
									</div>
									<div class="devotion-date-bulan">
										<span ><?php the_time('M'); ?></span>
									</div>
								</div>
								<div class="col-md-9 col-sm-10 title-devotion-main">
								<h4><?php the_title(); ?></h4>
								</div>
							</div>
						</div>
					<?php the_content(); ?>
					</div>
				</div>
				<?php endwhile; ?>
					<?php else : ?>
						<h2>Not Found</h2>
					<?php endif; 
					wp_reset_query();
					?>
			</div>
			<div class="col-md-2 col-sm-4 ">
				<?php dynamic_sidebar( 'rightdevotion' ); ?>
			</div>
		</div>
		</div>			
	</div>
<?php get_footer(); ?>
