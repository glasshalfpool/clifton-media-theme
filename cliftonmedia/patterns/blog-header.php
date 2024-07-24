<?php
/**
 * Title: Top of page blog grid.
 * Slug: cliftonmedia/blog-header
 * Categories: featured
 */
?>

<!-- wp:group {"metadata":{"name":"Blog Header"},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:query {"queryId":3,"query":{"perPage":"1","pages":0,"offset":"5","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"category":[]},"parents":[]},"className":"query-loop-header-large query-loop-overlap-block"} -->
<div class="wp-block-query query-loop-header-large query-loop-overlap-block"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"default","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","height":""} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small","margin":{"top":"30px"}}},"className":"blog-content"} -->
<div class="wp-block-group blog-content" style="margin-top:30px"><!-- wp:post-title {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"large"} /-->

<!-- wp:post-terms {"term":"category","fontSize":"x-small"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:query {"queryId":7,"query":{"perPage":"3","pages":0,"offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]},"className":"alignwide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default","columnCount":3}} -->
<!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small"}}}} -->
<div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:post-featured-image {"aspectRatio":"4/3"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"75%","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:75%"><!-- wp:post-title {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"padding":{"top":"0","bottom":"0"}}},"fontSize":"small"} /-->

<!-- wp:post-terms {"term":"category","fontSize":"x-small"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->