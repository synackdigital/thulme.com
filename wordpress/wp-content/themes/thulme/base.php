<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 7]><div class="alert">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</div><![endif]-->

  <?php
    do_action('get_header');
    // Use Bootstrap's navbar if enabled in config.php
    if (current_theme_supports('bootstrap-top-navbar')) {
      get_template_part('templates/header-top-navbar');
    } else {
      get_template_part('templates/header');
    }
  ?>

  <div class="document" role="document">

    <?php if( is_single() ) : ?>
    <div class="page-header">
      <?php
        $category = get_the_category();
        echo '<h1><a href="'.get_category_link( $category[0]->term_id ).'" title="'.$category[0]->name.'">'.$category[0]->name.'</a></h1>';
        echo '<p>'.$category[0]->description.'</p>';
      ?>
    </div>
    <?php endif; ?>

    <div class="content">

      <div class="main <?php echo roots_main_class(); ?>" role="main">
        <?php include roots_template_path(); ?>
      </div><!-- /.main -->

      <?php if (roots_display_sidebar()) : ?>
      <aside class="sidebar <?php echo roots_sidebar_class(); ?>" role="complementary">
        <?php include roots_sidebar_path(); ?>
      </aside><!-- /.sidebar -->
      <?php endif; ?>

    </div><!-- /.content -->

    <?php if ( is_single() ) : ?>
    <div class="social">
      <div class="iconbar iconbar-info">
        <ul>
          <li><a href="http://www.facebook.com/sharer.php?u=<?php echo get_permalink(); ?>" title="Share on Facebook" class="fui-facebook" target="_blank" rel="nofollow"></a></li>
          <li><a href="http://twitter.com/share?text=<?php echo get_the_title(); ?>&via=thulme&url=<?php echo get_permalink(); ?>" title="Share on Twitter" class="fui-twitter" target="_blank" rel="nofollow"></a></li>
          <li><a href="https://plus.google.com/share?url=<?php echo get_permalink(); ?>" title="Share on Google+" class="fui-googleplus" target="_blank" rel="nofollow"></a></li>
          <li><a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_permalink(); ?>&title=<?php echo get_the_title(); ?>&summary=<?php echo strip_tags(get_the_excerpt()); ?>&source=<?php bloginfo('name'); ?>" title="Share on LinkedIn" class="fui-linkedin" target="_blank" rel="nofollow"></a></li>
          <li><a href="<?php echo thulme_post_mailto_url(); ?>" title="Email link" class="fui-mail" target="_blank" rel="nofollow"></a></li>
        </ul>
      </div>
    </div>
    <?php endif; ?>

  </div><!-- /.document -->

  <?php get_template_part('templates/footer'); ?>

</body>
</html>
