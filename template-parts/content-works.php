<div class="container works-term-container">
  <div class="img-box">
    <?php the_post_thumbnail('archive'); ?>
  </div>
  <div class="content-box">
    <h3><?php the_title(); ?></h3>
    <p>
      <?php echo get_the_excerpt(); ?>
    </p>
    <a class="works-term-link" href="<?php the_permalink(); ?>"><?php the_title(); ?>の実績ページへ</a>
  </div>
</div>