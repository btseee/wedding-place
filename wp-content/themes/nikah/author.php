<?php get_header(); ?>
<?php
	$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
?>

<!-- CONTENT START
============================================= -->
<section id="content" class="blog-content-wrap clearfix">

	<!-- BLOG START
	============================================= -->
	<div class="blog archives clearfix">
		<div class="container">
			<div class="author-box clearfix">
				<figure class="author-ava">
					<?php if ( class_exists( 'acf' ) ) {
					$author_id1 						= $curauth->ID;
					$nikah_select_your_profile_image 	= get_field('select_your_profile_image', 'user_'. $author_id1);
					$nikah_upload_profile_image 		= get_field('upload_profile_image', 'user_'. $author_id1);
						$nikah_author_img = aq_resize($nikah_upload_profile_image,  100 , 100, true, true, true);

						if( $nikah_select_your_profile_image == 'upload' ) { ?>
							<img src="<?php echo esc_url( $nikah_author_img ); ?>" alt="<?php esc_attr_e( 'Author', 'nikah' ); ?>">
						<?php }
						else { ?>
							<?php echo get_avatar( $curauth->user_email, '100' ); ?>
						<?php } ?>
					<?php }
					else { ?>
							<?php echo get_avatar( $curauth->user_email, '100' ); ?>
					<?php } ?>
				</figure>

				<div class="author-desc">
					<h2><?php echo sanitize_text_field( $curauth->display_name ); ?></h2>
					<p><?php echo sanitize_text_field( $curauth->user_description ); ?></p>
				</div>
			</div>

			<div class="row">

				<!-- BLOG LOOP START
				============================================= -->
				<div class="author-post column column-2of3 masonry-post post-masonry-style masonry-style-1 clearfix">

					<h3 class="post-by"><?php esc_html_e( 'Stories by', 'nikah' ); ?> <?php echo sanitize_text_field( $curauth->display_name ); ?></h3>
					
					<div class="blog-section main-blog-loop infinite-container content-section masonry-style-loop grid">

						<?php if ( have_posts() ) : ?>
							<?php while ( have_posts() ) : the_post(); 

								get_template_part( 'inc/format/loop', get_post_format() );

							endwhile; ?>
							
						<?php else : ?>

						<p><?php esc_html_e('No posts by this author.', 'nikah'); ?></p>

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