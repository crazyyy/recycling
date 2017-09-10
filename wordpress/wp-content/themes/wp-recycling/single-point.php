<?php get_header(); ?>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class('col-lg-8 col-md-8'); ?>>

      <h1 class="single-title inner-title"><?php the_title(); ?></h1>

      <?php the_yandex_map('location') ?>

      <h3 class="single-title--subs">Контакты</h3>

      <div class="types-contacts">

        <?php if(get_field('address')){ ?>
          <p class="sinle--address"><span>Адрес:</span> <?php the_field('address'); ?></p>
        <?php } ?>
        <?php if(get_field('site')){ ?>
          <p class="sinle--site"><span>Сайт:</span> <?php the_field('site'); ?></p>
        <?php } ?>
        <?php if(get_field('worktime')){ ?>
          <p class="sinle--worktime"><span>Режим работы:</span> <?php the_field('worktime'); ?></p>
        <?php } ?>
        <?php if(get_field('email')){ ?>
          <p class="sinle--email"><span>Почта:</span> <?php the_field('email'); ?></p>
        <?php } ?>
        <?php if(get_field('phone')){ ?>
          <p class="sinle--phone"><span>Тел:</span> <?php the_field('phone'); ?></p>
        <?php } ?>
      </div><!-- /.types-contacts -->

      <?php if( have_rows('typesandprices') ): ?>
        <h3 class="single-title--subs">Список услуг</h3>
        <table class="prices-list">
          <?php $i = 1; while ( have_rows('typesandprices') ) : the_row(); ?>
            <tr>
              <td>
                <?php $term = get_sub_field('type'); ?>
                <span><?php echo $i; ?></span><?php echo $term->name; ?>
              </td>
              <td>
                <?php $price = intval(get_sub_field('price')); echo number_format($price,0,","," ");  ?> руб.
              </td>
            </tr>
          <?php $i++; endwhile; ?>
        </table>
      <?php endif; ?>

      <?php the_content(); ?>

      <?php edit_post_link(); ?>

    </article>

  <?php endwhile; endif; ?>

  <?php get_sidebar(); ?>

<?php get_footer(); ?>
