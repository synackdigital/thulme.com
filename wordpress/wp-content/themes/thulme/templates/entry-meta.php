<span class="label label-primary"><time class="updated" datetime="<?php echo get_the_time('c'); ?>" pubdate><?php echo get_the_date(); ?></time></span>

<div class="social iconbar iconbar-info">
  <ul>
    <li><a href="http://www.facebook.com/sharer.php?u=<?php echo get_permalink(); ?>" title="Share on Facebook" class="fui-facebook" target="_blank" rel="nofollow"></a></li>
    <li><a href="http://twitter.com/share?text=<?php echo get_the_title(); ?>&via=thulme&url=<?php echo get_permalink(); ?>" title="Share on Twitter" class="fui-twitter" target="_blank" rel="nofollow"></a></li>
    <li><a href="https://plus.google.com/share?url=<?php echo get_permalink(); ?>" title="Share on Google+" class="fui-googleplus" target="_blank" rel="nofollow"></a></li>
    <li><a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_permalink(); ?>&title=<?php echo get_the_title(); ?>&summary=<?php echo get_the_excerpt(); ?>&source=<?php bloginfo('name'); ?>" title="Share on LinkedIn" class="fui-linkedin" target="_blank" rel="nofollow"></a></li>
    <li><a href="<?php echo thulme_post_mailto_url(); ?>" title="Email link" class="fui-mail" target="_blank" rel="nofollow"></a></li>
  </ul>
</div>
