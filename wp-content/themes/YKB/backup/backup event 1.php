<?php
/*
Template Name: Page Event
*/
get_header(); ?>
	<div id="content" class="content-area col-sm-12 col-md-12 ">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="row content ">

				<div class="post col-md-12" id="post-<?php the_ID(); ?>">	
					<div class="content-devotion-background">
						<div class="entry">
							<?php the_content(); ?>
							<div class="title-event">
								<h2><?php the_title(); ?></h2>
							</div>
							<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

						</div>
					</div>
				</div>
			</div>
			
			<?php //comments_template(); ?>

			<?php endwhile; endif; ?>
	</div>
<?php get_footer(); ?>
