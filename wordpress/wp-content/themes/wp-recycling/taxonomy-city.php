<?php get_header(); ?>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('col-lg-8 col-md-8'); ?>>

      <h1 class="single-title inner-title"><?php the_title(); ?></h1>

      <?php the_content(); ?>

      <?php edit_post_link(); ?>

      <?php comments_template(); ?>

      <?php subh_set_post_view( get_the_ID() ); ?>

    </article>
  <?php endwhile; endif; ?>

  <?php get_sidebar(); ?>

<?php get_footer(); ?>
