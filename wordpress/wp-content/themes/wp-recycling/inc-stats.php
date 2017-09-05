<div class="stats-block">

  <?php $terms = get_terms( 'type' ); if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){ foreach ( $terms as $term ) { ?>

    <?php $image = get_field('ico', $term); $href = get_term_link($term); ?>
    <div class="stats-block--item" style="background-image: url(<?php echo $image['url']; ?>);">
      <a href="<?php echo $href ; ?>" class="stats-block--href"><?php echo $term->name; ?></a>
      <span class="stats-block--count"><?php echo $term->count; ?></span>
    </div><!-- stats-block--item -->

  <?php } } ?>

</div><!-- stats-block -->
