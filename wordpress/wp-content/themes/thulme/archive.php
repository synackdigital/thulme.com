<?php get_template_part('templates/page', 'header'); ?>

<?php if (!have_posts()) : ?>
  <div class="alert">
    <?php _e('Sorry, no results were found.', 'roots'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <?php if ( has_post_format( 'link' )) : ?>
        <span class="entry-icon icon-calendar-empty"></span>
      <?php elseif ( has_post_format( 'audio' )) : ?>
        <span class="entry-icon icon-volume-up"></span>
      <?php elseif ( has_post_format( 'video' )) : ?>
        <span class="entry-icon icon-youtube-play"></span>
      <?php else: ?>
        <span class="entry-icon icon-pencil"></span>
      <?php endif; ?>
      <a href="<?php the_permalink(); ?>">
        <h2 class="entry-title"><?php the_title(); ?></h2>
        <?php get_template_part('templates/entry-meta'); ?>
      </a>
    </header>
  </article>
<?php endwhile; ?>

<?php if ($wp_query->max_num_pages > 1) : ?>
  <nav class="post-nav">
    <ul class="pager">
      <li class="previous"><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></li>
      <li class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></li>
    </ul>
  </nav>
<?php endif; ?>
