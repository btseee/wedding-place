<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="loop-content">
		<?php
		if ( class_exists( 'acf' ) ) {
		$images = get_field('nikah_gallery');
		if( $images){ ?>

		<div class="slider-wrapper">
			<div class="standard-carousel-slider post-gallery carousel-container">
				<div class="carousel-wrapper owl-carousel owl-theme">
					<?php foreach( $images as $image ): ?>
					<div class="carousel-slide">
						<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />  
					</div>
					<?php endforeach; ?>
				</div>

				<div class="post-car-arrow-wrap on-top clearfix">
				</div>
			</div>
		</div>
		<?php } 
		}
		else { 
			if ( has_post_thumbnail()) { ?>
			<div class="post-thumb">
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail(); ?>

					<div class="nikah-overlay"></div>
				</a>
			</div><!-- thumbnail-->
			<?php }
		} ?>  

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