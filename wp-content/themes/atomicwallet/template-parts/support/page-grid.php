<?php
if (!defined('ABSPATH')) {
	die();
}

$check_title = get_field('title_in_block_support', 'supportcategory_' . $term->term_id, true);

$term_data = [
	'link' => get_category_link($term->term_id),
	'title' => ($check_title) ? $check_title : $term->name,
	'desc' => get_field('desc_in_block_support', 'supportcategory_' . $term->term_id, true),
	'icon' => get_field('support_cat_icon', 'supportcategory_' . $term->term_id, true),
];
?>

<a href="<?php echo $term_data['link']; ?>" class="card-item">
	<div class="card-img">
		<img src="<?php echo $term_data['icon']; ?>" alt="<?php echo $term_data['title']; ?>">
	</div>
	<div class="card-header"><?php echo $term_data['title']; ?></div>
	<div class="card-description"><?php echo $term_data['desc']; ?></div>
	<div class="card-count-articles"><?php echo $term->count; ?> articles</div>
</a>
