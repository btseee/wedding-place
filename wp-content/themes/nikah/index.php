<?php get_header(); ?>

<?php 
if ( class_exists( 'Redux' ) ) {
	$options = get_option('nikah_framework');
	if(!empty($options['loop_blog_style'])) {
		$nikah_blog_style = $options['loop_blog_style'];
	} else {
		$nikah_blog_style = "";
	}
	if(!empty($options['loop_nav_type'])) {
		$nikah_loop_nav_type = $options['loop_nav_type'];
	} else {
		$nikah_loop_nav_type = "";
	}
	if(!empty($options['blog_infinite_style'])) {
		$nikah_blog_infinite_style = $options['blog_infinite_style'];
	} else {
		$nikah_blog_infinite_style = "";
	}

?>
<!-- CONTENT START
============================================= -->
<section id="content" class="blog-content-wrap clearfix">

	<!-- BLOG START
	============================================= -->
	<div class="blog right-sidebar clearfix">
        <div class="container clearfix">
        	<div class="row clearfix">
				<!-- BLOG LOOP START
				============================================= -->
				<div class="<?php if($nikah_blog_style == 'sidebar') { ?>column column-2of3 <?php } ?> masonry-post post-masonry-style masonry-style-1 clearfix">
	                <div class="blog-section main-blog-loop infinite-container content-section masonry-style-loop grid">

					<?php while ( have_posts() ) : the_post(); 
					
						get_template_part( 'inc/format/loop', get_post_format() );

					endwhile; // end of the loop. ?>
				
					</div>

					<div class="blog-standard pagination clearfix">
						<?php
						if($nikah_loop_nav_type == 'nav_default') {
							nikah_content_nav($pages = '', $range = 2);
						}
						elseif($nikah_loop_nav_type == 'nav_pagina') {
							nikah_pagination($pages = '', $range = 2);
						} ?>
					</div>

					<?php if($nikah_loop_nav_type == 'nav_infinite') { ?>

						<div class="navigation-paging infinite-wrap <?php echo esc_attr($nikah_blog_infinite_style); ?> clearfix">
							<div id="load-more-loop" class="infinite-button"><?php next_posts_link( '' ); ?></div>
							<button id="load-infinite-loop" class="btn"><?php esc_html_e( 'Load More', 'nikah' ); ?></button>
						</div>
						
					<?php } ?>
				</div>
				<!-- BLOG LOOP END -->

				<!-- SIDEBAR START
				============================================= -->

				<?php if($nikah_blog_style == 'sidebar') {
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
<section id="content" class="blog-content-wrap clearfix">

	<!-- BLOG START
	============================================= -->
	<div class="blog right-sidebar clearfix">
        <div class="container clearfix">
        	<div class="row clearfix">
				<!-- BLOG LOOP START
				============================================= -->
	            <div class="column column-2of3 masonry-post post-masonry-style masonry-style-1 clearfix">
	                <div class="blog-section main-blog-loop infinite-container content-section masonry-style-loop grid">

					<?php while ( have_posts() ) : the_post(); 
			
						get_template_part( 'inc/format/loop', get_post_format() );

					endwhile; // end of the loop. ?>

					</div>

					<div class="blog-standard pagination clearfix">
						<?php nikah_content_nav($pages = '', $range = 2); ?>
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