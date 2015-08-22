<?php
/*
Template Name: Page Devotion
*/
get_header(); ?>
<div class="margin-devotion-top">
	<div id="content" class="content-area col-sm-12 col-md-12 ">
		<?php session_start();
	$_SESSION["devotion"]="Renungan Keluarga";
?>
		<div id="img-content-top" class="img-devtion-top img-devotion-content-top">
			<img src="<?php bloginfo('template_url'); ?>/images/devotion/Renungan Keluarga.jpg">
		</div>
		<div class="container">
		  <div class="row">		
			<div class="col-sm-5 col-md-3 ">
				<div class="sidebar-deviotion-margin">
					<div class ="ribbon">
						Renungan
						<i></i>
						<i></i>
					</div>
					<div class="margin-devotion-sidebar">
					<div class="sidebar">
					  <ul class="nav nav-sidebar">
						<li class="sidebar-background"><a href="#"> WASIAT </a></li>
						<li class="sidebar-background"><a href="#"> KIDDY </a></li>
						<li class="sidebar-background"><a href="#"> TEEN FOR CHRIST </a></li>
						<li class="sidebar-background"><a href="#"> YOUTH FOR CHRIST </a></li>
						<li class="sidebar-background"><a href="#"> JENDELA HATI </a></li>
					  </ul>
					 </div>
					</div>
			  	</div>
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
						'category_name' => 'Renungan Keluarga',
					);
				// The Query
				query_posts( $args );

				// The Loop
				?>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="devotion-content">
					<div class="devotion-content-top">
						<div class="row">
							<div class="">
								<div class="col-md-2  devotion-date">
									<span class="ribbondate red">
									<div class="devotion-date-tgl">
										<span class="devotion-date-tgl"><?php the_time('j'); ?></span>
									</div>
									<div class="devotion-date-bulan">
										<span ><?php the_time('M'); ?></span>
									</div>
									</span>
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
				<div>
					<?php dynamic_sidebar( 'rightdevotion' ); ?>
				</div>
				<div style="color:red">
					<p>kdfsdlfksdkf</p></br>
					<p>kdfsdlfksdkf</p></br>
					<p>kdfsdlfksdkf</p></br>
					<p>kdfsdlfksdkf</p></br>
				</div>
			</div>
		</div>
		</div>		
	</div>
</div>
<?php get_footer(); ?>

