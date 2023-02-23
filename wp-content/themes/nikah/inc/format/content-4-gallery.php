<article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-item magazine-post-style magazine-3-post-style hentry clearfix'); ?>>
	
	<?php if ( has_post_thumbnail()) { 
		$real_image = get_post_thumbnail_id();
		$image_url = wp_get_attachment_image_src( $real_image, 'full'); ?>
		<div class="post-thumb clearfix">
			<div class="post-thumb-img" <?php if(has_post_thumbnail()) { ?> style="background-image:url(<?php echo esc_url( $image_url[0] ); ?>)" <?php } ?>>
				<div class="background-overlay"></div>
			</div>
		</div><!-- thumbnail-->
	<?php } ?>

	<div class="the-content-wrap container clearfix<?php if ( has_post_thumbnail()) { ?> has-thumb<?php } ?>">

		<div class="post-content-wrap wrapper-space">
			<div class="post-content">

				<?php
				if ( class_exists( 'acf' ) ) {
				$images = get_field('nikah_gallery');
				if( $images){ ?>

				<div class="slider-wrapper">
					<div class="standard-carousel-slider post-gallery carousel-container">
						<div class="carousel-wrapper owl-carousel owl-theme">
							<?php foreach( $images as $image ): ?>
							<div class="carousel-slide item">
								<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />  
							</div>
							<?php endforeach; ?>
						</div>

						<div class="post-car-arrow-wrap on-bottom clearfix">
						</div>
					</div>
				</div>
				<?php }
				} ?>

				<div class="single-post-style-3-inner-content">
					<div class="standard-post-categories">
						<?php the_category(''); ?>
					</div>

					<h1 class="post-title entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

					<div class="post-meta metadata clearfix">
						<span class="author">
							<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
								<span class="author-name">
									<span class="vcard"> <?php echo get_the_author_meta( 'display_name' ); ?></span>
								</span>
							</a>
							<p class="date">
								<span><?php esc_html_e( 'On', 'nikah' ); ?></span>
								<a href="<?php the_permalink(); ?>">
									<span><?php echo get_the_date('F'); ?></span> <span><?php echo get_the_date('d'); ?></span><?php esc_html_e( ',', 'nikah' ); ?> <span><?php echo get_the_date('Y'); ?></span>
								</a>
							</p>
						</span>
						<?php $comments_number = get_comments_number();
						if($comments_number != 0 ){ ?>
						<span class="right-section">
							<div class="meta meta-comments">
								<a href="<?php comments_link(); ?>" class="comments"><i class="icon-simple-line-icons-124"></i><span><?php comments_number( '0', '1', '%' ); ?></span></a>
							</div>
						</span>
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
					<div class="meta-bottom clearfix">
						<div class="tag-wrapper"><?php the_tags('','',''); ?></div>
					</div>
				</div>
			</div>
		</div>

		<!-- pagination start -->
		<div class="next-prev-post clearfix">
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
		<!-- pagination end -->

		<!-- Author Info -->
		<?php $author_desc = get_the_author_meta('description'); 
		if(!empty($author_desc)) { ?>
		<div class="post-author clearfix">
			<div class="author-wrap clearfix">
				
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
		</div>
		<?php } ?>
		<!-- end of author -->

	</div>

</article><!-- #post-<?php the_ID(); ?> -->

<div class="comment-area-style-3 container">
	<?php 
		if ( is_singular() ) wp_enqueue_script( "comment-reply" ); 
		if ( comments_open() || '0' != get_comments_number() ) comments_template(); 
	?>
</div>