<?php
/*
Template Name: Page Even News
*/
get_header(); ?>
<div class="margin-information">
	<div id="content" class="content-area col-sm-12 col-md-12 ">
		<div id="img-content-top" class="img-devtion-top img-devotion-content-top">
			<img src="<?php bloginfo('template_url'); ?>/images/information/gruposp.jpg">
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

						<div class="margin-main-information-kegiatan">
							<div class=" main-scroll ">
								<?php dynamic_sidebar('mainsidebarevent'); ?>
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