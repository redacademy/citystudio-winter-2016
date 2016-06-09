<form role="search" method="get" class="search-form" action="<?php echo home_url('/search-page'); ?>">
	<fieldset>
		<label>
			<p>
				Search:
			</p>
			<input type="search/submit" class="search-field" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
		</label>
			<span class="screen-reader-text"><?php echo esc_html( 'Search'); ?></span>
	</fieldset>
</form>
