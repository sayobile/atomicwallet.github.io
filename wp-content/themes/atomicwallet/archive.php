<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package atomicwallet
 */

get_header();

if (is_category(1))
	get_template_part('template-parts/category/blog', 'page');

get_footer();
