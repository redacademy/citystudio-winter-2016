<?php
/*
Template Name: Search Page
*/
?><form role="search" method="get" class="search-form" action="<?php echo home_url('home/search/'); ?>">
	<fieldset>
		<label>
			<input type="search/submit" placeholder="Search Projects..."class="search-field" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
				<!-- <input type="hidden" name="post_type[]" value="projects" />
				<input type="hidden" name="post_type[]" value="partners" />
				<input type="hidden" name="post_type[]" value="people" />
				<input type="hidden" name="post_type[]" value="posts" /> -->
<i class="fa fa-search"></i>
		</label>
			<span class="screen-reader-text"><?php echo esc_html( 'Search'); ?></span>

	</fieldset>
</form>
