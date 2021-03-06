<?php
/**
 * Register the block patterns and block patterns categories
 *
 * @package WordPress
 * @since 5.5.0
 */

$core_block_patterns = array(
	'text-two-columns',
	'two-buttons',
	'two-images',
	'text-two-columns-with-images',
	'text-three-columns-buttons',
	'large-header',
	'large-header-paragraph',
	'three-buttons',
	'quote',
);

foreach ( $core_block_patterns as $core_block_pattern ) {
	register_block_pattern(
		'core/' . $core_block_pattern,
		require __DIR__ . '/block-patterns/' . $core_block_pattern . '.php'
	);
}

register_block_pattern_category( 'buttons', array( 'label' => _x( 'Buttons', 'Block pattern category', 'gutenberg' ) ) );
register_block_pattern_category( 'columns', array( 'label' => _x( 'Columns', 'Block pattern category', 'gutenberg' ) ) );
register_block_pattern_category( 'gallery', array( 'label' => _x( 'Gallery', 'Block pattern category', 'gutenberg' ) ) );
register_block_pattern_category( 'header', array( 'label' => _x( 'Headers', 'Block pattern category', 'gutenberg' ) ) );
register_block_pattern_category( 'text', array( 'label' => _x( 'Text', 'Block pattern category', 'gutenberg' ) ) );
