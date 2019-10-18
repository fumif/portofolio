<?php get_header(); ?>
<section>
	<div class="container">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		    <div data-aos="fade-right">
		        <h2 class="section-title text-center"><?php the_title(); ?></h2>
		    </div>
		    <div data-aos="fade-up">

		        <p><?php the_content(); ?></p>
		    </div>
		    <?php endwhile; else : ?>
				<p><?php esc_html_e( 'Sorry, no pages found.' ,'angled-portfolio-theme'); ?></p>
			<?php endif; ?>
		</div>
</section>

<?php get_footer(); ?>