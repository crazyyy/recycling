<?php /* Template Name: Type Page */ get_header(); ?>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('col-lg-8 col-md-8'); ?>>

      <h1 class="page-title inner-title"><span>Пункты приема</span> "<?php $type = get_field('type'); echo $type->name; ?>"</h1>

      <?php $cities = get_field('cities'); if( $cities ): ?>
        <ul class="cities-list">
          <?php foreach( $cities as $city ): ?>
            <li>
              <a href="<?php echo get_term_link( $city ); ?>"><?php echo $city->name; ?></a>
            </li>
          <?php endforeach; ?>
        </ul><!-- /.cities-list -->
      <?php endif; ?>

      <?php the_content(); ?>

      <?php edit_post_link(); ?>

    </article>
  <?php endwhile; endif; ?>

  <?php get_sidebar(); ?>

<?php get_footer(); ?>
