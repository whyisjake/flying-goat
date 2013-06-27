<?php
/**
 * WooCommerce Template Page
 *
 * @package flying-goat
 */

get_header(); ?>

<div class="row">

	<?php get_sidebar(); ?>

	<div id="primary" class="content-area span10">
	
		<div id="content" class="site-content" role="main">

			<?php woocommerce_content(); ?>
			<?php 
				global $woocommerce;
				$customer = $woocommerce->customer;
				var_dump( $customer );
			?>

		</div><!-- #content -->
	
	</div><!-- #primary -->
	
</div>
	
<?php get_footer(); ?>