
</main>
<footer>
    <div class="flex-item item1">
      <p class="copyright"><?php echo date("Y"); ?> &copy; Fumi Fujita</p>
    </div>
    <!-- Footer Widget -->
    
      <div class="flex-item item2">
        <?php wp_nav_menu( array(
          'theme_location'  => 'social-menu',
          'menu_class'      => 'social',
          'items_wrap'      => '<ul id = "%1$s" class = "%2$s list-inline">%3$s</ul>',
          ) ); ?>
        </div><!-- .flex-item -->
</footer>
      <?php wp_footer(); ?>
  </body>
</html>