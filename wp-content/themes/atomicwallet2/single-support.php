<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package atomicwallet
 */

get_header();
?>
    <div class="support-aside">
		<?php
		$this_url = explode('/', $_SERVER['REQUEST_URI']);

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

		if ($terms) :

			foreach ($terms as $term) :
				$check_title = get_field('title_in_block_support', 'supportcategory_' . $term->term_id, true);

				$t_data = [
					'link' => get_category_link($term->term_id),
					'title' => ($check_title) ? $check_title : $term->name,
					'icon' => get_field('support_cat_icon', 'supportcategory_' . $term->term_id, true),
				];
				?>
                <a href="<?php echo $t_data['link']; ?>" class="support-aside-item<?php echo ($term->slug == $this_url[1]) ? ' active' : ''; ?>">
                    <img src="<?php echo $t_data['icon']; ?>" alt="<?php echo $t_data['title']; ?>">
                    <span><?php echo $t_data['title']; ?></span>
                </a>
			<?php
			endforeach;

		endif;
		?>
    </div>

    <div class="support-main-wrap">
        <div class="support-main">
            <div class="item-page">
                <div class="item-page-article">
                    <h1 class="f-bold"><?php the_title(); ?></h1>
                    <?php
                    if (have_posts()) :

                        while (have_posts()) : the_post();

                            the_content();

                        endwhile;
                        wp_reset_query();

                    endif;
                    ?>
                </div>
            </div>
        </div>

        <?php
		// Popular items
		$populars = get_field('support_popular_items', get_the_ID(), true);
		if ($populars) {
			echo '<div class="support-articles">';
			echo '<p class="support-article-title">' . esc_html__('Related Articles', 'grimple') . '</p>';
			echo '<div class="article-list">';

			popular_loop($populars, 1);

			if (count($populars) >= 5) {
				popular_loop($populars, 2);
			}
			echo '</div></div>';
		}
        ?>
    </div>
<?php
get_footer();
