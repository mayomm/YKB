<?php get_header(); ?>
	<div id="content" class="content-area col-sm-12 col-md-12">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div id="post-<?php the_ID(); ?>" <?php post_class('row post-roll'); ?>>
				<div class="col-md-2"><?php edit_post_link(__('Edit this page.', 'romangie'), '<p>', '</p>'); ?></div>
				<div class="post col-md-8" id="post-<?php the_ID(); ?>">

					<h2 class="entry-title"><?php the_title(); ?></h2>

					<div class="entry">

						<?php the_content(); ?>

							<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'romangie' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>

					</div>

				</div>
			</div>
			
			<div class="comments">
				<?php comments_template( '', true ); ?>
			</div>
			
			<?php endwhile; endif; ?>
	</div>
<?php get_footer(); ?>
