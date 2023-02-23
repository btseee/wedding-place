<article  id="post-<?php the_ID(); ?>" <?php post_class( 'blog-item hentry'); ?>>

	<div class="post-content-wrap">
		<div class="post-content">

			<?php if ( class_exists( 'acf' ) ) { ?>
			<div class="featured-video clearfix">
				<?php 
					$video_url = get_field('video_url');
					$video_embed = get_field('video_embed');
					$video_file = get_field('video_file');
					
					if($video_url !== ''){ 
						echo wp_oembed_get( esc_url( $video_url ));
					} 

					elseif($video_embed !== '') { 
						echo wp_specialchars_decode( esc_html( $video_embed ) );
					}

					elseif($video_file !== '') {  ?>
					<?php echo do_shortcode( '[video src="'. sanitize_text_field( $video_file ).'"]' ) ?>  
				<?php } ?>
			</div>
			<?php } ?>

			<div class="content-inner-wrapper clearfix">
				<div class="meta-wrapper clearfix">

					<h1 class="post-title entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

					<div class="post-meta clearfix">
						<div class="meta-info">
							<span class="author">
								<span><?php esc_html_e( 'By', 'nikah' ); ?></span>
								<span class="vcard"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"> <?php echo get_the_author_meta( 'display_name' ); ?></a></span>
							</span>
							<span class="standard-post-categories">
								<span><?php esc_html_e( 'in', 'nikah' ); ?></span>
								<?php the_category(', '); ?>
							</span>
							<span class="date">
								<span><?php esc_html_e( 'Posted On', 'nikah' ); ?></span>
								<a href="<?php the_permalink(); ?>">
									<span><?php echo get_the_date('F'); ?></span> <span><?php echo get_the_date('d'); ?></span><?php esc_html_e( ',', 'nikah' ); ?> <span><?php echo get_the_date('Y'); ?></span>
								</a>
							</span>
						</div>
						<?php $comments_number = get_comments_number();
						if($comments_number != 0 ){ ?>
						<div class="meta meta-comments">
							<a href="<?php comments_link(); ?>" class="comments"><span><?php comments_number( '0', '1', '%' ); ?></span><i class="icon-simple-line-icons-124"></i></a>
						</div>
						<?php } ?>
					</div>

					<div class="separator-line"><span></span></div>

				</div>

				<div class="post-text entry-content">
					<?php 
						the_content(); 
						wp_link_pages( array(
							'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'nikah' ) . '</span>',
							'after'       => '</div>',
							'link_before' => '<span>',
							'link_after'  => '</span>',
							'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'nikah' ) . ' </span>%',
							'separator'   => '<span class="screen-reader-text">, </span>',
						) ); 
					?>

					<?php if(has_tag()) { ?>
						<div class="meta-bottom clearfix">
							<div class="tag-wrapper"><?php the_tags('','',''); ?></div>
						</div>
					<?php } ?>
				</div>
			</div>

		</div>
	</div>

	<!-- Author Info -->
	<?php $author_desc = get_the_author_meta('description'); 
	if(!empty($author_desc)) { ?>
	<div class="post-author clearfix">
		
		<figure class="author-ava">
			<?php echo get_avatar( get_the_author_meta('ID'), '100' ); ?>
		</figure>

		<div class="author-desc">
			<div class="author-name">
				<span><?php esc_html_e( 'Written by', 'nikah' ); ?></span> <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" title="<?php echo get_the_author_meta( 'display_name' ); ?>" rel="author"><?php echo get_the_author_meta( 'display_name' ); ?></a>
			</div>
			<?php the_author_meta('description'); ?>
		</div>
	</div>
	<?php } ?>
	<!-- end of author -->

	<div class="next-prev-post standard-1 clearfix">
		<div class="row">

			<?php $next_post = get_next_post();
			$previous_post = get_previous_post(); ?>
			
			<?php if ( get_previous_post() ) : ?>
			<div class="prev-post column column-2">
				<p><i class="icon-arrow-left"></i><?php esc_html_e( 'Previous Post', 'nikah' ); ?></p>
				<h4 class="title">
					<a href="<?php echo get_permalink( $previous_post->ID ); ?>"><?php echo get_the_title( $previous_post->ID ); ?></a>
				</h4>
			</div>
			<?php endif; ?>
			
			<?php if ( get_next_post() ) : ?>
			<div class="next-post column column-2">
				<p><?php esc_html_e( 'Next Post', 'nikah' ); ?><i class="icon-arrow-right"></i></p>
				<h4 class="title">
					<a href="<?php echo get_permalink( $next_post->ID ); ?>"><?php echo get_the_title( $next_post->ID ); ?></a>
				</h4>
			</div>
			<?php endif; ?>

		</div>
	</div>
	<!-- pagination end -->

</article><!-- #post-<?php the_ID(); ?> -->

<?php 
	if ( is_singular() ) wp_enqueue_script( "comment-reply" ); 
	if ( comments_open() || '0' != get_comments_number() ) comments_template(); 
?>