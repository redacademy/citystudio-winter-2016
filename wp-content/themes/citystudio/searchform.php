<?php
/*
Template Name: Search Page
*/
?><form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">
	<fieldset>
		<label>
			<input type="search/submit"
						 placeholder="Search Projects..."
						 class="search-field"
						 value="<?php echo esc_attr( get_search_query() ); ?>"
						 name="s"
						 title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
<i class="fa fa-search"></i>
		</label>
			<span class="screen-reader-text"><?php echo esc_html( 'Search'); ?></span>

	</fieldset>
</form>
