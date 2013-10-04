<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package flying-goat
 */
?>

	</div><!-- #main -->

	<footer id="colophon" class="site-footer clearfix" role="contentinfo">
		<div class="site-info">
			<div class="meta">&copy; <?php date('Y'); ?> Flying Goat Coffee <a href="/my-account/">MY ACCOUNT</a> &bull; <a href="/terms-conditions/">TERMS + CONDITIONS</a> &bull; <a href="/privacy-policy/">PRIVACY POLICY</a> &bull; <a href="/my-account/">ORDERING + SHIPPING</a> 
				<form class="form-inline">
					<input class="input-small" type="email" placeholder="Subscribe to the FGC newsletter" id="appendedInputButtons" type="text">
					<button class="jsbutton" type="button">Subscribe</button>
				</form>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>