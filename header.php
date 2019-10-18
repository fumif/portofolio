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
<body  <?php body_class( $class = '' ) ?>>
	<header id="#">
		<div class="container">
			<div class="row">
				<div class="flex-container top-header">
					<div class="flex-item flex-item-1 logo ">
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
						'items_wrap'      => '<ul id = "%1$s" class = "flex-item flex-item-2 nav-menu %2$s">%3$s</ul>',
					) );
					} else {
						wp_nav_menu( array(
					 	'theme_location'  => 'secondary-menu',
					 	'container'       => '',
					 	'items_wrap'      => '<ul id = "%1$s" class = "flex-item flex-item-2 nav-menu %2$s">%3$s</ul>',
					 ) ); 
					}
					
					?>
					<!-- <ul class="flex-item flex-item-2 nav-menu">

						<li class="flex-item nav-menu-item">menu1</li>
						<li class="flex-item nav-menu-item">menu2</li>
						<li class="flex-item nav-menu-item">menu1</li>

					</ul> -->
					<!-- <div class="flex-item flex-item-3"><i class="fa fa-2x fa-bars"></i></div> -->
				</div>
			</div>
		</div>
	</header>
	<main>