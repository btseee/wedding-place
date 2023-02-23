<?php get_header(); ?>

<?php 
$options = get_option('nikah_framework');
$single_porto_style = $options['single_porto_style']; 
?>

	<section id="content" class="single-portfolio-wrap clearfix">

		<?php if($single_porto_style == 'style-1') {
			get_template_part( 'template/single-porto', '1' );
		}
		elseif ($single_porto_style == 'style-2') {
			get_template_part( 'template/single-porto', '2' );
		}
		elseif ($single_porto_style == 'use-builder') {
			get_template_part( 'template/single-porto', 'builder-template' );
		} ?>

	</section>
	
<?php nikah_footer_choice(); ?>