<?php
  $category_open_design = get_category_by_slug('open-design');
  $category_startup_tools = get_category_by_slug('startup-tools');
  $category_weiji = get_category_by_slug('weiji');
?>

<div class="grid-container">
  <?php // Open Design posts
    query_posts('category_name=open-design&posts_per_page=10');
    if (have_posts()) : ?>
  <section class="category category-open-design">
    <h2 class="category-name"><a href="<?php echo get_category_link( $category_open_design->term_id ); ?>" title="Show all posts in <?php echo $category_open_design->name; ?>"><?php echo $category_open_design->name; ?></a></h2>
    <p class="category-description"><small><?php echo $category_open_design->description; ?></small></p>
    <ul class="unstyled document">
      <?php while (have_posts()) : the_post(); ?>
      <li class="hentry">
        <?php if ( has_post_format( 'video' )) : ?>
          <span class="entry-icon icon-youtube-play"></span>
        <?php else: ?>
          <span class="entry-icon icon-pencil"></span>
        <?php endif; ?>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </li>
      <?php endwhile; ?>
    </ul>
  </section>
  <?php endif; ?>

  <?php // Startup Tools posts
    query_posts('category_name=startup-tools&posts_per_page=10');
    if (have_posts()) : ?>
  <section class="category category-startup-tools">
    <h2 class="category-name"><a href="<?php echo get_category_link( $category_startup_tools->term_id ); ?>" title="Show all posts in <?php echo $category_startup_tools->name; ?>"><?php echo $category_startup_tools->name; ?></a></h2>
    <p class="category-description"><small><?php echo $category_startup_tools->description; ?></small></p>
    <ul class="unstyled document">
      <?php while (have_posts()) : the_post(); ?>
      <li class="hentry">
        <?php if ( has_post_format( 'video' )) : ?>
          <span class="entry-icon icon-youtube-play"></span>
        <?php else: ?>
          <span class="entry-icon icon-pencil"></span>
        <?php endif; ?>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </li>
      <?php endwhile; ?>
    </ul>
  </section>
  <?php endif; ?>

  <?php // Weiji posts
    query_posts('category_name=weiji&posts_per_page=5');
    if (have_posts()) : ?>
  <section class="category category-weiji">
    <h2 class="category-name"><a href="<?php echo get_category_link( $category_weiji->term_id ); ?>" title="Show all posts in <?php echo $category_weiji->name; ?>"><?php echo $category_weiji->name; ?></a></h2>
    <p class="category-description"><small><?php echo $category_weiji->description; ?></small></p>
    <ul class="unstyled document">
      <?php while (have_posts()) : the_post(); ?>
      <li class="hentry">
        <?php if ( has_post_format( 'video' )) : ?>
          <span class="entry-icon icon-youtube-play"></span>
        <?php else: ?>
          <span class="entry-icon icon-pencil"></span>
        <?php endif; ?>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </li>
      <?php endwhile; ?>
    </ul>
  </section>
  <?php endif; ?>
</div>
