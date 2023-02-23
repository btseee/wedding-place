<?php get_header();
while ( have_posts() ) : the_post();

/*
Template Name: Portfolio Builder Post
Template Post Type: nikah-portfolio, elementor_library
*/
 ?>

<div class="portfolio-content">
	<?php the_content(); ?>
</div>

<?php endwhile; // end of the loop.
nikah_footer_choice(); ?>