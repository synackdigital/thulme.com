<div class="page-header">
  <h1>
    <?php echo roots_title(); ?>
  </h1>
  <?php
    if ( is_archive() ) :
      $category = get_the_category();
      echo '<p>'.$category[0]->description.'</p>';
    endif;
    ?>
</div>