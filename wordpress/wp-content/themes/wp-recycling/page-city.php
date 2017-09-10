<?php /* Template Name: City Page */ get_header(); ?>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('col-lg-8 col-md-8'); ?>>

      <h1 class="page-title inner-title"><?php the_title(); ?></h1>

      <?php the_yandex_map('places') ?>

      <?php
        $gobal_type = get_field('gobal_type');
        $gobal_type_slug = $gobal_type->slug;
      ?>

      <?php $posts = get_field('points'); if( $posts ): ?>
        <table class="pagecity-listing">
          <?php foreach( $posts as $p ): // variable must NOT be called $post (IMPORTANT) ?>
            <tr>
              <td>
                <h5><a href="<?php echo get_permalink( $p->ID ); ?>"><?php echo get_the_title( $p->ID ); ?></a></h5>
                <?php if(get_field('address', $p->ID )){ ?>
                  <span><?php the_field('address', $p->ID ); ?></span>
                <?php } ?>
                <?php if(get_field('description', $p->ID )){ ?>
                  <span><?php the_field('description', $p->ID ); ?></span>
                <?php } ?>
                <?php if(get_field('phone', $p->ID )){ ?>
                  <span><?php the_field('phone', $p->ID ); ?></span>
                <?php } ?>
              </td>
              <td>
                <?php if( have_rows('typesandprices', $p->ID) ): while ( have_rows('typesandprices', $p->ID) ) : the_row();
                $term = get_sub_field('type');
                if ( $gobal_type_slug == $term->slug) {
                  $price = intval(get_sub_field('price'));
                  echo number_format($price,0,",",".");  ?> руб.
                <?php } endwhile; endif; ?>
              </td>
            </tr>

          <?php endforeach; ?>
        </table>
      <?php endif; ?>

      <button class="btn btn-margin btn-orange header-btn__add"><i class="ico ico-circle-plus">+</i>Добавить организацию</button>

      <article>
        <?php the_content(); ?>
      </article>

      <?php edit_post_link(); ?>

    </article>
  <?php endwhile; endif; ?>

  <?php get_sidebar(); ?>

<?php get_footer(); ?>
