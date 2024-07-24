<?php
/**
 * Title: Minimalised list of posts in three columns.
 * Slug: cliftonmedia/posts-minimal
 * Categories: posts
 * Block Types: core/query
 */
?>
<!-- wp:query {"queryId":6,"query":{"perPage":"3","pages":0,"offset":"4","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]},"metadata":{"name":"Query Loop - Minimal"},"className":"alignwide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small","margin":{"top":"0"}}}} -->
<div class="wp-block-group" style="margin-top:0"><!-- wp:post-title {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"fontSize":"small"} /-->

<!-- wp:post-terms {"term":"category","fontSize":"x-small"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->