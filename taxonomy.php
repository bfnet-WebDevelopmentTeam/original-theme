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
      $works_cat = get_terms(array(
        'taxonomy' => 'works_cat',
        'include' => "web-production", "video-production", "sns",
        'orderby' => 'slug',
        'order' => 'DESC'
      ));
      if (!empty($works_cat)) :
        foreach ($works_cat as $cat) :
      ?>
          <div class="container works-term-container">
            <h3 class="works-term-heading"><?php echo $cat->name; ?></h3>
           <?php get_template_part('template-parts/content-loop-works'); ?>
            <a class="works-term-link" href="<?php echo get_term_link($cat); ?>"><?php echo $cat->name; ?>の一覧ページへ</a>
          </div>
      <?php
        endforeach;
      endif;
      ?>
    </div>
  </div>
</main>
<?php get_footer(); ?>