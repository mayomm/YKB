<?php
/*
Template Name: Page Even News
*/
get_header(); ?>
	<div id="content" class="content-area col-sm-12 col-md-12">
		<div class="container-fluid">
		  <div class="row">
			<div class="col-sm-4 col-md-3 sidebaren margin-devotion-sidebar">
			  <ul class="nav nav-sidebaren">
				<h4>EVENT & NEWS</h4>
				<li class="sidebar-background"><a href="#"> EVENT </a></li>
				<li class="sidebar-background"><a href="#"> NEWS </a></li>
			  </ul>
			</div>
			<div class="col-md-9 main content-devotion-background ">
				<div class="devotion-content">
					<div class="devotion-content-top">
						<div>
							<h4>EVENT</h4>
						</div>
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
