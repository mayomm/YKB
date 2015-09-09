	<?php
	/*
	Template Name: Page Contact Us
	*/
	get_header(); ?>
	<div id="content" class="content-area">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div class="post" id="post-<?php the_ID(); ?>">	
				<div class="entry">
					<?php the_content(); ?>
				</div>
			</div>

			<?php //comments_template(); ?>

		<?php endwhile; endif; ?>
	</div>
	<?php get_footer(); ?>
