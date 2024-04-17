<?php get_header(); ?>

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
    <?php get_template_part('template-parts/page-navi'); ?>
  </div>
</main>
<?php get_footer(); ?>