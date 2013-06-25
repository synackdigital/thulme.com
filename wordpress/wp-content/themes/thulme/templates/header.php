<header class="banner" role="banner">
  <div class="container-fluid">
    <a class="brand" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
    <div class="description"><?php bloginfo('description'); ?></div>
    <nav class="nav-main" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav nav-list nav-list-vivid'));
        endif;
      ?>
    </nav>
  </div>
</header>