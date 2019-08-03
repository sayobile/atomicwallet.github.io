<?php
if (!defined('ABSPATH')) {
	die();
}

function grimple_customizer_init()
{
	global $wp_customize;

	$true_transport = 'refresh';

	// Social links
	$wp_customize->add_section(
		'social_links_section',
		array(
			'title' => esc_html__('Социальные сети', 'grimple'),
			'priority' => 1,
		)
	);

	$wp_customize->add_setting(
		'social_twitter',
		array(
			'sanitize_callback' => 'true_sanitize_copyright',
			'transport' => $true_transport
		)
	);
	$wp_customize->add_control(
		'social_twitter',
		array(
			'section' => 'social_links_section',
			'label' => 'Twitter',
			'type' => 'text'
		)
	);

	$wp_customize->add_setting(
		'social_telegram',
		array(
			'sanitize_callback' => 'true_sanitize_copyright',
			'transport' => $true_transport
		)
	);
	$wp_customize->add_control(
		'social_telegram',
		array(
			'section' => 'social_links_section',
			'label' => 'Telegram',
			'type' => 'text'
		)
	);

	$wp_customize->add_setting(
		'social_medium',
		array(
			'sanitize_callback' => 'true_sanitize_copyright',
			'transport' => $true_transport
		)
	);
	$wp_customize->add_control(
		'social_medium',
		array(
			'section' => 'social_links_section',
			'label' => 'Medium',
			'type' => 'text'
		)
	);

	$wp_customize->add_setting(
		'social_facebook',
		array(
			'sanitize_callback' => 'true_sanitize_copyright',
			'transport' => $true_transport
		)
	);
	$wp_customize->add_control(
		'social_facebook',
		array(
			'section' => 'social_links_section',
			'label' => 'Facebook',
			'type' => 'text'
		)
	);

	$wp_customize->add_setting(
		'social_reddit',
		array(
			'sanitize_callback' => 'true_sanitize_copyright',
			'transport' => $true_transport
		)
	);
	$wp_customize->add_control(
		'social_reddit',
		array(
			'section' => 'social_links_section',
			'label' => 'Reddit',
			'type' => 'text'
		)
	);

	$wp_customize->add_setting(
		'social_steemit',
		array(
			'sanitize_callback' => 'true_sanitize_copyright',
			'transport' => $true_transport
		)
	);
	$wp_customize->add_control(
		'social_steemit',
		array(
			'section' => 'social_links_section',
			'label' => 'Steemit',
			'type' => 'text'
		)
	);

	$wp_customize->add_setting(
		'social_github',
		array(
			'sanitize_callback' => 'true_sanitize_copyright',
			'transport' => $true_transport
		)
	);
	$wp_customize->add_control(
		'social_github',
		array(
			'section' => 'social_links_section',
			'label' => 'GitHub',
			'type' => 'text'
		)
	);
}
add_action('customize_register', 'grimple_customizer_init');

// Format text data
function true_sanitize_copyright($value)
{
	return strip_tags(stripslashes($value));
}

