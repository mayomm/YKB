<?php echo get_the_date( 'Y-m-d' ); ?>
<?php the_date('Y-m-d'); ?>
<?php the_date_xml(); ?>
<?php get_calendar(); ?>
<?php echo date('j F Y'); ?>

<?php
			foreach((get_the_category()) as $category) {
			echo ''.$category->name.'</br>' ;
			echo 'term_id'.$category->term_id.'</br>';
			echo 'name'.$category->name.'</br>';
			echo 'slug'.$category->slug.'</br>';
			echo 'term_group'.$category->term_group.'</br>';
			echo 'term_taxonomy_id'.$category->term_taxonomy_id.'</br>';
			echo 'taxonomy'.$category->taxonomy.'</br>';
			echo 'description'.$category->description.'</br>';
			echo 'parent'.$category->parent.'</br>';
			echo 'count'.$category->count.'</br>';
			echo 'cat_ID'.$category->cat_ID.'</br>';
			echo 'category_count'.$category->category_count.'</br>';
			echo 'category_description'.$category->category_description.'</br>';
			echo 'cat_name'.$category->cat_name.'</br>';
			echo 'category_nicename'.$category->category_nicename.'</br>';
			echo 'category_parent'.$category->category_parent.'</br>';
			echo 'post id'.the_id().'</br>';
			}
			
			?>