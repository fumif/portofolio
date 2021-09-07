
</main>
<footer class="d-flex align-items-center">
  <div class="container">
    <div class="d-flex flex-column flex-md-row justify-content-md-between justify-content-center">
    <div>
      <p class="copyright"><?php echo date("Y"); ?> &copy; Fumi Fujita</p>
    </div>
    <!-- Footer Widget -->
    <div>
      <?php wp_nav_menu( array(
        'theme_location'  => 'social-menu',
        'menu_class'      => 'social',
        'items_wrap'      => '<ul id = "%1$s" class = "%2$s d-flex flex-row justify-content-md-start justify-content-center">%3$s</ul>',
        ) ); ?>
      </div>
    </div>
  </div>
</footer>
      <?php wp_footer(); ?>
  </body>
</html>