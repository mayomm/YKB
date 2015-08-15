<?php
/*
Template Name: Page Even News
*/
get_header(); ?>
	<div id="content" class="content-area col-sm-12 col-md-12">
		<div class="img-top">
			<img src="<?php bloginfo('template_url'); ?>/images/footer/bromo1.jpg" class="image-custom" />
		</div>
		<div class="container-fluid">
		  <div class="row">
			<div class="col-sm-4 col-md-3 sidebaren margin-devotion-sidebar">
			  <ul class="nav nav-sidebaren">
				<h4>EVENT & NEWS</h4>
				<li class="sidebar-background"><a href="#"> EVENT </a></li>
				<li class="sidebar-background"><a href="#"> NEWS </a></li>
			  </ul>
			</div>
			<div class="row">
				<div class="col-sm-7 col-md-9 main content-devotion-background">
					<div class="col-md-12 col-sm-11">
						<div class="title-main-box-en">
							<h4>EVENT</h4>
						</div>
						<div id="style-4" class=" main-scroll ">
							<div class="main-inbox-en">
								<div class="col-md-12 ">
								<div class="row main-inbox-in-en ">
									<div class="col-md-4">
										<img src="<?php bloginfo('template_url'); ?>/images/footer/bromo1.jpg" class="main-img-size" height="10px">
									</div>
									<div class="col-md-8">
										<h5>19 MEI 2015 - CONGRESS PASSES THE GIRL COUNT ACT<h5>
										<p> I often find myselft thinking back to the years when my children were young.One particular 
										found memory is our morning wake-up routin. Every morning i'd go into their bedrooms...
										</p>
									</div>
								</div>
								</div>
							</div>
							<div class="main-inbox-en">
								<div class="col-md-12 ">
								<div class="row main-inbox-in-en ">
									<div class="col-md-4">
										<img src="<?php bloginfo('template_url'); ?>/images/footer/bromo1.jpg" class="main-img-size" height="10px">
									</div>
									<div class="col-md-8">
										<h5>19 MEI 2015 - CONGRESS PASSES THE GIRL COUNT ACT<h5>
										<p> I often find myselft thinking back to the years when my children were young.One particular 
										found memory is our morning wake-up routin. Every morning i'd go into their bedrooms...
										</p>
									</div>
								</div>
								</div>
							</div>
							<div class="main-inbox-en">
								<div class="col-md-12 ">
								<div class="row main-inbox-in-en ">
									<div class="col-md-4">
										<img src="<?php bloginfo('template_url'); ?>/images/footer/bromo1.jpg" class="main-img-size" height="10px">
									</div>
									<div class="col-md-8">
										<h5>19 MEI 2015 - CONGRESS PASSES THE GIRL COUNT ACT<h5>
										<p> I often find myselft thinking back to the years when my children were young.One particular 
										found memory is our morning wake-up routin. Every morning i'd go into their bedrooms...
										</p>
									</div>
								</div>
								</div>
							</div>
							<div class="main-inbox-en">
								<div class="col-md-12 ">
								<div class="row main-inbox-in-en ">
									<div class="col-md-4">
										<img src="<?php bloginfo('template_url'); ?>/images/footer/bromo1.jpg" class="main-img-size" height="10px">
									</div>
									<div class="col-md-8">
										<h5>19 MEI 2015 - CONGRESS PASSES THE GIRL COUNT ACT<h5>
										<p> I often find myselft thinking back to the years when my children were young.One particular 
										found memory is our morning wake-up routin. Every morning i'd go into their bedrooms...
										</p>
									</div>
								</div>
								</div>
							</div>
							<div class="main-inbox-en">
								<div class="col-md-12 ">
								<div class="row main-inbox-in-en ">
									<div class="col-md-4">
										<img src="<?php bloginfo('template_url'); ?>/images/footer/bromo1.jpg" class="main-img-size" height="10px">
									</div>
									<div class="col-md-8">
										<h5>19 MEI 2015 - CONGRESS PASSES THE GIRL COUNT ACT<h5>
										<p> I often find myselft thinking back to the years when my children were young.One particular 
										found memory is our morning wake-up routin. Every morning i'd go into their bedrooms...
										</p>
									</div>
								</div>
								</div>
							</div>
						</div>
					</div>
				</div>
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
