<div class="foot-col-item clearfix">
<?php 
$options = get_option('nikah_framework');
$nikah_foot_address = $options['foot_address'];

echo wp_specialchars_decode( esc_html( $nikah_foot_address )); ?>
</div>