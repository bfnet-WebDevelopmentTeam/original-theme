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
      $tax_name = 'works_cat';
      $term_slug = 'web-production';
      $term_parent = get_terms($tax_name, array(
        'slug' => $term_slug,
      ));
      $term_child = get_terms($tax_name, array(
        'parent' => $term_parent[0]->term_id,
      ));

      if (!empty($term_child)) :
        foreach ($term_child as $term) :
      ?>
          <div class="container works-term-container">
            <h3 class="works-term-heading"><?php echo $term->name; ?></h3>
            <?php
            $args = array(
              'post_type' => 'register_works',
              'posts_per_page' => 4,
            );
            $the_query = new WP_Query($args);
            if ($the_query->have_posts()) :
              while ($the_query->have_posts()) : $the_query->the_post();
                get_template_part('template-parts/content-loop-works');
              endwhile;
            endif;
            ?>
            <a class="works-term-link" href="<?php echo get_term_link($term); ?>"><?php echo $term->name; ?>の一覧ページへ</a>
          </div>
      <?php
        endforeach;
      endif;
      ?>
    </div>
  </div>
</main>
<?php get_footer(); ?>