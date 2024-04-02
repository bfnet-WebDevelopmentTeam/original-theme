<div class="container works-term-container">
  <div class="img-box">
    <img src="<?php echo get_template_directory_uri(); ?>/imgs/web01.jpg" />
  </div>
  <div class="content-box">
    <h3><?php echo $term->name; ?></h3>
    <p>
      実績の説明文。実績の説明文。実績の説明文。実績の説明文。実績の説明文。実績の説明文。
    </p>
    <a class="works-term-link" href="<?php echo get_term_link($term); ?>"><?php echo $term->name; ?>の実績ページへ</a>
  </div>
</div>