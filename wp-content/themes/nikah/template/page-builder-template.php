<?php get_header();
while ( have_posts() ) : the_post();
/*
Template Name: Page Builder Template
*/
?>

<!-- CONTENT WRAPPER
============================================= -->
<div id="content" class="content-wrapper clearfix">

		<div class="page-content clearfix">
			<?php the_content(); ?>
		</div><!-- page-content --> 
</div>
<!-- #content-wrapper end -->

<?php
endwhile; 
nikah_footer_choice(); ?>