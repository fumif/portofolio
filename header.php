<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-59297214-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-59297214-1');
</script>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<body  <?php body_class( $class = '' ) ?> class="d-flex">
	<header id="#">
		<div class="top-header position-fixed container-fluid ">
			<!-- <div class=""> -->
				<div class="d-flex justify-content-between align-items-end w-40">
					<div class="logo">
						<?php  if ( function_exists( 'the_custom_logo' ) ) {
						    the_custom_logo();
						} else {
							echo "<h1>" . bloginfo( 'name' ) . "</h1>";
						} ?>

					</div>

					<?php 
					if (is_front_page()) {
						wp_nav_menu( array(
						'theme_location'  => 'primary-menu',
						'container'       => '',
						'items_wrap'      => '<ul id = "%1$s" class = "d-flex justify-content-end nav-menu %2$s">%3$s</ul>',
					) );
					} else {
						wp_nav_menu( array(
					 	'theme_location'  => 'secondary-menu',
					 	'container'       => '',
					 	'items_wrap'      => '<ul id = "%1$s" class = "d-flex justify-content-end nav-menu %2$s">%3$s</ul>',
					 ) ); 
					}
					
					?>
			<!-- </div> -->
		</div>
	</header>
	<main>