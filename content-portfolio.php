<?php 
$num_posts = (is_front_page()) ? 4 : -1; 
$portfolio = array(
	'post_type'     => 'portfolio',
	'posts_per_page' => $num_posts,
);
$my_posts = get_posts( $portfolio );?>
	<div class="d-flex flex-row flex-wrap">
		<?php foreach ($my_posts as $post): setup_postdata($post);

		$thumb = wp_get_attachment_image_src( 'large' );
		?>
				<div class="grid-item">
					<a href="<?php the_permalink(); ?>">
						<div 
						class="grid-item-child" 
						style="background-image: url(<?php echo get_the_post_thumbnail_url( ); ?>);">
							<span><?php the_title(); ?></span>
						</div> 

					</a>
				</div>
				<?php endforeach; wp_reset_postdata(); ?><!-- /get_posts(); -->

			