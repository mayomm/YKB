<?php
/*
Template Name: Page Video
*/
get_header(); ?>
	<div id="content" class="content-area col-sm-12 col-md-12">
		<img class="image-custom-1" src="http://localhost/YKB/wp-content/uploads/2015/08/wp_2560.jpg" alt="wp_2560" width="2560" height="1440" />
		<div class="font-wrap">
			<h2 class="entry-title">INSIPRATIONAL VIDEO</h2>
		</div>

		<div class="row">
			<div class="col-md-4 font-radio">
				<?php dynamic_sidebar( 'lefttopvideo' ); ?>
			</div>
			<div class="col-md-4 font-radio">
				<a href="http://localhost/YKB/wp-content/uploads/2015/07/Chrysanthemum.jpg"><img class="alignnone size-full wp-image-8" src="http://localhost/YKB/wp-content/uploads/2015/07/Chrysanthemum.jpg" alt="Chrysanthemum" width="300" height="100" /></a>
				<div class="col-md-12">
					<address>
					When Barbara's symptoms worsened after 15 years, her fears were erased with a prayer spoken on The 700 Club.
					<a href="">Watch Now!</a>
					</address>
				</div>
			</div>
			<div class="col-md-4 font-radio">
				<a href="http://localhost/YKB/wp-content/uploads/2015/07/Chrysanthemum.jpg"><img class="alignnone size-full wp-image-8" src="http://localhost/YKB/wp-content/uploads/2015/07/Chrysanthemum.jpg" alt="Chrysanthemum" width="300" height="100" /></a>
				<div class="col-md-12">
					<address>
					When Barbara's symptoms worsened after 15 years, her fears were erased with a prayer spoken on The 700 Club.
					<a href="">Watch Now!</a>
					</address>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 font-radio">
				<a href="http://localhost/YKB/wp-content/uploads/2015/07/Chrysanthemum.jpg"><img class="alignnone size-full wp-image-8" src="http://localhost/YKB/wp-content/uploads/2015/07/Chrysanthemum.jpg" alt="Chrysanthemum" width="300" height="100" /></a>
				<div class="col-md-12">
					<address>
					When Barbara's symptoms worsened after 15 years, her fears were erased with a prayer spoken on The 700 Club.
					<a href="">Watch Now!</a>
					</address>
				</div>
			</div>
		<div class="col-md-4 font-radio">
			<a href="http://localhost/YKB/wp-content/uploads/2015/07/Chrysanthemum.jpg"><img class="alignnone size-full wp-image-8" src="http://localhost/YKB/wp-content/uploads/2015/07/Chrysanthemum.jpg" alt="Chrysanthemum" width="300" height="100" /></a>
			<div class="col-md-12">
				<address>
				When Barbara's symptoms worsened after 15 years, her fears were erased with a prayer spoken on The 700 Club.
				<a href="">Watch Now!</a>
				</address>
			</div>
		</div>
		<div class="col-md-4 font-radio">
			<a href="http://localhost/YKB/wp-content/uploads/2015/07/Chrysanthemum.jpg"><img class="alignnone size-full wp-image-8" src="http://localhost/YKB/wp-content/uploads/2015/07/Chrysanthemum.jpg" alt="Chrysanthemum" width="300" height="100" /></a>
			<div class="col-md-12">
				<address>
				When Barbara's symptoms worsened after 15 years, her fears were erased with a prayer spoken on The 700 Club.
				<a href="">Watch Now!</a>
				</address>
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
