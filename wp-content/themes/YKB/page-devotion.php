<?php
/*
Template Name: Page Devotion
coba
coba lgau
*/
get_header(); ?>
	<div id="content" class="content-area col-sm-12 col-md-12">
		<div class="container-fluid">
		  <div class="row">
			<div class="col-sm-4 col-md-3 sidebar margin-devotion-sidebar">
			  <ul class="nav nav-sidebar">
				<li class="sidebar-font-top"><span>DEVOTION</span></li>
				<li class="sidebar-background"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/1.jpg" width="40px" height="40px" class="img-circle img-navbar"><small> Renungan Keluarga </small></a></li>
				<li class="sidebar-background"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/1.jpg" width="40px" height="40px" class="img-circle img-navbar"><small> Renungan Pemuda </small></a></li>
				<li class="sidebar-background"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/1.jpg" width="40px" height="40px" class="img-circle img-navbar"><small> Renungan Anak </small></a></li>
				<li class="sidebar-background"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/1.jpg" width="40px" height="40px" class="img-circle img-navbar"><small> Renungan Umur </small></a></li>
				<li class="sidebar-background"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/1.jpg" width="40px" height="40px" class="img-circle img-navbar"><small> Renungan Remaja </small></a></li>
				<li class="sidebar-background"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/1.jpg" width="40px" height="40px" class="img-circle img-navbar"><small> Renungan Lansia </small></a></li>
			  </ul>
		  </div>
			<div class="col-md-7 main content-devotion-background ">
				<div class="devotion-content">
					<div id="img-content-top"class="col-md-14 img-devotion-content-top">
						<img src="<?php bloginfo('template_url'); ?>/images/footer/bromo1.jpg" class="img-devotion-main">
					</div>
					<div class="devotion-content-top">
						<div class="row">
							<div class="">
								<div class="col-md-2 background-color-a">
									<h1>12 juni</h1>
								</div>
								<div class="col-md-9 col-sm-10 title-devotion-main">
								<h4 >SAMURAI SEJATI TIDAK TAKUT MATI (IBRANI 11:4-7)</h4>
								</div>
							</div>
						</div>
						<div id="img-content-top">
							<img src="<?php bloginfo('template_url'); ?>/images/footer/bromo1.jpg">
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-2 col-sm-4 ">
				<?php dynamic_sidebar( 'rightdevotion' ); ?>
			</div>
		</div>
		</div>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="row content">

				<div class="post col-md-12" id="post-<?php the_ID(); ?>">	
					<div class="entry">

						<?php the_content(); ?>

						<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

					</div>

				</div>
			</div>
			
			<?php //comments_template(); ?>

			<?php endwhile; endif; ?>
	</div>
<?php get_footer(); ?>
