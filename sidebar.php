<?php
/**
 * The Sidebar...
 *
 * @package flying-goat
 */
?>
	<div id="secondary" class="widget-area span6 sidebar" role="complementary">
		
		<?php

			$args = array(
				'posts_per_page'	=> 30,
				'no_found_rows'		=> true,
				'post_type'			=> 'product',
			);
			
			$proj_query = new WP_Query( $args );
			echo '<ul>';
			while ( $proj_query->have_posts() ) : $proj_query->the_post();
				echo '<li><a href="'.get_permalink().'"><h4>' . get_the_title() . '</h4></a><li>';
			endwhile;
			echo '</ul>';

			// Reset Post Data
			wp_reset_postdata();

		?>

		
	</div><!-- #secondary -->
