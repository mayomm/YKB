<?php get_header();?>
<div class="margin-devotion-top">
	<div id="content" class="content-area col-sm-12 col-md-12 ">
		<?php session_start();
?>
		<div id="img-content-top" class="img-devtion-top img-devotion-content-top">
			<img src="<?php bloginfo('template_url'); ?>/images/devotion/<?php echo $_SESSION['devotionname']?>.png">
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
						<li class="sidebar-background"><a href="http://localhost/YKB/wasiat"> WASIAT </a></li>
						<li class="sidebar-background"><a href="http://localhost/YKB/kiddy"> KIDDY </a></li>
						<li class="sidebar-background"><a href="http://localhost/YKB/teen-for-christ"> TEEN FOR CHRIST </a></li>
						<li class="sidebar-background"><a href="http://localhost/YKB/youth-for-christ"> YOUTH FOR CHRIST </a></li>
						<li class="sidebar-background"><a href="http://localhost/YKB/jendela-hati"> JENDELA HATI </a></li>
					  </ul>
					 </div>
					</div>
			  	</div>
		  	</div>	
			<div class="col-md-7 main content-devotion-background ">
				<?php $c=null;?>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php foreach(get_the_category() as $category){
					$archive=$category->name;
					$archiveid=$category->cat_ID;
					
				}
				?>
				<?php if($archiveid==$_SESSION["devotion"]):?>
					<?php $c++;?>
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
			<?php endif;?>
				<?php endwhile; ?>
					<?php else : ?>
						<h2>Not Found</h2>
					<?php endif; 
					?>
			<?php if($c==Null):?>
				<h2>Not Found</h2>
			<?php endif; ?>
			</div>
			<div class="col-md-2 col-sm-4 ">
				<div>
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
<?php get_footer(); ?>