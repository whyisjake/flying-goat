<?php
/**
 * Home page template file
 *
 * @package flying-goat
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
			
				<div class="container">
			
					<div class="row grids">
						<div class="span6">
							<div class="row">
								<div class="span4"><img src="http://placekitten.com/233/109" alt=""></div>
								<div class="span2"><img src="http://placekitten.com/109/109" alt=""></div>
							</div>
							<div class="row">
								<div class="span2"><img src="http://placekitten.com/109/109" alt=""></div>
								<div class="span2"><img src="http://placekitten.com/109/109" alt=""></div>
								<div class="span2"><img src="http://placekitten.com/109/109" alt=""></div>
							</div>
							<div class="row">
								<div class="span2"><img src="http://placekitten.com/109/109" alt=""></div>
								<div class="span4"><img src="http://placekitten.com/233/109" alt=""></div>
							</div>
						</div>
						<div class="span4">
							<div class="row">
								<div class="span4"><img src="http://placekitten.com/233/171" alt=""></div>	
							</div>
							<div class="row">
								<div class="span4"><img src="http://placekitten.com/233/171" alt=""></div>	
							</div>
						</div>
						<div class="span6">
							<div class="row">
								<div class="span4"><img src="http://placekitten.com/233/109" alt=""></div>
								<div class="span2"><img src="http://placekitten.com/109/109" alt=""></div>
							</div>
							<div class="row">
								<div class="span2"><img src="http://placekitten.com/109/109" alt=""></div>
								<div class="span2"><img src="http://placekitten.com/109/109" alt=""></div>
								<div class="span2"><img src="http://placekitten.com/109/109" alt=""></div>
							</div>
							<div class="row">
								<div class="span2"><img src="http://placekitten.com/109/109" alt=""></div>
								<div class="span4"><img src="http://placekitten.com/233/109" alt=""></div>
							</div>
						</div>
					</div>
				</div>

			<?php endwhile; ?>

			<?php flying_goat_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<?php get_template_part( 'no-results', 'index' ); ?>

		<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->
	
<?php get_footer(); ?>