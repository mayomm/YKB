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
		<?php 
		if($catid=='9' || $catid == '11' || $name=="Uncategorized"){}else{
		session_start();
		$_SESSION["devotion"]=$catid;
		$_SESSION["devotionname"]=$name;}
	?>
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
										<li class=""><a href="<?php get_site_url();?>event" class="lastchild-sidebar-in"> KEGIATAN</a></li>
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
		
<div class="margin-devotion-top">
<?php foreach(get_the_category() as $category){
					$archive=$category->name;
					$archiveid=$category->cat_ID;
					
				}
				?>
	<div id="content" class="content-area col-sm-12 col-md-12 ">
		<div id="img-content-top" class="img-devtion-top img-devotion-content-top">
			<img src="<?php bloginfo('template_url'); ?>/images/devotion/<?php echo $archive?>.jpg">
		</div>
		<div class="container">
		  <div class="row">		
			<div class="col-sm-5 col-md-3 ">
				<div class="sidebar-deviotion-margin">
					<div class="asd">
					<div class ="ribbon">
						Renungan
						<i></i>
						<i></i>
					</div>
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
					?>
			</div>
			<div class="col-md-2 col-sm-4 ">
				<div class="disabled">
					<?php dynamic_sidebar( 'rightdevotion' ); ?>
				</div>
				<div style="">
					<address class="rightbar-devotion">
					<p>Pengganti ongkos cetak dan biaya pengiriman:</p>
					<P>Rp. 65.000,-/tahun</P>
					<P>Rp. 7.500,-/eksemplar</P></br>
					<p>Pembayaran melalui:</p>
					<p>Bank Mandiri - Jakarta, Kelapa Dua</p>
					<p>A/C No. 165 0000 558743</p>
					<p>a.n. Yayasan Komunikasi Bersama</p>
					<p>Marketing</p></br>
					<p><strong>BCA Bidakara</strong></p>
					<p>A/C No. 450 558 9999</p>
					<p>a.n. Yayasan Komunikasi Bersama</p></br>
					<p>Persembahan Kasih melalui:</p>
					<p><strong>BCA Bidakara</strong></p>
					<p>A/C No. 450 305 2990</p>
					<p>a.n. Yayasan Komunikasi Bersama</p>
					</address>
				</div>
			</div>
		</div>
		</div>		
	</div>
</div>
	<?php endif; ?>

<?php get_footer(); ?>
