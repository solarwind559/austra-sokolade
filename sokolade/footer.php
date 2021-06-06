<footer>
  <div class="foot-divides" id="kontakti">
    <div class="f-left">
      <a href="<?php echo esc_url( home_url( '/' ) )?>">
        <?php echo sokolade_custom_logo(); ?>
      </a>
    </div>
    <div class="f-middle" id="footer-widget">
      <?php
        if(is_active_sidebar('footer-1')){
        dynamic_sidebar('footer-1');
        }
      ?>
    </div>
    <div class="f-right" id="footer-widget-social">
      <?php
        if(is_active_sidebar('footer-2')){
        dynamic_sidebar('footer-2');
        }
      ?>
    </div>
  </div>
  <div class="rights" id="footer-privacy-policy">
    <?php
        if(is_active_sidebar('privacy-policy')){
        dynamic_sidebar('privacy-policy');
        }
      ?>
  </div>

</footer>

</body>
</html>

<?php wp_footer(); ?>