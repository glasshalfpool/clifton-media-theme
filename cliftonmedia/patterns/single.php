<?php
/**
 * Title: single
 * Slug: cliftonmedia/single
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header","className":"site-header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|large"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:0;padding-top:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--large)"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"75%"} -->
<div class="wp-block-column" style="flex-basis:75%"><!-- wp:group {"tagName":"header","style":{"spacing":{"blockGap":"10px"}},"className":"entry-header","layout":{"type":"constrained","justifyContent":"left"}} -->
<header class="wp-block-group entry-header"><!-- wp:post-terms {"term":"category","fontSize":"x-small"} /-->

<!-- wp:post-title {"level":1,"align":"wide"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"5px","margin":{"bottom":"30px"}},"typography":{"fontSize":"18px"}},"className":"post-meta","layout":{"type":"flex"}} -->
<div class="wp-block-group post-meta" style="margin-bottom:30px;font-size:18px"><!-- wp:post-author-name {"isLink":true} /-->

<!-- wp:paragraph -->
<p>·</p>
<!-- /wp:paragraph -->

<!-- wp:post-date /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"aspectRatio":"16/9","align":"wide"} /--></header>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"stretch","width":"25%","className":"min-width-300px"} -->
<div class="wp-block-column is-vertically-aligned-stretch min-width-300px" style="flex-basis:25%"><!-- wp:create-block/ad-block-billboard-mpu {"adType":"ad-type-mpu-only","style":{"position":{"type":"sticky","top":"0px"}}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"var:preset|spacing|medium"} -->
<div style="height:var(--wp--preset--spacing--medium)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:spacer {"height":"var:preset|spacing|medium"} -->
<div style="height:var(--wp--preset--spacing--medium)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"75%"} -->
<div class="wp-block-column" style="flex-basis:75%"><!-- wp:group {"tagName":"article","layout":{"type":"constrained"}} -->
<article class="wp-block-group"><!-- wp:post-content {"align":"wide","layout":{"type":"default"}} /-->

<!-- wp:group {"tagName":"footer","align":"wide","style":{"spacing":{"blockGap":"0px"}},"className":"entry-footer","layout":{"type":"default"},"fontSize":"small"} -->
<footer class="wp-block-group alignwide entry-footer has-small-font-size"><!-- wp:post-terms {"term":"category","prefix":"In: "} /-->

<!-- wp:post-terms {"term":"post_tag","prefix":"Tags: "} /--></footer>
<!-- /wp:group --></article>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%","className":"min-width-300px"} -->
<div class="wp-block-column min-width-300px" style="flex-basis:25%"><!-- wp:create-block/ad-block-billboard-mpu {"adType":"ad-type-hpu-to-mpu","align":"right","style":{"position":{"type":"sticky","top":"0px"}}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"var:preset|spacing|medium"} -->
<div style="height:var(--wp--preset--spacing--medium)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:create-block/ad-block-billboard-mpu {"adType":"ad-type-billboard-to-mpu","align":"wide"} /-->

<!-- wp:spacer {"height":"var:preset|spacing|medium"} -->
<div style="height:var(--wp--preset--spacing--medium)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query {"queryId":4,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]},"className":"alignwide query-loop-overlap-block"} -->
<div class="wp-block-query alignwide query-loop-overlap-block"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"className":"related","layout":{"type":"grid","columnCount":3},"fontSize":"small"} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small","margin":{"top":"30px"}}},"className":"blog-content"} -->
<div class="wp-block-group blog-content" style="margin-top:30px"><!-- wp:post-title {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"small"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"5px","margin":{"top":"10px"}}},"layout":{"type":"flex"},"fontSize":"x-small"} -->
<div class="wp-block-group has-x-small-font-size" style="margin-top:10px"><!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:heading {"align":"wide","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"large"} -->
<h2 class="wp-block-heading alignwide has-large-font-size" style="font-style:normal;font-weight:700">*Replace with list of Trending Articles*</h2>
<!-- /wp:heading -->

<!-- wp:separator {"align":"wide","className":"is-style-wide"} -->
<hr class="wp-block-separator alignwide has-alpha-channel-opacity is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:columns {"metadata":{"name":"List of posts with HPU"},"align":"wide"} -->
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

<!-- wp:column {"width":"25%","style":{"spacing":{"blockGap":"0","padding":{"right":"0","left":"0"}}},"className":"min-width-300px","layout":{"type":"default"}} -->
<div class="wp-block-column min-width-300px" style="padding-right:0;padding-left:0;flex-basis:25%"><!-- wp:create-block/ad-block-billboard-mpu {"adType":"ad-type-hpu-to-mpu","align":"right","style":{"position":{"type":"sticky","top":"0px"}}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->

<!-- wp:create-block/ad-block-billboard-mpu {"adType":"ad-type-billboard-to-mpu","align":"wide"} /-->

<!-- wp:spacer {"height":"var:preset|spacing|medium"} -->
<div style="height:var(--wp--preset--spacing--medium)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/IFA-Talk-backgrond-image.jpg","dimRatio":50,"isUserOverlayColor":true,"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignwide"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background " alt="" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/IFA-Talk-backgrond-image.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size">Podcast banner to go here</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","className":"site-footer"} /-->