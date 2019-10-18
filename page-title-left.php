<?php 
/*
	Template Name: Left Title
*/ 
?>

<?php get_header(); ?>
<section>
	<div class="container">
		<div class="col-md-3" data-aos="fade-right">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<h2 class="section-title text-right"><?php the_title(); ?></h2>
		</div>
		<div class="col-md-offset-1 col-sm-offset-0 col-md-8" data-aos="fade-up">
			<p><?php the_content(); ?></p>
		</div>
	    <?php endwhile; else : ?>
			<p><?php esc_html_e( 'Sorry, no pages found.','angled-portfolio-theme' ); ?></p>
		<?php endif; ?>
	</div>
</section>
<?php get_footer(); ?>