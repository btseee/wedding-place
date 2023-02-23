<?php while ( have_posts() ) : the_post(); 

$nikah_client_name 	= get_field('client_name');
$nikah_portfolio_year = get_field('portfolio_year');
$nikah_project_url 	= get_field('project_url');

$nikah_portfolio_gallery = get_field('nikah_gallery'); ?>

<div class="single-porto-inner-wrap portfolio-chocolat portfolio-style1">

	<div class="container">

		<?php
		if ( has_post_format('gallery') ) {
			if($nikah_portfolio_gallery == 0){ ?>
			<div class="portfolio-thumbnail standard-thumb clearfix">
				<?php $nikah_porto_thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); ?>
				<div class="gallery-item" data-src="<?php echo esc_url( $nikah_porto_thumb[0] ); ?>" data-sub-html="<?php the_title(); ?>">
					<img src="<?php echo esc_url( $nikah_porto_thumb[0] ); ?>" alt="<?php the_title(); ?>">
				</div>
			</div>
			<?php }
			else {

			$nikah_force_crop 	= get_field('force_crop');
			$nikah_item_per_row 	= get_field('item_per_row');
			$nikah_gallery_width 	= get_field('gallery_width');
			$nikah_gallery_height = get_field('gallery_height');

			$nikah_vertical_gap 	= get_field('vertical_gap');
			if(!empty($nikah_vertical_gap)) {
				$nikah_vertical_gap_res = $nikah_vertical_gap;
			}
			else {
				$nikah_vertical_gap_res = '0';
			}

			$nikah_horizontal_gap = get_field('horizontal_gap');
			if(!empty($nikah_horizontal_gap)) {
				$nikah_horizontal_gap_res = $nikah_horizontal_gap;
			}
			else {
				$nikah_horizontal_gap_res = '0';
			}

			$nikah_gap_calc = $nikah_vertical_gap_res + $nikah_horizontal_gap_res;

			?>
			<div class="portfolio-thumbnail standard-thumb gallery-type clearfix">
				<?php
				foreach( $nikah_portfolio_gallery as $porto_gal2 ):
				
				$foto_name = $porto_gal2['title'];
				$nikah_portgal_def_wid = $porto_gal2["width"];
				$nikah_portgal_def_hei = $porto_gal2["height"];

				if(!empty($nikah_gallery_width)) {
					$nikah_portgal_wid = $nikah_gallery_width;
				}
				else {
					$nikah_portgal_wid = $nikah_portgal_def_wid;
				}

				if(!empty($nikah_gallery_height)) {
					$nikah_portgal_hei = $nikah_gallery_height;
				}
				else {
					$nikah_portgal_hei = $nikah_portgal_def_hei;
				}

				$porto_gal_res = aq_resize($porto_gal2['url'],  $nikah_portgal_wid , $nikah_portgal_hei, $nikah_force_crop, true, true);

				$attachment_id = $porto_gal2['ID'];
				$foto_name = $porto_gal2['title']; ?>
					<div class="gallery-item item" data-src="<?php echo esc_url( $porto_gal2['url'] ); ?>" data-sub-html="<?php echo esc_attr( $foto_name ); ?>" style="width: calc(100% / <?php echo esc_attr($nikah_item_per_row) ?> - <?php echo esc_attr ($nikah_gap_calc); ?>px); padding: <?php echo esc_attr($nikah_vertical_gap_res); ?>px <?php echo esc_attr($nikah_horizontal_gap_res); ?>px">
						<img src="<?php echo esc_url( $porto_gal_res ); ?>" alt="<?php echo esc_attr( $porto_gal2['alt'] ); ?>" /> 
					</div> 
				<?php endforeach; ?>
			</div>
			<?php }
		}
		if ( has_post_format('video') ) { ?>
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
		<?php }
		if ( !get_post_format() ) { ?>
			<div class="portfolio-thumbnail standard-thumb clearfix">
				<?php $nikah_porto_thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); ?>
				<div class="gallery-item" data-src="<?php echo esc_url( $nikah_porto_thumb[0] ); ?>" data-sub-html="<?php the_title(); ?>">
					<img src="<?php echo esc_url( $nikah_porto_thumb[0] ); ?>" alt="<?php the_title(); ?>">
				</div>
			</div>
		<?php } ?>

		<div class="porfolio-content-wrap clearfix">
			<?php 
				$category_name = array();
				$category_slugs = array();
				$category_terms = wp_get_object_terms($post->ID, 'portfolio-category');
				if(!empty($category_terms)){
					if(!is_wp_error( $category_terms )){
					$category_slugs = array();
						foreach($category_terms as $term){
							$category_name[] = $term->name;
							$category_slugs[] = $term->slug;
						}

					$nikah_porto_comas =  join( ", ", $category_name );
					$nikah_porto_space =  join( " ", $category_slugs );

					}
				}
			?>
			<?php if(have_rows('portfolio_details')) { ?>
				<div class="project-details column column-3 clearfix">
					<div class="category-portfolio">
						<span class="category"><?php echo esc_html($nikah_porto_comas); ?></span>
					</div>
					<div class="page-title">
						<h2><?php the_title(); ?></h2>
					</div>

					<ul>
						<?php while(have_rows('portfolio_details')):the_row(); 
							$detail_name	= get_sub_field('detail_name');
							$detail_text	= get_sub_field('detail_text');
						?>
						<li>
							<p><span><?php echo sanitize_text_field( $detail_name ); ?></span><?php echo sanitize_text_field( $detail_text ); ?></p>
						</li>
						<?php endwhile; ?>
					</ul>
				</div>

				<div class="portfolio-content column column-2of3 clearfix">
					<?php the_content(); ?>
				</div>
			<?php }
			else { ?>
				<div class="project-details column column-3 clearfix">
					<div class="category-portfolio">
						<span class="category"><?php echo esc_html($nikah_porto_comas); ?></span>
					</div>
					<div class="page-title">
						<h2><?php the_title(); ?></h2>
					</div>
				</div>

				<div class="portfolio-content column column-2of3 clearfix">
					<?php the_content(); ?>
				</div>
			<?php } ?>
		</div>

		<div class="portfolio-pagination row">
			<?php $next_post = get_next_post();
			$previous_post = get_previous_post(); ?>

			<div class="prev-portfolio column column-3">
				<h3>
				<?php if ( get_previous_post() ) : ?>
					<a href="<?php echo get_permalink( $previous_post->ID ); ?>"><?php esc_html_e( 'Prev', 'nikah' ); ?></a>	
				<?php endif; ?>
				</h3>
			</div>

			<div class="all-portfolio column column-3">
				<h3>
				<?php if(class_exists( 'Redux' )) {
				$options						= get_option('nikah_framework');
				$nikah_portfolio_back_link	= $options['portfolio_back_link']; 
				if(!empty($nikah_portfolio_back_link)) { 

					$page_back = new WP_Query( array( 'page_id' => $nikah_portfolio_back_link ) );
					if ($page_back->have_posts()) : while($page_back->have_posts()) : $page_back->the_post();
					?>
					<a href="<?php the_permalink(); ?>"><?php esc_html_e( 'Back', 'nikah' ); ?></a>
				<?php 
					endwhile; endif; wp_reset_postdata();
					}
				} ?>
				</h3>
			</div>

			<div class="next-portfolio column column-3">
				<h3>
				<?php if ( get_next_post() ) : ?>
					<a href="<?php echo get_permalink( $next_post->ID ); ?>"><?php esc_html_e( 'Next', 'nikah' ); ?></a>
				<?php endif; ?>
				</h3>
			</div>
		</div>
		
	</div>
</div>

<?php endwhile; // end of the loop. ?>