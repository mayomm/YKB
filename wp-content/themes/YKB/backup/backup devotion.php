<?php get_header(); ?>
<?php if ( is_active_sidebar( 'primary' ) ) {
	$romangie_left_col_class = "col-md-9 indexpage";
	$romangie_right_col_class= "col-md-3 visible-lg visible-md";
	$romangie_content_class = "col-sm-9 content format-" . get_post_format();
} else {
	$romangie_left_col_class = "col-md-12 indexpage";
	$romangie_right_col_class= "hidden-xs";
	$romangie_content_class = "mayo col-sm-10 col-md-12 content format-" . get_post_format();
}
?>
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
					<div id="img-content-top"class="col-md-14 img-devotion-content-top">
						<img src="<?php bloginfo('template_url'); ?>/images/footer/bromo1.jpg" class="img-devotion-main">
					</div>
							<div class="<?php echo $romangie_left_col_class; ?>">
								<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
									<?php $romangie_countComments = wp_count_comments(get_the_ID()); ?>
										<div id="post-<?php the_ID(); ?>" <?php post_class('row post-roll'); ?>>
											<div class="devotion-content-top">
												<div class="row">
													<div >
														<div class="col-md-2 background-color-a">
															<h1>12 juni</h1>
														</div>
														<div class="col-md-9 col-sm-10 title-devotion-main">
														<h4><?php the_title(); ?></h4>
														</div>
													</div>
													<div class="<?php echo $romangie_content_class; ?>">
														<div class="entry"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'full' ); } the_content('Continue Reading <span class="glyphicon glyphicon-chevron-right"></span>'); ?></div>
													</div>
												 </div>
													<?php endwhile; ?>
													<?php else : ?>

														<h2>Not Found</h2>

													<?php endif; ?>
											</div>
										
										</div>
							</div>
			</div>
			<div class="col-md-2 col-sm-4 ">
				<?php dynamic_sidebar( 'rightdevotion' ); ?>
			</div>
		</div>
		</div>
</div>

<?php get_footer(); ?>
