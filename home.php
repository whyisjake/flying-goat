<?php
/**
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
							<img src="<?php echo esc_url( make_get_cap_option( 'left_top_left' ) ); ?>" alt="">
							<img src="<?php echo esc_url( make_get_cap_option( 'left_top_right' ) ); ?>" alt="">
						</div>

						<div class="rows">
							<img src="<?php echo esc_url( make_get_cap_option( 'left_middle_left' ) ); ?>" alt="">
							<img src="<?php echo esc_url( make_get_cap_option( 'left_middle_middle' ) ); ?>" alt="">
							<img src="<?php echo esc_url( make_get_cap_option( 'left_middle_right' ) ); ?>" alt="">
						</div>

						<div class="rows">
							<img src="<?php echo esc_url( make_get_cap_option( 'left_bottom_left' ) ); ?>" alt="">
							<img src="<?php echo esc_url( make_get_cap_option( 'left_bottom_right' ) ); ?>" alt="">
						</div>

					</div>

					<div class="pull-left middle-col">

						<div class="rows">
							<img src="<?php echo esc_url( make_get_cap_option( 'center_top' ) ); ?>" alt="">
						</div>

						<div class="rows">
							<img src="<?php echo esc_url( make_get_cap_option( 'center_bottom' ) ); ?>" alt="">
						</div>
					
					</div>


					<div class="pull-right right-col">

						<div class="rows">
							<img src="<?php echo esc_url( make_get_cap_option( 'right_top_left' ) ); ?>" alt="">
							<img src="<?php echo esc_url( make_get_cap_option( 'right_top_right' ) ); ?>" alt="">
						</div>

						<div class="rows">
							<img src="<?php echo esc_url( make_get_cap_option( 'right_middle_left' ) ); ?>" alt="">
							<img src="<?php echo esc_url( make_get_cap_option( 'right_middle_middle' ) ); ?>" alt="">
							<img src="<?php echo esc_url( make_get_cap_option( 'right_middle_right' ) ); ?>" alt="">
						</div>

						<div class="rows">
							<img src="<?php echo esc_url( make_get_cap_option( 'right_bottom_left' ) ); ?>" alt="">
							<img src="<?php echo esc_url( make_get_cap_option( 'right_bottom_right' ) ); ?>" alt="">
						</div>

					</div>


				</div>	

			</div>

		</div>

		<div class="row">
			<div class="span12 quick">
			
				<div class="row">
			
					<div class="span4">
						
						<a href="#">Visit Our Cafes</a>
						
					</div>
					
					<div class="span4">
					
						<div class="visit">
							
							<a href="#">Read the FCG News</a>
							
						</div>
						
					</div>
					
					<div class="span4">
						
						<a href="#">Contact Us</a>
						
					</div>
				
				</div>
			
			</div>
			
		</div>

		</div><!-- #content -->
	</div><!-- #primary -->
	
<?php get_footer(); ?>