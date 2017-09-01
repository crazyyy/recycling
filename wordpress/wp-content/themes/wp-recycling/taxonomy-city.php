<?php get_header(); ?>


  <div class="article-container article-container--tax col-lg-8 col-md-8">
    <?php $city = get_queried_object(); $term_id = $city->term_id; ?>
    <h1 class="page-title inner-title"><span>Пункты приема</span> в <?php the_field('title', $city); ?></h1>

    <?php the_yandex_map('places', $city) ?>

    <button class="btn btn-orange header-btn__add"><i class="ico ico-circle-plus">+</i>Добавить организацию</button>
<br>
<br>
<br>
<br>
<br>
<hr>


   <?php


$args = array(
    'tax_query' => array(
        'relation' => 'AND',
        array(
            'taxonomy' => 'city',
            'field' => 'slug',
            'terms' => array( 'klimovsk' )
        ),
        array(
            'taxonomy' => 'point',
            'field' => 'slug',
            'terms' => array( 'metallolom', 'makulatura' ),
            'operator' => 'NOT IN'
        )
    )
);



       query_posts( $args );

        while (have_posts()) : the_post();?>

         ?>

            <li>
              <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
              <?php wpeExcerpt('wpeExcerpt20'); ?>
            </li>
      <?php endwhile; wp_reset_query(); ?>

<hr>
<br>
<br>
<br>
<br>
<br>
    <article>
      <?php the_field('description', $city); ?>
    </article>
  </div>



  <?php get_sidebar(); ?>

<?php get_footer(); ?>
