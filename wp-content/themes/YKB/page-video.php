<?php
/*
Template Name: Page Video
*/
get_header(); ?>
	<?php 
	session_start();
	$_SESSION['ASDF']='VIDEO';
	?>
	<div id="content" class="content-area col-sm-12 col-md-12">
		<img class="image-custom-1<?php the_ID(); ?>" src="http://localhost/YKB/wp-content/uploads/2015/08/wp_2560.jpg" alt="wp_2560" width="2560" height="1440" />
		<div class="font-wrap">
			<h2 class="entry-title">INSIPRATIONAL VIDEO</h2>
		</div>

		<div class="row">
			<div class="col-md-4 font-radio">
				
			</div>
			<div class="col-md-4 font-radio">
				
			</div>
			<div class="col-md-4 font-radio">
				
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 font-radio">
				<?php dynamic_sidebar('leftbottomvideo');?>
			</div>
		<div class="col-md-4 font-radio">
			<?php dynamic_sidebar('middlebottomvideo'); ?>
		</div>
		<div class="col-md-4 font-radio">
			<?php dynamic_sidebar('rightbottomvideo'); ?>
		</div>
		</div>
		<div class="col-md-12">
			<?php dynamic_sidebar('homeslidervideo'); ?>
			<?php echo do_shortcode('[slidercc id="228"]'); ?>
			<?php echo do_shortcode('[wonderplugin_carousel id="1"]'); ?>
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
