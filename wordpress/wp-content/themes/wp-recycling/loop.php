<?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class('looper'); ?>>
    <div class="row">

      <a rel="nofollow" class="feature-img col-lg-5 col-md-5" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
        <?php if ( has_post_thumbnail()) { ?>
          <img src="<?php echo the_post_thumbnail_url('medium'); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
        <?php } else { ?>
          <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
        <?php } ?>
      </a><!-- /post thumbnail -->

      <div class="looper--descr col-lg-7 col-md-7">
        <h2 class="looper-title">
          <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
        </h2><!-- /post title -->
        <?php wpeExcerpt('wpeExcerpt40'); ?>
      </div><!-- /.looper--descr -->

    </div>
  </div><!-- /looper -->
<?php endwhile; endif; ?>

