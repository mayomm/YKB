<?php get_header(); ?>
<?php if ( is_active_sidebar( 'primary' ) ) {
	$romangie_left_col_class = "col-md-9 indexpage";
	$romangie_right_col_class= "col-md-3 visible-lg visible-md";
	$romangie_content_class = "col-sm-9 content format-" . get_post_format();
} else {
	$romangie_left_col_class = "col-md-12 indexpage";
	$romangie_right_col_class= "hidden-xs";
	$romangie_content_class = "mayo col-sm-10 col-md-12 content format-" . get_post_format();
}
?>
<div id="content" class="content-area col-sm-12 col-md-12">
	<div class="<?php echo $romangie_left_col_class; ?>">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php $romangie_countComments = wp_count_comments(get_the_ID()); ?>
			<div class="row content content-devotion-">
				<div id="post-<?php the_ID(); ?>" <?php post_class('row'); ?>>	
						<div class="<?php echo $romangie_content_class; ?>">
							<div>
						   <img src="http://localhost/YKB/wp-content/uploads/2015/08/bromo-e1438534454577.jpg" alt="bromo" class="image-custom" />
						</div>
						<div class="title-event">
							<h2><?php the_title(); ?></h2>
						</div>
							<div class="entry event">
								<div class="col-md-12 ">
								<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'full' ); } the_content('Continue Reading <span class="glyphicon glyphicon-chevron-right"></span>'); ?></div>
								</div>
							</div>
						<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
				</div>
				<?php endwhile; ?>
				<?php else : ?>
				<h2>Not Found</h2>
				<?php endif; ?>
			</div>
	</div>
	
</div>

<?php get_footer(); ?>
