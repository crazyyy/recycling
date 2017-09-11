<aside class="sidebar col-lg-3 col-lg-push-1 col-md-3 col-md-push-1" role="complementary">

  <?php if ( is_active_sidebar('widgetarea1') ) : ?>
    <?php dynamic_sidebar( 'widgetarea1' ); ?>
  <?php else : ?>

    <!-- If you want display static widget content - write code here
		RU: Здесь код вывода того, что необходимо для статического контента виджетов -->

  <?php endif; ?>

  <div class="widget widget--usefull">
    <span class="widget--title">Полезные статьи</span>
    <ul>
      <?php
        $args = array(
          'orderby'      => 'meta_value',
          'meta_key'     => 'post_views_count',
          'order'        => 'DESC',
          'post_status'  => 'publish'
        );
        $ranking = 0;
      ?>
      <?php query_posts($args); ?>
        <?php if ( have_posts() ) : ?>
          <?php while ( have_posts()) : the_post();  $ranking++; ?>
            <li>
              <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
              <?php wpeExcerpt('wpeExcerpt20'); ?>
            </li>
      <?php endwhile; endif;  wp_reset_query(); ?>
    </ul>

  </div><!-- /.widget widget--usefull -->

</aside><!-- /sidebar -->
