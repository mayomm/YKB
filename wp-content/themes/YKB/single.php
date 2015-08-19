<?php get_header(); ?>
<?php if ( is_active_sidebar( 'primary' ) ) {
	$romangie_left_col_class = "col-md-9 indexpage";
	$romangie_right_col_class= "col-md-3 visible-lg visible-md";
	$romangie_content_class = "col-sm-9 content format-" . get_post_format();
} else {
	$romangie_left_col_class = "col-md-12 indexpage";
	$romangie_right_col_class= "hidden-xs";
	$romangie_content_class = "devotion-content col-sm-10 col-md-12 content format-" . get_post_format();
}
?>
<div id="content" class="content-area col-sm-12 col-md-12 single">
	<?php foreach(get_the_category() as $category){
		$name=$category->name;
	}?>
	<?php if($name == 'event'|| $name == 'news'):?>
	<div class="<?php echo $romangie_left_col_class; ?>">
	<div class=" background-color-a">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php $romangie_countComments = wp_count_comments(get_the_ID()); ?>
			<div class="row content content-devotion-background">
				<div id="post-<?php the_ID(); ?>" <?php post_class('row'); ?>>	
						<div class="<?php echo $romangie_content_class; ?>">
							<div>
						   <img src="http://localhost/YKB/wp-content/uploads/2015/08/bromo-e1438534454577.jpg" alt="bromo" class="image-custom" />
						</div>
						<div class="title-event">
							<h2><?php the_title(); ?></h2>
						</div>
							<div class="entry event">
								<div class="col-md-12 ">
								<?php the_content('Continue Reading <span class="glyphicon glyphicon-chevron-right"></span>'); ?></div>
								</div>
							</div>
						<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
				</div>
				<?php endwhile; ?>
				<?php else : ?>
				<h2>Not Found</h2>
				<?php endif; ?>
			</div>
	</div>
	</div>
	<?php elseif($name=="Uncategorized"):?>
		<div id="content" class="content-area col-sm-12 col-md-12 text-ditengah">
			<h1>Cek Categories</h1>
		</div>
	<?php else: ?>
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
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="devotion-content">
					<div id="img-content-top"class="col-md-14 img-devotion-content-top">
						<img src="<?php bloginfo('template_url'); ?>/images/mountain.jpg" class="img-devotion-main">
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
						<div>
							<?php the_content(); ?>
						</div>
					</div>
				</div>
				<?php endwhile; ?>
					<?php else : ?>
						<h2>Not Found</h2>
					<?php endif; ?>
			</div>
			<div class="col-md-2 col-sm-4 ">
				<?php dynamic_sidebar( 'rightdevotion' ); ?>
			</div>
		</div>
		</div>
	<?php endif; ?>
</div>

<?php get_footer(); ?>
