<?php
/**
 * Title: Trending Articles
 * Slug: cliftonmedia/trending
 * Categories: featured
 * Inserter: false
 */
?>

<!-- wp:group {"metadata":{"name":"Trending articles"},"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"align":"wide","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"large"} -->
<h2 class="wp-block-heading alignwide has-large-font-size" style="font-style:normal;font-weight:700">Trending Articles</h2>
<!-- /wp:heading -->

<!-- wp:separator {"align":"wide","className":"is-style-wide"} -->
<hr class="wp-block-separator alignwide has-alpha-channel-opacity is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:columns {"metadata":{"name":"List of posts with HPU"},"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"75%"} -->
<div class="wp-block-column" style="flex-basis:75%"><!-- wp:shortcode -->
[wpp post_html='<li><div class="wpp-thumb-url">{thumb}</div> <div class="trending-article-text"><h3>{title}</h3> <p class="wpp-category-text">{category}</p> <p class="wpp-excerpt">{excerpt}</p> </div> </li>' range='all' freshness='1' limit=10 thumbnail_width=300 thumbnail_height=200 order_by='views' excerpt_length=120 stats_category=1 stats_views=0]
<!-- /wp:shortcode --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%","style":{"spacing":{"blockGap":"0","padding":{"right":"0","left":"0"}}},"className":"min-width-300px","layout":{"type":"default"}} -->
<div class="wp-block-column min-width-300px" style="padding-right:0;padding-left:0;flex-basis:25%"><!-- wp:create-block/ad-block-billboard-mpu {"adType":"ad-type-hpu-to-mpu","align":"right","style":{"position":{"type":"sticky","top":"0px"}}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->