<?php
/*
Template Name: Page Mitra
*/
get_header(); ?>
<div class="margin-information">
	<div id="content" class="content-area col-sm-12 col-md-12 ">
		<div id="img-content-top" class="img-devtion-top img-devotion-content-top">
			<img src="<?php bloginfo('template_url'); ?>/images/tentang kami/mitrakami.jpg">
		</div>
		<div class="">
		  <div class="row">		
		  	<div class="asd">
				<div class="col-sm-5 col-md-3 ">
					<div class="sidebar-deviotion-margin">
						<div class="asd">
							<div class ="ribbon">
								TENTANG KAMI
								<i></i>
								<i></i>
							</div>
						</div>
					<div class="margin-devotion-sidebar">
						<div class="sidebar">
						  <ul class="nav nav-sidebar">
                              <li class="sidebar-background"><a href="<?php get_site_url();?>latar-belakang"> LATAR BELAKANG KAMI </a></li>
                              <li class="sidebar-background"><a href="<?php get_site_url();?>visi-misi"> VISI & MISI KAMI </a></li>
                              <li class="sidebar-background"><a href="<?php get_site_url();?>mitra"> MITRA KAMI </a></li>
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
					<div class="kursus-contain-title">
						<div class="col-md-11 mitra-main-margin">
							<div class="row">
								<div class="">
									<div class="row">
									<div class="col-md-2 mitra-balok">
										<img src="<?php bloginfo('template_url');?>/images/tentang kami/logobanktogod.gif">
									</div>
									<div class="col-md-10 mitra-main-link mitra-main-blue">
										<h5>Back to God Ministries International</h5>
										<span>www.backtogod.net</span></br></br>
										<p>Since Back to God Ministries began outreach in 1969, God has continued to bless us
										with resources to bring the Gospel to this vast island nation, aplace with a large Muslim influence.
										Our team works with the Indonesian Christian Church in America. These partnership help us more effectively
										reach people in remote regions. <a href="http://www.backtogod.net">read more...</a></p>
									</div>
									</div>
								</div>
								<div class="main-mitra">
									<div class="row">
									<div class="col-md-2 mitra-squer">
										<img src="<?php bloginfo('template_url');?>/images/tentang kami/logoworldhope.gif">
									</div>
									<div class="col-md-10 mitra-main-link mitra-main-blue">
										<h5>Words of Hope</h5>
										<span>http://woh.org</span></br></br>
										<p>Indonesia has over 6000 inhabited island, many of which are home to unique people groups who have
										their own history, architecture, and language. The number of languages spoken in indonesia exceeds 700.
										According to Operation World, Sumatra, where Batak Toba is spoken, is the largest unevangelized
										island on earth. Most of the people living in Sumatra are staunchly Muslim. <a  href="http://woh.org">read more...</a></p>
									</div>
									</div>
								</div>
								<div class="main-mitra">	
									<div class="row">
									<div class="col-md-2 mitra-squer">
										<img src="<?php bloginfo('template_url');?>/images/tentang kami/logofaithalive.gif">
									</div>
									<div class="col-md-10 mitra-main-link mitra-main-blue">
										<h5>Faith Alive</h5>
										<span>http://www.faithaliveresources.net</span></br></br>
										<p>The Mission of Faith Alive Christian Resources is to provide resources that call people to follow Jesus Christ
										by helping people to understand, experiance, and express the good news of God's kingdom that transforms live and communities worldwide
										<a href="http://www.faithaliveresources.net">read more...</a></p>
									</div>
									</div>
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
<?php get_footer(); ?>

