<!DOCTYPE html>
<html lang="lv">
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Anton&family=Bebas+Neue&family=Roboto&display=swap" rel="stylesheet">
  <title>Austra Šokolāde</title>
</head>

<body>
  <nav>
    <div class="navigation" id="navigation">
      <div class="top" id="nav-bar-widget"> 
        <?php
        if(is_active_sidebar('nav-bar')){
        dynamic_sidebar('nav-bar');
        }
      ?>
      </div>
            <div class="logo" id="logo">
              <a href="<?php echo esc_url( home_url( '/' ) )?>">
                <?php echo sokolade_custom_logo(); ?>
              </a>
            </div>
<?php 
  $menu_array = array(
    'container' => 'div',
    'theme_location' => 'menu-1',
    'container_class' => 'open',
    'fallback_cb' => false
  );
	wp_nav_menu( $menu_array );
?>
    </div>
  </nav>
<?php wp_head();?>
