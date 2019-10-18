<?php 
/*
	Template Name: Right Sidebar
*/

 ?>
<?php get_header(); ?>
<section>
	<div class="container">
		<div class="col-sm-9" data-aos="fade-up">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<h2 class="section-title"><?php the_title(); ?></h2>
			<p><?php the_content(); ?></p>
		    

	    <?php endwhile; else : ?>

			<p><?php esc_html_e( 'Sorry, no pages found.','angled-portfolio-theme' ); ?></p>

		<?php endif; ?>
		</div>
		<div class="col-sm-3" data-aos="fade-right">
			<h3>Blog Categories</h3>
		</div>
	</div>
</section>

<?php get_footer(); ?>