<?php get_header(); ?>
<div class="fv">
  <p>実績</p>
</div>
<?php get_template_part('template-parts/breadcrumbs'); ?>
</div>
<main>
  <div class="inner">
    <div class="container works-container">
      <h2 class="section-title"><?php single_term_title(); ?>実績</h2>
      <?php
      $parent_term = get_queried_object();
      $child_terms = get_terms(array(
        'taxonomy' => 'works_cat',
        'parent' => $parent_term->term_id,
        'hide_empty' => false,
      ));
      foreach ($child_terms as $term) :
      ?>
        <div class="container works-term-container">
          <h3 class="works-term-heading"><?php echo $term->name; ?></h3>
          <?php
          $args = array(
            'post_type' => 'register_works',
            'tax_query' => array(
              array(
                'taxonomy' => 'works_cat',
                'field' => 'term_id',
                'terms' => $term->term_id,
              ),
            ),
            'posts_per_page' => 4,
          );
          $query = new WP_Query($args);
          if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
              get_template_part('template-parts/content-loop-works');
            endwhile;
          endif;
          wp_reset_postdata();
          ?>
          <a class="works-term-link" href="<?php echo get_term_link($term); ?>"><?php echo $term->name; ?>の一覧ページへ</a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</main>
<?php get_footer(); ?>