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
      <div class="container works-term-container">
        <?php
        if (have_posts()) :
          while (have_posts()) : the_post();
            get_template_part('template-parts/content-loop-works');
          endwhile;
        endif;
        ?>
      </div>
    </div>
    <div class="wp-pagenavi" role="navigation">
      <span aria-current="page" class="current">1</span>
      <a class="page larger" title="ページ 2" href="#">2</a>
      <a class="page larger" title="ページ 3" href="#">3</a>
      <a class="page larger" title="ページ 4" href="#">4</a>
      <a class="page larger" title="ページ 5" href="#">5</a>
      <span class="extend">...</span>
      <a class="larger page" title="ページ 10" href="#">10</a>
      <span class="extend">...</span>
      <a class="nextpostslink" rel="next" aria-label="次のページ" href="#">»</a>
      <a class="last" aria-label="Last Page" href="#">最後 »</a>
    </div>
  </div>
</main>
<?php get_footer(); ?>