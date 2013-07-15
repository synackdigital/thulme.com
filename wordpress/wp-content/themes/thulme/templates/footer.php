<footer class="content-info" role="contentinfo">

  <?php include_once( ABSPATH . 'wp-admin/includes/plugin.php' ); ?>
  <?php if ( is_plugin_active('twitter-widget-pro/wp-twitter-widget.php') ) : ?>
  <section class="twitter-feed">
    <?php the_widget(
      'WP_Widget_Twitter_Pro',
      array(
        'title' => '<span class="icon-twitter" aria-hidden="true"></span> <a href="https://twitter.com/thulme">thulme tweets</a>'
      )
    ); ?>
  </section>
  <section class="social-buttons">
    <a href="https://plus.google.com/117088670109765988183/" class="btn btn-small btn-social-googleplus" target="_blank">
      <i class="fui-googleplus"></i>
      Connect with Google
    </a>
    <a href="https://twitter.com/thulme" class="btn btn-small btn-social-twitter" target="_blank">
      <i class="fui-twitter"></i>
      Connect with Twitter
    </a>
    <a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php bloginfo('url') ?>&title=<?php bloginfo('name') ?>&summary=<?php bloginfo('description') ?>" class="btn btn-small btn-social-linkedin" target="_blank">
      <i class="fui-linkedin"></i>
      Share
      <span class="btn-tip"></span>
    </a>
  </section>
  <?php endif; ?>

</footer>


<script type="text/javascript" src="http://platform.linkedin.com/in.js">
    api_key:  gis5y1iugtrv
    onLoad:   INCallback
</script>

<?php wp_footer(); ?>
