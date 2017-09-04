<?php get_header(); ?>

  <div class="article-container article-container--tax col-lg-8 col-md-8">
    <?php $type = get_queried_object(); $term_id = $type->term_id; ?>

    <h1 class="page-title inner-title"><span>Пункты приема</span> <?php echo $type->name; ?></h1>

    <?php the_yandex_map('places', $city) ?>

    <ul class="cities-list">
      <?php
          $args = array(
            'post_type' => 'point',
              'tax_query' => array(
                array(
                  'taxonomy' => 'type',
                  'field' => 'slug',
                  'terms' => array( $type->slug )
                )
              )
          );
          query_posts( $args );
          while (have_posts()) : the_post();?>
            <li>
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </li>
        <?php endwhile; wp_reset_query(); ?>

    </ul><!-- /.cities-list -->

    <article>
      <?php the_field('description', $city); ?>
    </article>

  </div>

  <?php get_sidebar(); ?>

<?php get_footer(); ?>
