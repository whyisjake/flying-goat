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
							<img src="<?php echo goat_resized_remote_image_url( make_get_cap_option( 'left_top_left' ), 230, 115 ); ?>" alt="">
							<img src="<?php echo goat_resized_remote_image_url( make_get_cap_option( 'left_top_right' ), 112, 115 ); ?>" alt="">
						</div>

						<div class="rows">
							<img src="<?php echo goat_resized_remote_image_url( make_get_cap_option( 'left_middle_left' ), 112, 115 ); ?>" alt="">
							<img src="<?php echo goat_resized_remote_image_url( make_get_cap_option( 'left_middle_middle' ), 112, 115 ); ?>" alt="">
							<img src="<?php echo goat_resized_remote_image_url( make_get_cap_option( 'left_middle_right' ), 112, 115 ); ?>" alt="">
						</div>

						<div class="rows">
							<img src="<?php echo goat_resized_remote_image_url( make_get_cap_option( 'left_bottom_left' ), 112, 115 ); ?>" alt="">
							<img src="<?php echo goat_resized_remote_image_url( make_get_cap_option( 'left_bottom_right' ), 230, 115 ); ?>" alt="">
						</div>

					</div>

					<div class="pull-left middle-col">

						<div class="rows">
							<img src="<?php echo goat_resized_remote_image_url( make_get_cap_option( 'center_top' ), 230, 175 ); ?>" alt="">
						</div>

						<div class="rows">
							<img src="<?php echo goat_resized_remote_image_url( make_get_cap_option( 'center_bottom' ), 230, 175 ); ?>" alt="">
						</div>
					
					</div>


					<div class="pull-right right-col">

						<div class="rows">
							<img src="<?php echo goat_resized_remote_image_url( make_get_cap_option( 'right_top_left' ), 230, 115 ); ?>" alt="">
							<img src="<?php echo goat_resized_remote_image_url( make_get_cap_option( 'right_top_right' ), 112, 115 ); ?>" alt="">
						</div>

						<div class="rows">
							<img src="<?php echo goat_resized_remote_image_url( make_get_cap_option( 'right_middle_left' ), 112, 115 ); ?>" alt="">
							<img src="<?php echo goat_resized_remote_image_url( make_get_cap_option( 'right_middle_middle' ), 112, 115 ); ?>" alt="">
							<img src="<?php echo goat_resized_remote_image_url( make_get_cap_option( 'right_middle_right' ), 112, 115 ); ?>" alt="">
						</div>

						<div class="rows">
							<img src="<?php echo goat_resized_remote_image_url( make_get_cap_option( 'right_bottom_left' ), 112, 115 ); ?>" alt="">
							<img src="<?php echo goat_resized_remote_image_url( make_get_cap_option( 'right_bottom_right' ), 112, 230 ); ?>" alt="">
						</div>

					</div>


				</div>	

			</div>

		</div>

	</div><!-- #primary -->
	
<?php get_footer(); ?>