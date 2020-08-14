<?php
/**
 * The main LifterLMS Script Asset Definition list
 *
 * This file returns an array of script asset definition arrays.
 *
 * The array key of each definition is the asset's "handle" which
 * is used by both LifterLMS and WordPress to identify the asset
 * during registration and enqueue.
 *
 * Each definition array must contain at least a "file_slug", the value
 * of this key is the scripts filename (without it's path or extension).
 *
 * The remaining items in each definition are optional and will be
 * automatically populated with default values. See `LLMS_Assets::get_defaults()`
 * for information on the default values of the asset.
 *
 * See `LLMS_Assets::get()` for full documentation on the properties
 * of an asset definition.
 *
 * @package LifterLMS/Assets
 *
 * @since [version]
 * @version [version]
 */

defined( 'ABSPATH' ) || exit;

return array(
	'llms' => array(
		'file_slug'    => 'llms',
		'dependencies' => array( 'jquery' ),
	),
);