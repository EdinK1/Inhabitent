<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<fieldset>
		<label>
		<i class="fa fa-search"></i>
		<input required type="search" class="search" placeholder="Type and hit enter..." value="" name="s" title="Search for:">
		</label>
			<span class="screen-reader-text"><?php echo esc_html( 'Search' ); ?></span>
		</button>
	</fieldset>
</form>
