<?php get_header('portfolio'); 
?>

<main id="portfolio-main">
	<!-- loop -->
	<?php if( have_posts()): while( have_posts()) : the_post(); ?>
	<section class="project-title no-padding">
		<!-- Project  Title -->
		<div class="container-fluid">
			<div class="d-flex">
				<div class="col-md-6 col-12 project order-md-2">
					<div class="project-info d-flex justify-content-between">
						<dl class="col-xs-4">
							<dt>Category</dt>
							<dd>
								<?php echo get_field('category'); ?>
							</dd>
						</dl>
						<dl class="col-xs-4">
							<dt>Position</dt>
							<dd>
							<?php $values = get_field('position');
							if($values)
							{
								echo '<ul class="inline">';
								foreach($values as $val)
								{
									echo '<li>' . $val . '</li>';
								}
								echo '</ul>';
							} 
							// var_dump($values);
							
							?>

							</dd>
						</dl>
						<dl class="col-xs-4">
							<dt>Year</dt>
							<dd><?php the_field('year');
							if (get_field('end_year')) {
							echo ' - ' . get_field('end_year');
							}
							?>
							</dd>
						</dl>
					</div>
					<h1 class="section-title"><?php the_title(); ?></h1>
					<p class="project-description">
						<?php the_content(); ?>
					</p>
					<div class="d-flex">
						<!-- URLがあればボタンを表示 -->
						<?php if (get_field('url')): ?>
						<div class="
						<?php if (get_field('github_url')):?>ml-auto <?php else: ?> mx-auto <?php endif; ?>  ml-md-0"
							>
							<a class="btn btn-lg btn-accent" href="<?php the_field('url'); ?>"
								target="_blank"><?php the_field('anchor'); ?></a>
						</div>
						<?php endif; ?>
						<?php if (get_field('github_url')): ?>
						<div class="mr-auto">
							<a class="btn" href="<?php the_field('github_url'); ?>"
								target="_blank"><?php the_field('anchor_github'); ?></a>
						</div>
						<?php endif; ?>
						<!-- (get_field('url') -->

					</div>

				</div>
				<div class="col-md-6 col-12 order-md-1">
					<img src="<?php the_field('main_image'); ?>" alt="main image" class="img-fluid">
				</div>
			</div>
		</div>
	</section>
	<!-- loop -->
	<section class="accent angled-both-reverse">
		<div class="container d-flex flex-wrap">
			<div class="col-md-6 col-12" data-aos="fade-right">
				<h2 class="section-title"><?php the_field('spec_1_title'); ?></h2>
				<?php the_tags( ); ?>
				<div class="spec">
					<?php the_field('spec_1_description'); ?>
				</div>
			</div>
			<div class="col-md-6 col-12" data-aos="fade-left">
				<?php 
                $filetype = wp_check_filetype( get_field('spec_1_image') );
                // MP4ファイルが有れば表示
                 if ($filetype['ext'] == 'mp4'): ?>
				<video class="vid img-fluid text-center" preload="auto" loop autoplay>
					<source src="<?php echo the_field('spec_1_image'); ?>" type="video/mp4"> Your browser does not support the
					video tag.
				</video>
				<?php else: ?>
				<!-- なければ画像 -->
				<img src="<?php echo the_field('spec_1_image'); ?>" alt="" class="img-fluid">
				<?php endif; ?>
				<!-- $filetype['ext'] == 'mp4' -->
			</div>
		</div>
	</section>
	<?php if (get_field('spec_2_title')): ?>
	<!-- spec_2_titleに入力されていれば -->
	<section class="angled-top">
		<div class="container d-flex flex-wrap">
			<div class="<?php if (get_field('spec_2_image')): ?>
				col-md-6 col-12 order-md-2 <?php endif; //  if (get_field('spec_2_image'))  ?> " data-aos="fade-left">
				<h2 class="section-title"><?php the_field('spec_2_title'); ?></h2>
				<div class="spec">
					<?php the_field('spec_2_description'); ?>
				</div>
			</div>
			<div class="<?php if (get_field('spec_2_image')):?> col-md-6 col-12 order-md-1 text-center"
				<?php endif; ?> data-aos="fade-right">
				<?php 
                $filetype = wp_check_filetype( get_field('spec_2_image') );
                 if ($filetype['ext'] == 'mp4'): //mp4ファイルが有れば表示?>
				<video class="vid img-fluid" preload="auto" loop autoplay>
					<source src="<?php echo the_field('spec_2_image'); ?>" type="video/mp4"> Your browser does not support the
					video tag.
				</video>
				<?php else: ?>　
				<img src="<?php echo the_field('spec_2_image'); ?>" alt="" class="img-fluid">
				<?php endif; ?>
			</div>
		</div>
	</section>
	<?php endif;//  spec_2_title ?>
	<?php if (get_field('spec_3_title')):   ?>
	<section class="accent angled-top-reverse ">
		<div class="container d-flex">
			<div class="<?php if (get_field('spec_3_image')): //画像あり?>col-md-6 col-12<?php endif;//画像あり ?> " data-aos="fade-right">
				<h2 class="section-title"><?php the_field('spec_3_title'); ?></h2>
				<?php the_tags( ); ?>
				<div class="spec">
					<?php the_field('spec_3_description'); ?>
				</div>
			</div>
			<div class="<?php if (get_field('spec_3_image')): //画像あり?>col-md-6 col-12<?php endif;//画像あり ?>" data-aos="fade-left">
				<?php 
                $filetype = wp_check_filetype( get_field('spec_3_image') );
                 if ($filetype['ext'] == 'mp4')://mp4あり ?>
				<video class="vid img-fluid text-center" preload="auto" loop autoplay>
					<source src="<?php echo the_field('spec_3_image'); ?>" type="video/mp4"> Your browser does not support the
					video tag.
				</video>
				<?php else: // mp4なし　画像?>
				<img src="<?php echo the_field('spec_3_image'); ?>" alt="" class="img-fluid">
				<?php endif;// mp4 boolean ?>
			</div>
		</div>
	</section>
	<?php endif; // spec 3 title?>
	<?php if (get_field('spec_4_title')):  // spec 4にタイトルがあれば?>
	<section class="angled-top">
		<div class="container d-flex">
			<div class="<?php if (get_field('spec_4_image'))://画像 ?>
                order-md-2 <?php endif; //画像?> " data-aos="fade-left">
				<h2 class="section-title"><?php the_field('spec_4_title'); ?></h2>
				<div class="spec">
					<?php the_field('spec_4_description'); ?>
				</div>
			</div>
			<div class="<?php if (get_field('spec_4_image')): //画像?>order-md-1 text-center" <?php endif; //画像?>
				data-aos="fade-right">
				<?php 
                $filetype = wp_check_filetype( get_field('spec_4_image') );
                 if ($filetype['ext'] == 'mp4'):// mp4 ?>
				<video class="vid img-fluid" preload="auto" loop autoplay>
					<source src="<?php echo the_field('spec_4_image'); ?>" type="video/mp4"> Your browser does not support the
					video tag.
				</video>
				<?php else: //mp4なし　画像 ?>
				<img src="<?php echo the_field('spec_4_image'); ?>" alt="" class="img-fluid">
				<?php endif; // mp4?>
			</div>
		</div>
	</section>
	<?php endif; // spec_4 title ?>

	<?php if (get_field('capture')): ?>


	<section class="white entire-cap angled-top<?php 

    $odd_num_spec = the_field('spec_2_title' || 'spec_4_title');// spec 2とspec4にはangled classがないので、spec 1か3なら(angled-both) 
    if (!$odd_num_spec){ 
        echo '-reverse" ';
         } else { 
            echo ' data-aos="fade"  data-aos-delay="0';
         }?>">
		<!-- Screen shot and more details -->
		<div class="container" data-aos="fade-up">
			<img src="<?php the_field('capture'); ?>" alt="simple corp cap">
		</div>
	</section>
	<?php endif; ?>


	<!-- Next Post -->
	<section id="next" class="blur no-padding" data-aos="fade" data-aos-delay="0">
		<?php 
        $prev_post = get_previous_post();
				$args = array(
                'post_type' => 'portfolio',
                'orderby' => 'post_date',
                'order' => 'DESC',
								'post__not_in' => array($post->ID),
            );

        $posts_array = get_posts( $args );
        $first_post_thumbnail = get_the_post_thumbnail_url($posts_array[0]->ID);


        ?>
		<?php if (!empty($prev_post)): ?>
		<div class="bg-img"
			style="background-image: url('<?php echo esc_url(get_the_post_thumbnail_url(get_previous_post()->ID));?>'); background-size: cover; ">
		</div>
		<div class="next-content">
			<a href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>">
				<p>Next work &raquo;</p>
				<h2 class="section-title"><?php echo esc_attr( $prev_post->post_title ); ?></h2>
			</a>
		</div>
		<?php else: ?>
		<div class="bg-img" style="background-image: url('<?php echo $first_post_thumbnail ?>'); background-size: cover; ">
		</div>
		<div class="next-content">
			<a href="<?php echo esc_url( get_permalink( $posts_array[0]->ID ) ); ?>">
				<p>Next work &raquo;</p>
				<h2 class="section-title"><?php echo esc_attr(  $posts_array[0]->post_title ); ?></h2>
			</a>
		</div>
		<?php endif; ?>
	</section>

	<?php endwhile;endif; ?>
	<?php get_footer('portfolio'); ?>