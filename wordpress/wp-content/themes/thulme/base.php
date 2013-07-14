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

    <div class="content">

      <div class="main <?php echo roots_main_class(); ?>" role="main">

        <?php if( is_single() ) : ?>
        <div class="page-header">
          <?php
            $category = get_the_category();
            echo '<h1><a href="'.get_category_link( $category[0]->term_id ).'" title="'.$category[0]->name.'">'.$category[0]->name.'</a></h1>';
            echo '<p>'.$category[0]->description.'</p>';
          ?>
        </div>
        <?php endif; ?>

        <?php include roots_template_path(); ?>

      </div><!-- /.main -->

    </div><!-- /.content -->

    <?php if ( is_single() )
      comments_template('/templates/comments.php'); ?>

  </div><!-- /.document -->

  <?php get_template_part('templates/footer'); ?>

</body>
</html>
