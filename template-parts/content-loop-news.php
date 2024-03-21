<ul>
    <li>
        <a href="<?php the_permalink(); ?>">
            <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y-m-d'); ?></time>
            <div class="news-box-content">
                <p class="news-title"><?php the_title(); ?></p>
                <p class="news-text">
                    <?php the_excerpt(); ?>
                </p>
            </div>
        </a>
    </li>
</ul>