<?php
if (!defined('ABSPATH')) {
	die();
}
?>
<a href="<?php echo get_the_permalink($popular->ID); ?>" class="article-item-title"><?php echo $popular->post_title; ?></a>
