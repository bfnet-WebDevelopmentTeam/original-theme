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
<?php if (function_exists('wp_pagenavi')) {
    wp_pagenavi();
} ?>