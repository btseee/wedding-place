<div class="logo-footer foot-col-item">
	<?php $nikah_foot_logo = '';
	$options = get_option('nikah_framework');
	if (isset($options['foot_logo'])) {
	$nikah_foot_logo = $options['foot_logo']; ?>
		<img src="<?php echo esc_url( $nikah_foot_logo['url'] ); ?>" alt="<?php echo esc_attr_e('logo-footer', 'nikah'); ?>">
	<?php } ?>
</div>