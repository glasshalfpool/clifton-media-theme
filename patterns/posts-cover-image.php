<?php
/**
 * Title: Header block of posts with background images
 * Slug: cliftonmedia/posts-cover-image
 * Categories: posts
 * Block Types: core/query
 */
?>

<!-- wp:group {"metadata":{"name":"Blog Header"},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"var:preset|spacing|x-small"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"60%","style":{"spacing":{"blockGap":"0","padding":{"bottom":"var:preset|spacing|x-small"}}}} -->
<div class="wp-block-column" style="padding-bottom:var(--wp--preset--spacing--x-small);flex-basis:60%"><!-- wp:query {"queryId":3,"query":{"perPage":"1","pages":0,"offset":"5","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"category":[]},"parents":[]},"className":"query-loop-cover-image query-loop-cover-image-large"} -->
<div class="wp-block-query query-loop-cover-image query-loop-cover-image-large"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"default","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","height":""} /-->

<!-- wp:group {"className":"blog-content"} -->
<div class="wp-block-group blog-content"><!-- wp:post-terms {"term":"category","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0"}}},"fontSize":"x-small"} /-->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"fontSize":"large"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:query {"queryId":3,"query":{"perPage":"4","pages":0,"offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"category":[]},"parents":[]},"className":"query-loop-cover-image"} -->
<div class="wp-block-query query-loop-cover-image"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":null}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","height":""} /-->

<!-- wp:group {"className":"blog-content"} -->
<div class="wp-block-group blog-content"><!-- wp:post-terms {"term":"category","style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}},"typography":{"fontSize":"10px"}}} /-->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->