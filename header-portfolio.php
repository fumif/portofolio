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
    <title><?php wp_title( $sep = ' | ', $display = true, $seplocation = 'right' ) ?><?php bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <div>
        <header class="container-fluid">
          <?php $portfolio_page = get_post(33); ?>
            <a href="<?php echo get_permalink( $portfolio_page ->ID); ?>" class="close-button">&#10006;</a>
        </header>
        <?php  ?>