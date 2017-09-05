<?php get_header(); ?>

  <div class="article-container article-container--tax col-lg-8 col-md-8">
    <?php $city = get_queried_object(); $term_id = $city->term_id; ?>
    <h1 class="page-title inner-title"><span>Пункты приема</span> в <?php if (get_field('title', $city))  { the_field('title', $city); } else { echo $city->name; } ?></h1>

    <?php the_yandex_map('places', $city) ?>

    <button class="btn btn-orange header-btn__add"><i class="ico ico-circle-plus">+</i>Добавить организацию</button>

    <table class="city-listing">
      <?php
          $args = array(
            'post_type' => 'point',
              'tax_query' => array(
                array(
                  'taxonomy' => 'city',
                  'field' => 'slug',
                  'terms' => array( $city->slug )
                )
              )
          );
          query_posts( $args );
          while (have_posts()) : the_post();?>
          <tr>
            <td>
              <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
            </td>
            <td></td>
          </tr>

          <?php if( have_rows('typesandprices') ): ?>
            <?php while ( have_rows('typesandprices') ) : the_row(); ?>
              <tr class="prices">
                <td>
                  <?php $term = get_sub_field('type'); ?>
                  <?php echo $term->name; ?>
                </td>
                <td>
                  <?php $price = intval(get_sub_field('price')); echo number_format($price,0,",",".");  ?> руб.
                </td>
              </tr>
            <?php endwhile; ?>
          <?php endif; ?>

        <?php endwhile; wp_reset_query(); ?>
      </table>

    <article>
      <?php the_field('description', $city); ?>
    </article>

  </div>

  <?php get_sidebar(); ?>

<?php get_footer(); ?>
