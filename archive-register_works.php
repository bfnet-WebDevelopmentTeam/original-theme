<?php get_header(); ?>
<main>
  <div class="inner">
    <div class="container works-container">
      <h2 class="section-title">実績</h2>
      <?php
      $works_cat = get_terms(array('taxonomy' => 'works_cat', 'include' => "web-production", "video-production", "sns", 'parent' => 0, 'orderby' => 'slug', 'order' => 'DESC'));
      if (!empty($works_cat)) : ?>
        <?php foreach ($works_cat as $cat) : ?>
          <div class="container works-term-container">
            <h3 class="works-term-heading"><?php echo $cat->name; ?></h3>
            <?php
            $args = array(
              'post_type' => 'register_works',
              'posts_per_page' => 4,
            );
            $taxquerysp = array('relation' => 'AND');
            $taxquerysp[] = array(
              'taxonomy' => 'works_cat',
              'terms' => $cat->slug,
              'field' => 'slug',
            );
            $args['tax_query'] = $taxquerysp;
            $the_query = new WP_Query($args);
            if ($the_query->have_posts()) :
              while ($the_query->have_posts()) : $the_query->the_post();
                get_template_part('template-parts/content-loop-works');
              endwhile;
            endif;
            ?>
            <a class="works-term-link" href="<?php echo get_term_link($cat); ?>"><?php echo $cat->name; ?>の一覧ページへ</a>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</main>
<?php get_footer(); ?>