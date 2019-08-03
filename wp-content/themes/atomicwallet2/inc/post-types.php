<?php
if (!defined('ABSPATH')) {
	die();
}

// Register Custom Post Type Support
function create_support_cpt()
{

	$labels = array(
		'name' => _x('Support', 'Post Type General Name', 'atomicwallet'),
		'singular_name' => _x('Support', 'Post Type Singular Name', 'atomicwallet'),
		'menu_name' => _x('Support', 'Admin Menu text', 'atomicwallet'),
		'name_admin_bar' => _x('Support', 'Add New on Toolbar', 'atomicwallet'),
		'archives' => __('Support Archives', 'atomicwallet'),
		'attributes' => __('Support Attributes', 'atomicwallet'),
		'parent_item_colon' => __('Parent Support:', 'atomicwallet'),
		'all_items' => __('All Support', 'atomicwallet'),
		'add_new_item' => __('Add New Support', 'atomicwallet'),
		'add_new' => __('Add New', 'atomicwallet'),
		'new_item' => __('New Support', 'atomicwallet'),
		'edit_item' => __('Edit Support', 'atomicwallet'),
		'update_item' => __('Update Support', 'atomicwallet'),
		'view_item' => __('View Support', 'atomicwallet'),
		'view_items' => __('View Support', 'atomicwallet'),
		'search_items' => __('Search Support', 'atomicwallet'),
		'not_found' => __('Not found', 'atomicwallet'),
		'not_found_in_trash' => __('Not found in Trash', 'atomicwallet'),
		'featured_image' => __('Featured Image', 'atomicwallet'),
		'set_featured_image' => __('Set featured image', 'atomicwallet'),
		'remove_featured_image' => __('Remove featured image', 'atomicwallet'),
		'use_featured_image' => __('Use as featured image', 'atomicwallet'),
		'insert_into_item' => __('Insert into Support', 'atomicwallet'),
		'uploaded_to_this_item' => __('Uploaded to this Support', 'atomicwallet'),
		'items_list' => __('Support list', 'atomicwallet'),
		'items_list_navigation' => __('Support list navigation', 'atomicwallet'),
		'filter_items_list' => __('Filter Support list', 'atomicwallet'),
	);
	$rewrite = array(
		'slug' => 'support/%supportcategory%',
		'with_front' => false
	);
	$args = array(
		'label' => __('Support', 'atomicwallet'),
		'description' => __('', 'atomicwallet'),
		'labels' => $labels,
		'menu_icon' => 'dashicons-format-chat',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'author', 'page-attributes'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => true,
		'exclude_from_search' => false,
		'show_in_rest' => false,
		'publicly_queryable' => true,
		'capability_type' => 'post',
		'rewrite' => $rewrite,
	);
	register_post_type('support', $args);

}

add_action('init', 'create_support_cpt', 0);

// Register Taxonomy Support category
function create_supportcategory_tax()
{

	$labels = array(
		'name' => _x('Support category', 'taxonomy general name', 'atomicwallet'),
		'singular_name' => _x('Support category', 'taxonomy singular name', 'atomicwallet'),
		'search_items' => __('Search Support category', 'atomicwallet'),
		'all_items' => __('All Support category', 'atomicwallet'),
		'parent_item' => __('Parent Support category', 'atomicwallet'),
		'parent_item_colon' => __('Parent Support category:', 'atomicwallet'),
		'edit_item' => __('Edit Support category', 'atomicwallet'),
		'update_item' => __('Update Support category', 'atomicwallet'),
		'add_new_item' => __('Add New Support category', 'atomicwallet'),
		'new_item_name' => __('New Support category Name', 'atomicwallet'),
		'menu_name' => __('Support category', 'atomicwallet'),
	);
	$rewrite = array(
		'slug' => 'support',
		'with_front' => false,
		'hierarchical' => true,
	);
	$args = array(
		'labels' => $labels,
		'description' => __('', 'atomicwallet'),
		'hierarchical' => true,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_tagcloud' => true,
		'show_in_quick_edit' => true,
		'show_admin_column' => false,
		'show_in_rest' => true,
		'rewrite' => $rewrite,
	);
	register_taxonomy('supportcategory', array('support'), $args);

}

add_action('init', 'create_supportcategory_tax');

// Custom rewrite
add_action('init', function () {
	$post_type = 'support';

	add_rewrite_tag("%support%", '([^/]+)', "post_type=$post_type&name=");

	$permastruct = "%supportcategory%/%support%";

	$args = array(
		'with_front' => true,
		'paged' => true,
		'ep_mask' => EP_NONE,
		'feed' => false,
		'forcomments' => false,
		'walk_dirs' => false,
		'endpoints' => false,
	);

	add_permastruct($post_type, $permastruct, $args);
});

function remove_tax_slug_link($link, $term, $taxonomy)
{
	if ($taxonomy == 'supportcategory')
		return str_replace('support/', '', $link);

	return $link;
}

add_filter('term_link', 'remove_tax_slug_link', 10, 3);

function custom_tax_rewrite_rule()
{
	$cats = get_terms(
		'supportcategory', array(
			'hide_empty' => false,
		)
	);
	if (sizeof($cats))
		foreach ($cats as $cat)
			add_rewrite_rule($cat->slug . '/?$', 'index.php?supportcategory=' . $cat->slug, 'top');
}

add_action('init', 'custom_tax_rewrite_rule');


add_filter('rewrite_rules_array', 'mmp_rewrite_rules');
function mmp_rewrite_rules($rules) {
	$newRules  = array();
	$newRules['support/(.+)/(.+)/(.+)/(.+)/?$'] = 'index.php?support=$matches[4]'; // my custom structure will always have the post name as the 5th uri segment
	$newRules['support/(.+)/?$']                = 'index.php?supportcategory=$matches[1]';

	return array_merge($newRules, $rules);
}

function filter_post_type_link($link, $post)
{
	if ($post->post_type != 'support')
		return $link;

	if ($cats = get_the_terms($post->ID, 'supportcategory'))
	{
		$link = str_replace('%supportcategory%', get_taxonomy_parents(array_pop($cats)->term_id, 'supportcategory', false, '/', true), $link); // see custom function defined below
	}
	return $link;
}
add_filter('post_type_link', 'filter_post_type_link', 10, 2);

function get_taxonomy_parents($id, $taxonomy, $link = false, $separator = '/', $nicename = false, $visited = array()) {
	$chain = '';
	$parent = &get_term($id, $taxonomy);

	if (is_wp_error($parent)) {
		return $parent;
	}

	if ($nicename)
		$name = $parent -> slug;
	else
		$name = $parent -> name;

	if ($parent -> parent && ($parent -> parent != $parent -> term_id) && !in_array($parent -> parent, $visited)) {
		$visited[] = $parent -> parent;
		$chain .= get_taxonomy_parents($parent -> parent, $taxonomy, $link, $separator, $nicename, $visited);

	}

	if ($link) {
		// nothing, can't get this working :(
	} else
		$chain .= $name;
	return $chain;
}

