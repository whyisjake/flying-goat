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

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<p><a href="mailto:info@flyinggoatcoffee.com">info@flyinggoatcoffee.com</a> &ndash; 707.433.3599</p>
			<div class="meta">&copy; <?php date('Y'); ?> Flying Goat Coffee <a href="#">MY ACCOUNT</a> &bull; <a href="#">TERMS + CONDITIONS</a> &bull; <a href=#>PRIVACY POLICY</a> &bull; <a href="#">ORDERING + SHIPPING</a> 
				<form class="form-inline">
					<input class="input-small" type="email" placeholder="Subscribe to newsletter" id="appendedInputButtons" type="text">
					<button class="" type="button">Subscribe</button>
				</form>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>