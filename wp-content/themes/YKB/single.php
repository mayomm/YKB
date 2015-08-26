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

	<?php foreach(get_the_category() as $category){
		$name=$category->name;
		$catid=$category->cat_ID;
	}?>
	<?php if($catid == '9'|| $catid == '11'):?>
		<div class="margin-information">
			<div id="content" class="content-area col-sm-12 col-md-12 ">
				<div id="img-content-top" class="img-devtion-top img-devotion-content-top">
					<img src="<?php bloginfo('template_url'); ?>/images/devotion/Renungan Keluarga.jpg">
				</div>
				<div class="">
				  <div class="row">		
				  	<div class="asd">
						<div class="col-sm-5 col-md-3 ">
							<div class="sidebar-deviotion-margin">
								<div class="asd">
									<div class ="ribbon">
										PELAYANAN
										<i></i>
										<i></i>
									</div>
								</div>
								<div class="margin-devotion-sidebar">
									<div class="sidebarin">
									  <ul class="nav nav-sidebarin">
										<li class="title-sidebar-informasi"> INFORMASI </li>
										<li class=""><a href="<?php get_site_url();?>kursus"><div class="glyphicon glyphicon-ok"></div> <span>Kursus Alkitab Tertulis</span>  </a></li>
										<li class=""><a href="<?php get_site_url();?>komunitas-pendengar"><div class="glyphicon glyphicon-ok"></div> <span>Komusitas Pendengar</span>  </a></li>
										<li class=""><a href="<?php get_site_url();?>global-coffee-break"><div class="glyphicon glyphicon-ok"></div> <span>Global Coffee Break</span>  </a></li>
										<li class=""><a href="<?php get_site_url();?>event" class="lastchild-sidebar-in"> KEGIATAN </a></li>
									  </ul>
									 </div>
								</div>
					  		</div>
				  		</div>
				  	</div>	
					<div class="col-md-9 main content-devotion-background ">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<div class="devotion-content">
							<div class="row">
							<div class="kursus-contain">
							<div class="col-md-10">
								<div class="margin-main-information">
								<div class="kursus-contain-title">
									<h4><?php the_title(); ?></h4>
								</div>
								<div>
								<?php the_content(); ?>
								</div>
								</div>
							</div>
							</div>
						</div>
						</div>
						<?php endwhile; ?>
							<?php else : ?>
								<h2>Not Found</h2>
							<?php endif; 
							?>
					</div>
				</div>
				</div>
			</div>
		</div>
	<?php elseif($name=="Uncategorized"):?>
	<div id="content" class="content-area col-sm-12 col-md-12 single">
		<div id="content" class="content-area col-sm-12 col-md-12 text-ditengah">
			<h1>Cek Categories</h1>
		</div>
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
						<img src="<?php bloginfo('template_url'); ?>/images/devotion/<?php echo $name;?>.jpg" class="img-devotion-main">
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
	</div>
	<?php endif; ?>

<?php get_footer(); ?>
