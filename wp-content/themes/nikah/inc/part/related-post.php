<?php 
	$orig_post = $post;  
	$tags = wp_get_post_tags($post->ID); 
		  
	if ($tags) {  
	$tag_ids = array();  
	foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;  
	$args=array(  
	'tag__in' => $tag_ids,  
	'post__not_in' => array($post->ID),  
	'posts_per_page'=>2, // Number of related posts to display.  
	'ignore_sticky_posts' => 1
	  
	);  
		  
	$my_query = new WP_Query( $args );  
		
	if ($my_query->have_posts()) : ?> 

	<div class="related-content clearfix">
		<h3 class="wow fadeIn"><?php esc_html_e( 'Related Posts', 'nikah' ); ?></h3>
		<div class="row">

	<?php while($my_query->have_posts()) : $my_query->the_post();

	?>  

		<div class="column column-2 content-related-post wow fadeIn">
			<?php if ( has_post_thumbnail()) { ?> 

			<figure>
				<a href="<?php the_permalink(); ?>" class="thumb-link">
					<?php the_post_thumbnail('nikah-related'); ?>
					<div class="mask"></div>
				</a>
			</figure>
			
			<?php } ?>

			<div class="meta-wrapper related-title">
				<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>

				<div class="post-meta clearfix">
					<span class="author">
						<span class="author-separator"><?php esc_html_e( 'by', 'nikah' ); ?></span>
						<span class="vcard"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"> <?php echo get_the_author_meta( 'display_name' ); ?></a></span>
					</span>
				</div>
			</div>

			
		</div><!-- end column -->

	<?php  endwhile; ?> 

	</div>
</div><!-- end related-content -->
<?php wp_reset_postdata(); endif; } ?>