<?php get_header(); ?>
	<div class="container">
		<div class="col-md-12">
	<div class="row">
		<div class="<?php echo $romangie_left_col_class; ?>">

		<?php if (have_posts()) : ?>

 			<?php $post = $posts[0]; // Hack. Set $romangie_post so that the_date() works. ?>
            <div id="title_archives" class="entry-title">

				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentythirteen' ), get_search_query() ); ?></h1>

			</div>

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php $romangie_countComments = wp_count_comments(get_the_ID()); ?>
				<div id="post-<?php the_ID(); ?>" <?php post_class('row post-roll'); ?>>
						<div class="col-sm-9 col-md-8">
							<h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php printf( __('Permalink to %s', 'romangie'), get_the_title()); ?>"><?php the_title(); ?></a></h2>
							<div class="entry search"><?php the_excerpt(); ?></div>
								<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'romangie' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>

						</div>
					 </div>
			<?php endwhile; ?>
			<?php else : ?>

				<h2><?php _e('Not Found', 'romangie') ?></h2>

			<?php endif; ?>
			<div class="pagenav page-links row">
				<div class="next-posts pagination-item col-xs-6 col-sm-offset-3 col-sm-4"><?php next_posts_link('&laquo; ' . __('Older Entries', 'romangie') ) ?></div>
				<div class="prev-posts pagination-item col-xs-6 col-sm-offset-1 col-sm-4"><?php previous_posts_link( __('Newer Entries', 'romangie') . ' &raquo;') ?></div> 
			</div>

		<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
