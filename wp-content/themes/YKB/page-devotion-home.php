<?php
/*
Template Name: Page Devotion Home
*/
get_header(); ?>
	<div id="content" class="content-area col-sm-12 col-md-12">
		<?php session_start();
	$_SESSION["devotion"]="Renungan Keluarga";
?>
		  <div class="row ">
			<div class="col-md-4 main content-devotion-background background-color-a">
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
						'category_name' => 'Renungan Keluarga',
					);
				// The Query
				query_posts( $args );

				// The Loop
				?>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="devotion-content devotion-content-home ">
					<div id="img-content-top"class="col-md-13 img-devotion-content-home">
						<div class="row">
							<div class="col-md-5 col-sm-6 devotion-top-img-home">
								<div class="devotion-top-img">
								<img src="<?php bloginfo('template_url'); ?>/images/jesus.png" class="img-circle">
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="devotion-top-title">
									<h4>RENUNGAN</h4>
									<div class="devotion-top-title-1">
									<h4>KELUARGA</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="devotion-content-home-1">
						<div class="row ">
							<div class="">
								<div class="col-md-12 devotion-thumbnail">
									<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'full' ); }?>
								</div>
								<div class="col-md-9 col-sm-10 home-title-devotion-main">
								<h4><?php the_title(); ?></h4>
								</div>
							</div>
						</div>
						<div class="date-today">
							<?php the_time('F jS, Y');?>
						</div>
						<div>
							<?php the_excerpt(); ?>
						</div>
					</div>
				</div>
				<?php endwhile; ?>
					<?php else : ?>
						<h2>Not Found</h2>
					<?php endif; 
					wp_reset_query();
					?>
			</div>
			
			<div class="col-md-4 main content-devotion-background background-color-a">
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
				<div class="devotion-content devotion-content-home ">
					<div id="img-content-top"class="col-md-13 img-devotion-content-home">
						<div class="row">
							<div class="col-md-5 col-sm-6 devotion-top-img-home">
								<div class="devotion-top-img">
								<img src="<?php bloginfo('template_url'); ?>/images/jesus.png" class="img-circle">
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="devotion-top-title">
									<h4>RENUNGAN</h4>
									<div class="devotion-top-title-1">
									<h4>KELUARGA</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="devotion-content-home-1">
						<div class="row ">
							<div class="">
								<div class="col-md-12 devotion-thumbnail">
									<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'full' ); }?>
								</div>
								<div class="col-md-9 col-sm-10 home-title-devotion-main">
								<h4><?php the_title(); ?></h4>
								</div>
							</div>
						</div>
						<div class="date-today">
							<?php the_time('F jS, Y');?>
						</div>
						<div>
							<?php the_excerpt(); ?>
						</div>
					</div>
				</div>
				<?php endwhile; ?>
					<?php else : ?>
						<h2>Not Found</h2>
					<?php endif; 
					wp_reset_query();
					?>
			</div>
			<div class="col-md-4 main content-devotion-background background-color-a">
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
						'category_name' => 'Renungan Anak',
					);
				// The Query
				query_posts( $args );

				// The Loop
				?>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="devotion-content devotion-content-home ">
					<div id="img-content-top"class="col-md-13 img-devotion-content-home">
						<div class="row">
							<div class="col-md-5 col-sm-6 devotion-top-img-home">
								<div class="devotion-top-img">
								<img src="<?php bloginfo('template_url'); ?>/images/jesus.png" class="img-circle">
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="devotion-top-title">
									<h4>RENUNGAN</h4>
									<div class="devotion-top-title-1">
									<h4>KELUARGA</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="devotion-content-home-1">
						<div class="row ">
							<div class="">
								<div class="col-md-12 devotion-thumbnail">
									<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'full' ); }?>
								</div>
								<div class="col-md-9 col-sm-10 home-title-devotion-main">
								<h4><?php the_title(); ?></h4>
								</div>
							</div>
						</div>
						<div class="date-today">
							<?php the_time('F jS, Y');?>
						</div>
						<div>
							<?php the_excerpt(); ?>
						</div>
					</div>
				</div>
				<?php endwhile; ?>
					<?php else : ?>
						<h2>Not Found</h2>
					<?php endif; 
					wp_reset_query();
					?>
			</div>
			
		</div>
		
		<div class="row ">
			<div class="col-md-4 main content-devotion-background background-color-a">
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
						'category_name' => 'Renungan Umum',
					);
				// The Query
				query_posts( $args );

				// The Loop
				?>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="devotion-content devotion-content-home ">
					<div id="img-content-top"class="col-md-13 img-devotion-content-home">
						<div class="row">
							<div class="col-md-5 col-sm-6 devotion-top-img-home">
								<div class="devotion-top-img">
								<img src="<?php bloginfo('template_url'); ?>/images/jesus.png" class="img-circle">
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="devotion-top-title">
									<h4>RENUNGAN</h4>
									<div class="devotion-top-title-1">
									<h4>KELUARGA</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="devotion-content-home-1">
						<div class="row ">
							<div class="">
								<div class="col-md-12 devotion-thumbnail">
									<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'full' ); }?>
								</div>
								<div class="col-md-9 col-sm-10 home-title-devotion-main">
								<h4><?php the_title(); ?></h4>
								</div>
							</div>
						</div>
						<div class="date-today">
							<?php the_time('F jS, Y');?>
						</div>
						<div>
							<?php the_excerpt(); ?>
						</div>
					</div>
				</div>
				<?php endwhile; ?>
					<?php else : ?>
						<h2>Not Found</h2>
					<?php endif; 
					wp_reset_query();
					?>
			</div>
			
			<div class="col-md-4 main content-devotion-background background-color-a">
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
						'category_name' => 'Renungan Remaja',
					);
				// The Query
				query_posts( $args );

				// The Loop
				?>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="devotion-content devotion-content-home ">
					<div id="img-content-top"class="col-md-13 img-devotion-content-home">
						<div class="row">
							<div class="col-md-5 col-sm-6 devotion-top-img-home">
								<div class="devotion-top-img">
								<img src="<?php bloginfo('template_url'); ?>/images/jesus.png" class="img-circle">
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="devotion-top-title">
									<h4>RENUNGAN</h4>
									<div class="devotion-top-title-1">
									<h4>KELUARGA</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="devotion-content-home-1">
						<div class="row ">
							<div class="">
								<div class="col-md-12 devotion-thumbnail">
									<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'full' ); }?>
								</div>
								<div class="col-md-9 col-sm-10 home-title-devotion-main">
								<h4><?php the_title(); ?></h4>
								</div>
							</div>
						</div>
						<div class="date-today">
							<?php the_time('F jS, Y');?>
						</div>
						<div>
							<?php the_excerpt(); ?>
						</div>
					</div>
				</div>
				<?php endwhile; ?>
					<?php else : ?>
						<h2>Not Found</h2>
					<?php endif; 
					wp_reset_query();
					?>
			</div>
			<div class="col-md-4 main content-devotion-background background-color-a">
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
						'category_name' => 'Renungan Lansia',
					);
				// The Query
				query_posts( $args );

				// The Loop
				?>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="devotion-content devotion-content-home ">
					<div id="img-content-top"class="col-md-13 img-devotion-content-home">
						<div class="row">
							<div class="col-md-5 col-sm-6 devotion-top-img-home">
								<div class="devotion-top-img">
								<img src="<?php bloginfo('template_url'); ?>/images/jesus.png" class="img-circle">
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="devotion-top-title">
									<h4>RENUNGAN</h4>
									<div class="devotion-top-title-1">
									<h4>KELUARGA</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="devotion-content-home-1">
						<div class="row ">
							<div class="">
								<div class="col-md-12 devotion-thumbnail">
									<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'full' ); }?>
								</div>
								<div class="col-md-9 col-sm-10 home-title-devotion-main">
								<h4><?php the_title(); ?></h4>
								</div>
							</div>
						</div>
						<div class="date-today">
							<?php the_time('F jS, Y');?>
						</div>
						<div>
							<?php the_excerpt(); ?>
						</div>
					</div>
				</div>
				<?php endwhile; ?>
					<?php else : ?>
						<h2>Not Found</h2>
					<?php endif; 
					wp_reset_query();
					?>
			</div>
			
		</div>	
	</div>
<?php get_footer(); ?>
