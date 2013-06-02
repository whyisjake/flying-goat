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
			
				<div class="row">
					
					<div class="span1">Test</div>
					<div class="span1">Test</div>
					<div class="span1">Test</div>
					<div class="span1">Test</div>
					<div class="span1">Test</div>
					<div class="span1">Test</div>
					<div class="span1">Test</div>
					<div class="span1">Test</div>
					<div class="span1">Test</div>
					<div class="span1">Test</div>
					<div class="span1">Test</div>
					<div class="span1">Test</div>
					<div class="span1">Test</div>
					<div class="span1">Test</div>
					<div class="span1">Test</div>
					<div class="span1">Test</div>

					
				</div>
				</div>

			<?php endwhile; ?>

			<?php flying_goat_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<?php get_template_part( 'no-results', 'index' ); ?>

		<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>