<?php
/**
 * The template for displaying search forms in Flying
 *
 * @package flying-goat
 */
?>
	<form method="get" id="searchform form form-inline" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
		<div class="row-fluid">
			<input type="search" class="span8" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'flying_goat' ); ?>" />
			<input type="submit" class="span4 btn submit" id="searchsubmit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'flying_goat' ); ?>" />
		</div>
	</form>