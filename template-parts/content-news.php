<article id="post-<?php the_id(); ?>" <?php post_class('article'); ?>>
    <h1 class="title single-title"><?php the_title(); ?></h1>
    <div class="article-meta">
        <?php the_category(); ?>
        <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y-m-d'); ?></time>
    </div>

    <div class="content">
        <?php the_content(); ?>
    </div>

    <ul class="prev_next_list">
        <li class="prev">
            « <a href="パーマリンク" rel="prev">前の記事のタイトル</a>
        </li>
        <li class="next">
            <a href="パーマリンク" rel="next">次の記事のタイトル</a> »
        </li>
    </ul>
</article>