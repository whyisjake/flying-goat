<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package flying-goat
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		<div class="metainfo">
			<p><?php the_author_posts_link(); ?> - <a href="<?php the_permalink(); ?>"><?php the_date(); ?></a></p>
		</div>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'flying_goat' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit', 'flying_goat' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>

	<hr>

</article><!-- #post-## -->
