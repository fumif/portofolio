<?php get_header(); ?>
<section id="top-content" class="d-flex align-item-center">
	<!-- <div class="bg-img"></div> -->
	<div class="container">
		<div class="col-lg-offset-1">
			
			<h1 class="tagline">
				<span>
					<?php 
					echo bloginfo( 'name' );
					?>
					</span><br/><?php echo html_entity_decode(get_bloginfo('description'));?>
				</h1>
				
			</div>
		</div>
	</section>
	<?php 
		$queried_post = get_page_by_path('portfolio');
		$portfolio = get_post($queried_post);
		$portfolio_title = $portfolio->post_title;
		 if ($portfolio) :
		 ?>
	<section id="portfolio" class="angled-both-reverse white">
		<div class="container">
			<div class="row">
				<div class="col-md-3" data-aos="fade-right">
					<h2 class="section-title text-md-right text-center">
						<?php echo $portfolio_title; ?>
						
					</h2>
				</div>
				<!-- Regular The Loop -->

				<div class="offset-md-1 col-md-8" data-aos="fade-up">
					<?php if (post_type_exists( 'portfolio' )): ?>
						<?php get_template_part( 'content', 'portfolio' ); ?>
					<?php endif; ?>
					</div>
				</div>
			</div>
		</section>
	<?php endif; ?>
	<?php 
		$queried_post = get_page_by_path('about');
		$about = get_post($queried_post);
		$about_title = $about->post_title;
		$about_content = $about->post_content;
		if ($about) :?>
		<section id="about">
			<div class="container">
				<div class="row">
					<div class="col-md-3" data-aos="fade-right">
						<h2 class="section-title text-md-right text-center">
							<?php echo $about_title; ?>
						</h2>
					</div>
					<div class="col-md-offset-1 col-sm-offset-0 col-md-8" data-aos="fade-up">
						<?php echo $about_content; ?> 
					</div>
				</div>
			</div>
		</section>
	<?php endif; ?>
	<?php get_footer(); ?>