<div class="page-header">
  <h1>
    <?php
    if ( is_tax( 'post_format' ) ) :
      echo post_format_get_plural_string( get_post_format() );
    else :
      echo roots_title();
    endif;
    ?>
  </h1>
  <?php
    if ( is_archive() &! is_tax( 'post_format' ) ) :
      $category = get_the_category();
      echo '<p>'.$category[0]->description.'</p>';
    endif;
    ?>
</div>