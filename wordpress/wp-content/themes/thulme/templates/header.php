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
        <li class="menu-type-link"><a href="<?php echo get_post_format_link( 'link' ); ?>"><span class="icon-calendar-empty"></span> Decks</a></li>
        <li class="menu-type-video"><a href="<?php echo get_post_format_link( 'video' ); ?>"><span class="icon-youtube-play"></span> Videos</a></li>
        <li class="menu-type-video"><a href="<?php echo get_post_format_link( 'audio' ); ?>"><span class="icon-volume-up"></span> Radio</a></li>
      </ul>
      <?php
        if (has_nav_menu('secondary_navigation')) :
          wp_nav_menu(array('theme_location' => 'secondary_navigation', 'menu_class' => 'nav nav-list'));
        endif;
      ?>
    </nav>
  </div>
  <!-- <div class="description"><?php bloginfo('description'); ?></div> -->
</header>