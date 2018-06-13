<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
    'lib/assets.php',    // Scripts and stylesheets
    'lib/extras.php',    // Custom functions
    'lib/setup.php',     // Theme setup
    'lib/titles.php',    // Page titles
    'lib/wrapper.php',   // Theme wrapper class
    'lib/customizer.php' // Theme customizer
];

foreach ($sage_includes as $file) {
    if (!$filepath = locate_template($file)) {
        trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
    }

    require_once $filepath;
}
unset($file, $filepath);

add_image_size('post_thumb_home', 575, 464, array( 'center', 'center' ));
add_image_size('thumb_galeria', 920, 435, array( 'center', 'center' ));
add_image_size('thumb_atracoes', 300, 300, array( 'center', 'center' ));

function resumo($texto, $limite)
{
    $texto = substr($texto, 0, strrpos(substr($texto, 0, $limite), ' ')) . '...';
    return $texto;
}

function cptui_register_my_cpts_depoimentos() {

	/**
	 * Post Type: Depoimentos.
	 */

	$labels = array(
		"name" => __( "Depoimentos", "sage" ),
		"singular_name" => __( "Depoimento", "sage" ),
	);

	$args = array(
		"label" => __( "Depoimentos", "sage" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "depoimentos", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "depoimentos", $args );
}

add_action( 'init', 'cptui_register_my_cpts_depoimentos' );
