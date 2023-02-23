<?php get_header(); ?>

<?php 
if ( class_exists( 'Redux' ) ) {
$options = get_option('nikah_framework');
	if(!empty($options['blog_type'])) {
		$nikah_blog_type = $options['blog_type'];
	} else {
		$nikah_blog_type = "";
	}

	if(!empty($options['single_post_style'])) {
		$single_post_style = $options['single_post_style']; 
	} else {
		$single_post_style = "";
	}
?>

<!-- CONTENT START
============================================= -->
<section id="content" class="single-post-wrap clearfix">

	<!-- BLOG START
	============================================= -->
	<div class="blog right-sidebar clearfix<?php if ($single_post_style == 'style-2') { ?> single-post-2<?php } ?>">
		<div class="container clearfix">
			<div class="row clearfix">

				<!-- BLOG LOOP START
				============================================= -->
				<div class="<?php if($nikah_blog_type == 'sidebar') { ?>column column-2of3 <?php } ?>clearfix">
					<div class="blog-single content-section">

					<?php while ( have_posts() ) : the_post(); 
						
						if($single_post_style == 'default') {
							get_template_part( 'inc/format/content', get_post_format() );
						}
						elseif ($single_post_style == 'style-2') {
							get_template_part( 'inc/format/content-4', get_post_format() );
						}

					endwhile; // end of the loop. ?>
				
					</div>
				</div>

				<!-- BLOG LOOP END -->

				<!-- SIDEBAR START
				============================================= -->

				<?php if($nikah_blog_type == 'sidebar') {
					get_sidebar();
				} ?>

				<!-- SIDEBAR END -->

			</div>
		</div>
	</div>
	<!-- BLOOG END -->

</section>
<!-- CONTENT END -->
<?php }
else { ?>

<!-- CONTENT START
============================================= -->
<section id="content" class="single-post-wrap clearfix">

	<!-- BLOG START
	============================================= -->
	<div class="blog right-sidebar clearfix">
		<div class="container clearfix">
			<div class="row clearfix">

				<!-- BLOG LOOP START
				============================================= -->
				<div class="column column-2of3 clearfix">
					<div class="blog-single content-section">

					<?php while ( have_posts() ) : the_post(); 
			
						get_template_part( 'inc/format/content', get_post_format() );

					endwhile; // end of the loop. ?>
				
					</div>
				</div>

				<!-- BLOG LOOP END -->

				<!-- SIDEBAR START
				============================================= -->

				<?php get_sidebar(); ?>

				<!-- SIDEBAR END -->

			</div>
		</div>
	</div>
	<!-- BLOOG END -->

</section>
<!-- CONTENT END -->

<?php } ?>

<?php nikah_footer_choice(); ?>