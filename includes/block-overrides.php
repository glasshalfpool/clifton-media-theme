<?php

/**
 * Implements block overrides as required.
 *
 */
require_once __DIR__ . '/block-override-functions.php';

/**
 * Here we include the blocks we want to override.
 *
 * Either comment out the ones that aren't needed any more - when Gutenberg/core's
 * satisfies the requirement
 * or find another way to automatically determine whether or not to include the file.
 */
//require_once __DIR__ . '/query-pagination.php';
//require_once __DIR__ . '/query-pagination-numbers.php';
//require_once __DIR__ . '/query-loop.php';
//require_once __DIR__ . '/post-excerpt.php';
//require_once __DIR__ . '/post-content.php';
require_once __DIR__ . '/post-template.php';
//require_once __DIR__ . '/template-part.php';

//require_once __DIR__ . '/navigation.php';
//require_once __DIR__ . '/navigation-link.php';
//require_once __DIR__ . '/post-hierarchical-terms.php';
//require_once __DIR__ . '/block.php';
//require_once __DIR__ . '/tag-cloud.php';

/**
 * Hook into register_block_types_args before WP_Block_Supports
 */
add_filter( 'register_block_type_args', 'thisis_register_block_type_args', 9 );

/**
 * Implements overrides for core blocks which we need to improve.
 *
 * @param array $args Block attributes.
 * @return array
 */
function thisis_register_block_type_args( $args ) {
	//$args = thisis_maybe_override_block(  $args,'core/query-pagination', 'render_block_core_query_pagination');
	//$args = thisis_maybe_override_block(  $args,'core/query-pagination-numbers', 'render_block_core_query_pagination_numbers');

	//$args = thisis_maybe_override_block(  $args,'core/query-loop', 'render_block_core_query_loop' );
	//$args = thisis_maybe_override_block(  $args,'core/post-excerpt', 'render_block_core_post_excerpt' );
	//$args = thisis_maybe_override_block(  $args,'core/post-content', 'render_block_core_post_content' );
	$args = thisis_maybe_override_block(  $args,'core/post-template', 'render_block_core_post_template' );
	//$args = thisis_maybe_override_block(  $args,'core/template-part', 'render_block_core_template_part' );

	//$args = thisis_maybe_override_block(  $args,'core/navigation', 'render_block_core_navigation' );
	//$args = thisis_maybe_override_block(  $args,'core/navigation-link', 'render_block_core_navigation_link' );
	//$args = thisis_maybe_override_block(  $args,'core/post-hierarchical-terms', 'render_block_core_post_hierarchical_terms' );
	//$args = thisis_maybe_override_block(  $args,'core/block', 'render_block_core_block' );
	//$args = thisis_maybe_override_block(  $args,'core/tag-cloud', 'render_block_core_tag_cloud' );
	return $args;
}