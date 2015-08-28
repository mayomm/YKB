<?php
/*
Template Name: Page Sabi
*/
get_header(); ?>
<div class="margin-information">
	<div id="content" class="content-area col-sm-12 col-md-12 ">
		<div class="image-sabi row">
      	<div class="top-word-sabi">
	      	<div>
	      		<p class="top-title-sabi">SMALL ACT BIG IMPACT (SABI)</p>
	      	</div>
	            <div class="">
	               <p class="">Renewing, Refresing, Inspiring</p>
	            </div>
         </div>
      </div>
		<div class="">
		  <div class="row">		
		  	<div class="asd">
				<div class="col-sm-5 col-md-3 ">
					<div class="sidebar-deviotion-margin">
						<div class="asd">
							<div class ="ribbon">
								PROGRAM TV
								<i></i>
								<i></i>
							</div>
						</div>
					<div class="margin-devotion-sidebar">
						<div class="sidebar">
						  <ul class="nav nav-sidebar">
                              <li class="sidebar-background"><a href="<?php get_site_url();?>gema-kasih-indonesia"> GEMA KASIH INDONESIA </a></li>
                              <li class="sidebar-background"><a href="<?php get_site_url();?>lentera"> LENTERA </a></li>
                              <li class="sidebar-background"><a href="<?php get_site_url();?>sabi"> SABI </a></li>
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
							<div class="col-md-12">
								<?php dynamic_sidebar( 'sabivideo' ); ?>
							</div>
							<div class="col-md-12">
								<div class="main-title-bottom">
									<div class="section">
									<h4>YKB MEDIA TV PARTNER</h4>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="row">
									<div class="section">
									<div class="col-md-2 col-md-offset-3">
										<img src="<?php bloginfo('template_url');?>/images/program tv/useetv.gif">
									</div>
									<div class="col-md-3">
										<img src="<?php bloginfo('template_url');?>/images/program tv/firstmedia.gif">
									</div>
									<div class="col-md-3">
										<img src="<?php bloginfo('template_url');?>/images/program tv/telkomvision.gif">
									</div>
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

