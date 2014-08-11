<!-- search -->
<form class="search" method="get" action="<?php echo home_url(); ?>" role="search" name="frm">
	<button class="search-submit" type="submit" role="button" onclick="return valida_form()"><?php _e( 'Search', 'html5blank' ); ?></button>
	<input id="search_input" class="search-input" type="search" name="s" placeholder="<?php _e( 'To search, type and hit enter.', 'html5blank' ); ?>">
</form>
<!-- /search -->
