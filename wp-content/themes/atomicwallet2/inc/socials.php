<?php
if (!defined('ABSPATH')) {
	die();
}

function loop_social_header()
{
	$socials = [
		'top_twitter' => get_theme_mod('social_twitter'),
		'top_telegram' => get_theme_mod('social_telegram'),
		'top_medium' => get_theme_mod('social_medium'),
		'top_facebook' => get_theme_mod('social_facebook'),
		'top_reddit' => get_theme_mod('social_reddit'),
		'top_steemit' => get_theme_mod('social_steemit'),
	];

	if ($socials) {
		foreach ($socials as $key => $social) {
			if (!empty($social))
				include get_template_directory() . '/template-parts/parts/social-data.php';
		}
	}
}

function loop_social_footer()
{
	$socials = [
		'top_twitter' => get_theme_mod('social_twitter'),
		'top_telegram' => get_theme_mod('social_telegram'),
		'top_github' => get_theme_mod('social_github'),
		'top_medium' => get_theme_mod('social_medium'),
		'top_reddit' => get_theme_mod('social_reddit'),
		'top_facebook' => get_theme_mod('social_facebook'),
	];

	if ($socials) {
		foreach ($socials as $key => $social) {
			if (!empty($social))
				include get_template_directory() . '/template-parts/parts/social-data.php';
		}
	}
}
