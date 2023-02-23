<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="loop-content">

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

		<div class="info">

			<div class="top-info">
				<span class="category"><?php the_category(', '); ?></span>
			</div>

			<h4 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>

			<div class="date"><?php echo get_the_date(); ?></div>

			<div class="post-excerpt post-text">
				<p><?php echo nikah_excerpt(15); ?></p>
			</div>

			<div class="more-button clearfix">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="more">
					<?php esc_html_e( 'VIEW', 'nikah' ); ?>	
				</a>
			</div>

		</div>
	</div><!-- post-content -->

</article>