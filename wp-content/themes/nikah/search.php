<?php get_header(); ?>

<!-- CONTENT START
============================================= -->
<section id="content" class="search-page blog-content-wrap clearfix">

	<div class="page-title<?php if(!class_exists( 'Redux' )) { ?> no-option-page<?php } ?>">
		<div class="container">
	        <h3 ><span><?php esc_html_e( 'Search Results', 'nikah' ); ?></span>
	        <?php printf( __( '%s', 'nikah' ), get_search_query() ); ?></h3>
	    </div>
    </div><!-- .page-header -->

	<!-- BLOG START
	============================================= -->
	<div class="blog search-result clearfix">
		<div class="container">
			<div class="row">

				<!-- BLOG LOOP START
				============================================= -->
				<div class="column column-2of3 masonry-post post-masonry-style masonry-style-1 clearfix">
					<div class="blog-section main-blog-loop infinite-container content-section masonry-style-loop grid">

						<?php if ( have_posts() ) : ?>
							<?php while ( have_posts() ) : the_post(); 

								get_template_part( 'inc/format/loop', get_post_format() );

							endwhile; ?>

						<?php else : ?>
						<?php get_template_part( 'inc/format/content-search', 'no-result' ); ?>

						<?php endif; ?>

					</div>

					<div class="blog-standard pagination clearfix">
						<?php nikah_content_nav($pages = '', $range = 2); ?>
					</div>
				</div>
				<!-- BLOG LOOP END -->

			<?php get_sidebar(); ?>

			</div><!-- row -->
		</div><!-- container -->
	</div><!-- search-result -->

</section>
<!-- CONTENT END -->

<?php nikah_footer_choice(); ?>