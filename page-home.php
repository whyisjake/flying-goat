<?php
/**
 * Template Name: Home Page
 * Home page template file
 *
 * @package flying-goat
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

		<div class="container">
			
			<div class="row grids">
				
				<div class="span12">

					<div class="pull-left left-col">

						<div class="rows">
							<?php echo goat_generate_image_modal( make_get_cap_option( 'left_top_left' ), 'med' ); ?>
							<?php echo goat_generate_image_modal( make_get_cap_option( 'left_top_right' ), 'square' ); ?>
						</div>

						<div class="rows">
							<?php echo goat_generate_image_modal( make_get_cap_option( 'left_middle_left' ), 'square' ); ?>
							<?php echo goat_generate_image_modal( make_get_cap_option( 'left_middle_middle' ), 'square' ); ?>
							<?php echo goat_generate_image_modal( make_get_cap_option( 'left_middle_right' ), 'square' ); ?>
						</div>

						<div class="rows">
							<?php echo goat_generate_image_modal( make_get_cap_option( 'left_bottom_left' ), 'square' ); ?>
							<?php echo goat_generate_image_modal( make_get_cap_option( 'left_bottom_right' ), 'med' ); ?>
						</div>

					</div>

					<div class="pull-left middle-col">

						<div class="rows">
							<?php echo goat_generate_image_modal( make_get_cap_option( 'center_top' ), 'large' ); ?>
						</div>

						<div class="rows">
							<?php echo goat_generate_image_modal( make_get_cap_option( 'center_bottom' ), 'large' ); ?>
						</div>
					
					</div>


					<div class="pull-right right-col">

						<div class="rows">
							<?php echo goat_generate_image_modal( make_get_cap_option( 'right_top_left' ), 'med' ); ?>
							<?php echo goat_generate_image_modal( make_get_cap_option( 'right_top_right' ), 'square' ); ?>
						</div>

						<div class="rows">
							<?php echo goat_generate_image_modal( make_get_cap_option( 'right_middle_left' ), 'square' ); ?>
							<?php echo goat_generate_image_modal( make_get_cap_option( 'right_middle_middle' ), 'square' ); ?>
							<?php echo goat_generate_image_modal( make_get_cap_option( 'right_middle_right' ), 'square' ); ?>
						</div>

						<div class="rows">
							<?php echo goat_generate_image_modal( make_get_cap_option( 'right_bottom_left' ), 'square' ); ?>
							<?php echo goat_generate_image_modal( make_get_cap_option( 'right_bottom_right' ), 'med' ); ?>
						</div>

					</div>


				</div>	

			</div>

		</div>

	</div><!-- #primary -->
	
<?php get_footer(); ?>