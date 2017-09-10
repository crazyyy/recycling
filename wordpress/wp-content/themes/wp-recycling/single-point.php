<?php get_header(); ?>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class('col-lg-8 col-md-8'); ?>>

      <h1 class="single-title inner-title"><?php the_title(); ?></h1>
      <?php if(get_field('description')){ ?>
        <div class="sinle--short-descr">
          <?php the_field('description'); ?>
        </div><!-- /.short-descr -->
      <?php } ?>
      <?php if(get_field('phone')){ ?>
        <p class="sinle--phone">Тел: <?php the_field('phone'); ?></p>
      <?php } ?>
      <?php if(get_field('adress')){ ?>
        <p class="sinle--adress"><?php the_field('adress'); ?></p>
      <?php } ?>

      <?php the_content(); ?>

      <?php if( have_rows('typesandprices') ): ?>
        <table class="prices-list">
          <?php while ( have_rows('typesandprices') ) : the_row(); ?>
            <tr>
              <td>
                <?php $term = get_sub_field('type'); ?>
                <?php echo $term->name; ?>
              </td>
              <td>
                <?php $price = intval(get_sub_field('price')); echo number_format($price,0,","," ");  ?> руб.
              </td>
            </tr>
          <?php endwhile; ?>
        </table>
      <?php endif; ?>

      <?php the_yandex_map('location') ?>

      <?php edit_post_link(); ?>

    </article>

  <?php endwhile; endif; ?>

  <?php get_sidebar(); ?>

<?php get_footer(); ?>
