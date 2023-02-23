<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="loop-content">
		<?php if ( has_post_thumbnail() ) { ?>
			<div class="post-thumb thumbnail">
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail(); ?>
				</a>

				<div class="nikah-overlay"></div>
			</div><!-- thumbnail-->
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