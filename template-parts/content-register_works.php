<article id="post-<?php the_id(); ?>" <?php post_class('article'); ?>>
    <h1 class="title single-title"><?php the_title(); ?></h1>
    <div class="article-meta">
        <?php the_category(); ?>
        <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y-m-d'); ?></time>
    </div>
    <div class="post-image">
    <?php if (has_post_thumbnail()) :
            the_post_thumbnail('content');
        else : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/imgs/no-image.jpg" alt="">
        <?php
        endif;
        ?>
    </div>
    <div class="content">
        <?php the_content(); ?>
    </div>

    <div class="custom-field">
        <dl>
            <?php if(get_field('business-scope')): ?>
            <dt>業務範囲: </dt>
            <dd><?php the_field('business-scope'); ?></dd>
            <?php endif; ?>
            <?php if(get_field('production-period')): ?>
            <dt>制作期間: </dt>
            <dd><?php the_field('production-period'); ?></dd>
            <?php endif; ?>
            <?php if (get_field('remarks')) : ?>
                <dt>備考: </dt>
                <dd><?php the_field('remarks'); ?></dd>
            <?php endif; ?>
            <?php if (get_field('url')) : ?>
                <dt>制作実績参考ページ: </dt>
                <dd><a href="<?php the_field('url'); ?>"><?php the_field('url'); ?></a></dd>
            <?php endif; ?>
        </dl>
    </div>

    <ul class="prev_next_list">
        <li class="prev">
            <?php previous_post_link(); ?>
        </li>
        <li class="next">
            <?php next_post_link(); ?>
        </li>
    </ul>
</article>