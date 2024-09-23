<?php
/**
 * Title: Sample home page.
 * Slug: cliftonmedia/page-home-mvpro
 * Categories: page
 */
?>

<!-- wp:group {"metadata":{"name":"Blog Header","categories":["posts"],"patternName":"cliftonmedia/posts-cover-image"},"align":"wide","layout":{"type":"default"}} -->
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

<!-- wp:spacer {"height":"var:preset|spacing|medium"} -->
<div style="height:var(--wp--preset--spacing--medium)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:create-block/ad-block-billboard-mpu {"adType":"ad-type-mpu-only","align":"wide"} /-->

<!-- wp:spacer {"height":"var:preset|spacing|medium"} -->
<div style="height:var(--wp--preset--spacing--medium)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}},"border":{"style":"dashed"}},"borderColor":"dark","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-border-color has-dark-border-color" style="border-style:dashed;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center">Latest Issue of MVPro Magazine</h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":21,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"category":[29]},"parents":[]},"metadata":{"categories":["posts"],"patternName":"cliftonmedia/posts-grid","name":"Grid of posts in three columns."},"className":"alignwide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"default"}} -->
<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small","margin":{"top":"30px"}}}} -->
<div class="wp-block-group" style="margin-top:30px"><!-- wp:post-title {"isLink":true,"fontSize":"large"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"5px","margin":{"top":"10px"}}},"fontSize":"x-small","layout":{"type":"flex"}} -->
<div class="wp-block-group has-x-small-font-size" style="margin-top:10px"><!-- wp:post-date /-->

<!-- wp:paragraph -->
<p>·</p>
<!-- /wp:paragraph -->

<!-- wp:post-author-name {"isLink":true} /--></div>
<!-- /wp:group -->

<!-- wp:post-excerpt {"moreText":"Read More →","excerptLength":20,"fontSize":"small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|medium"} -->
<div style="height:var(--wp--preset--spacing--medium)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:create-block/ad-block-billboard-mpu {"adType":"ad-type-billboard-to-mpu","align":"wide"} /-->

<!-- wp:spacer {"height":"var:preset|spacing|medium"} -->
<div style="height:var(--wp--preset--spacing--medium)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center">Latest Top Stories</h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"var:preset|spacing|x-small"} -->
<div style="height:var(--wp--preset--spacing--x-small)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"metadata":{"name":"List of posts with HPU","categories":["featured"],"patternName":"cliftonmedia/blog-list"},"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"75%"} -->
<div class="wp-block-column" style="flex-basis:75%"><!-- wp:query {"queryId":7,"query":{"perPage":"10","pages":0,"offset":"5","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]},"className":"alignwide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"default","columnCount":3}} -->
<!-- wp:columns {"isStackedOnMobile":false} -->
<div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:post-featured-image /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"75%","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}}} -->
<div class="wp-block-column" style="flex-basis:75%"><!-- wp:post-title {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"large"} /-->

<!-- wp:post-excerpt {"showMoreOnNewLine":false,"excerptLength":22,"fontSize":"x-small"} /-->

<!-- wp:post-terms {"term":"category","fontSize":"x-small"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%","className":"min-width-300px","style":{"spacing":{"blockGap":"0","padding":{"right":"0","left":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-column min-width-300px" style="padding-right:0;padding-left:0;flex-basis:25%"><!-- wp:create-block/ad-block-billboard-mpu {"adType":"ad-type-hpu-to-mpu","align":"right","style":{"position":{"type":"sticky","top":"0px"}}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"var:preset|spacing|medium"} -->
<div style="height:var(--wp--preset--spacing--medium)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"full","backgroundColor":"dark","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-dark-background-color has-background"><!-- wp:spacer {"height":"var:preset|spacing|medium"} -->
<div style="height:var(--wp--preset--spacing--medium)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
<h2 class="wp-block-heading has-text-align-center has-base-color has-text-color has-link-color">Latest videos from MVPro Media</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
<p class="has-text-align-center has-base-color has-text-color has-link-color">Watch the latest interviews and product showcases from events across the world.</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"var:preset|spacing|x-small"} -->
<div style="height:var(--wp--preset--spacing--x-small)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query {"queryId":9,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"category":[377]},"parents":[]},"metadata":{"categories":["posts"],"patternName":"cliftonmedia/posts-grid","name":"Grid of posts in three columns."},"className":"alignwide","layout":{"type":"constrained"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small","margin":{"top":"30px"}}}} -->
<div class="wp-block-group" style="margin-top:30px"><!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"small"} /-->

<!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"x-small"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:spacer {"height":"var:preset|spacing|small"} -->
<div style="height:var(--wp--preset--spacing--small)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/category/videos/">Explore Videos </a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:spacer {"height":"var:preset|spacing|large"} -->
<div style="height:var(--wp--preset--spacing--large)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|medium"} -->
<div style="height:var(--wp--preset--spacing--medium)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center">*Replace with Trending Articles*</h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"var:preset|spacing|small"} -->
<div style="height:var(--wp--preset--spacing--small)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"metadata":{"name":"List of posts with HPU","categories":["featured"],"patternName":"cliftonmedia/blog-list"},"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"75%"} -->
<div class="wp-block-column" style="flex-basis:75%"><!-- wp:query {"queryId":7,"query":{"perPage":"10","pages":0,"offset":"7","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]},"className":"alignwide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"default","columnCount":3}} -->
<!-- wp:columns {"isStackedOnMobile":false} -->
<div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:post-featured-image /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"75%","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}}} -->
<div class="wp-block-column" style="flex-basis:75%"><!-- wp:post-title {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"large"} /-->

<!-- wp:post-excerpt {"showMoreOnNewLine":false,"excerptLength":22,"fontSize":"x-small"} /-->

<!-- wp:post-terms {"term":"category","fontSize":"x-small"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%","className":"min-width-300px","style":{"spacing":{"blockGap":"0","padding":{"right":"0","left":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-column min-width-300px" style="padding-right:0;padding-left:0;flex-basis:25%"><!-- wp:create-block/ad-block-billboard-mpu {"adType":"ad-type-hpu-to-mpu","align":"right","style":{"position":{"type":"sticky","top":"0px"}}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"var:preset|spacing|medium"} -->
<div style="height:var(--wp--preset--spacing--medium)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Sign up to the MVPro Newsletter</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Subscribe to the MVPro Newsletter for the latest industry news and insight.</p>
<!-- /wp:paragraph -->

<!-- wp:ninja-forms/form {"formID":1,"formTitle":"Newsletter Signup"} /-->