<header class="banner" role="banner">
  <div class="brand">
    <a class="title" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
  </div>
  <button id="nav-toggle" class="btn"><span class="fui-list"></span></button>
  <div class="navigation">
    <nav class="nav nav-primary" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav nav-list'));
        endif;
      ?>
    </nav>
    <?php get_search_form(); ?>
    <nav class="nav nav-secondary" role="navigation">
      <ul id="menu-types" class="nav nav-list">
        <li class="menu-type-link"><a href="<?php echo get_post_format_link( 'link' ); ?>"><span class="icon-calendar-empty" aria-hidden="true"></span> <?php echo post_format_get_plural_string( 'link' ); ?></a></li>
        <li class="menu-type-video"><a href="<?php echo get_post_format_link( 'video' ); ?>"><span class="icon-youtube-play" aria-hidden="true"></span> <?php echo post_format_get_plural_string( 'video' ); ?></a></li>
        <li class="menu-type-video"><a href="<?php echo get_post_format_link( 'audio' ); ?>"><span class="icon-volume-up" aria-hidden="true"></span> <?php echo post_format_get_plural_string( 'audio' ); ?></a></li>
      </ul>
      <?php
        if (has_nav_menu('secondary_navigation')) :
          wp_nav_menu(array('theme_location' => 'secondary_navigation', 'menu_class' => 'nav nav-list'));
        endif;
      ?>
    </nav>
  </div>
  <!-- <div class="description"><?php bloginfo('description'); ?></div> -->
  <aside class="social-icons">
    <a href="https://plus.google.com/117088670109765988183/" target="_blank"><i class="icon-google-plus-sign"></i></a>
    <a href="https://twitter.com/thulme" target="_blank"><i class="icon-twitter"></i></a>
    <a href="https://uk.linkedin.com/in/thulme" target="_blank"><i class="icon-linkedin"></i></a>
    <a href="http://instagram.com/thulme" target="_blank"><i class="icon-instagram"></i></a>
  </aside>
</header>