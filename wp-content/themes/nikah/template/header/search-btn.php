<?php class nikah_search_wrap{}

if(class_exists( 'Redux' )) {
$options 			= get_option('nikah_framework');
$search_bar_style	= $options['search_bar_style'];

	if($search_bar_style == 'expand')  { ?>
	<div class="search-wrap head-item">
		<button id="btn-search"><i class="icon-simple-line-icons-143"></i></button>
	</div>
	<?php }

	else { ?>
	<div class="search-form default-search head-item">
		<?php get_search_form(); ?>
	</div>
<?php }
}