<?php
/**
 * Template name: Support
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package atomicwallet
 */

get_header();
?>
	<span class="support-title"><?php the_field('support_page_title', get_the_ID(), true); ?></span><br>
	<span class="support-sub-title"><?php the_field('support_page_desc', get_the_ID(), true); ?></span>
    <?php
    // Categories
	$args = array(
		'taxonomy' => 'supportcategory',
		'orderby'         => 'sort_number',
		'order'         => 'ASC',
		'hide_empty'    => true,
		'object_ids'    => null,
		'include'       => array(),
		'exclude'       => array(),
		'exclude_tree'  => array(),
		'fields'        => 'all',
		'count'         => true,
		'hierarchical'  => true,
		'child_of'      => 0,
		'get'           => 'all',
		'childless'     => false,
		'update_term_meta_cache' => true,
		'meta_query'    => array(
			'sort_number' => array(
				'key'     => 'support_sort_value',
				'type'    => 'NUMERIC',
			),
		)
	);
	$terms = get_terms($args);

	if ($terms) {
		echo '<div class="list-cards">';
		foreach ($terms as $term) {
			include get_template_directory() . '/template-parts/support/page-grid.php';
		}
		echo '</div>';
	}

    // Popular items
	$populars = get_field('support_popular_items', get_the_ID(), true);
	if ($populars) {
	    echo '<div class="support-articles">';
	    echo '<p class="support-article-title">' . esc_html__('Popular', 'grimple') . '</p>';
		echo '<div class="article-list">';

		popular_loop($populars, 1);

		if (count($populars) >= 5) {
			popular_loop($populars, 2);
        }
		echo '</div></div>';
	}

get_footer();
