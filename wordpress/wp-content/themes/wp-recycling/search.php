<?php get_header(); ?>
  <div class="article-container col-lg-8 col-md-8">

    <h1 class="search-title inner-title"><?php echo sprintf( __( '%s Search Results for ', 'wpeasy' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>
    <?php get_template_part('loop'); ?>
    <?php get_template_part('pagination'); ?>

  </div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
