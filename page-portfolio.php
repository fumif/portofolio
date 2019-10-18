<?php 
/*
	Template Name: Portfolio Page
*/
 ?>
<?php get_header(); ?>

<section>
	<div class="container">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		    <div data-aos="fade-right">
		        <h2 class="section-title text-center"><?php the_title(); ?></h2>
		    </div>
		    <?php endwhile; endif; ?> <!-- Regular The Loop -->

		    <div data-aos="fade-up">
<?php get_template_part( 'content', 'portfolio' ); ?>
			</div>
	</div>
</section>

<?php get_footer(); ?>