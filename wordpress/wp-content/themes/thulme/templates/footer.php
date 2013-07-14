<footer class="content-info" role="contentinfo">

  <?php include_once( ABSPATH . 'wp-admin/includes/plugin.php' ); ?>
  <?php if ( is_plugin_active('twitter-widget-pro/wp-twitter-widget.php') ) : ?>
  <section class="twitter-feed">
    <?php the_widget(
      'WP_Widget_Twitter_Pro',
      array(
        'username' => 'frebro',
        'title' => '<span class="icon-twitter" aria-hidden="true"></span> <a href="https://twitter.com/thulme">thulme</a>'
      )
    ); ?>
  </section>
  <?php endif; ?>

</footer>

<?php wp_footer(); ?>
