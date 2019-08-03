<?php
/**
 * The template for displaying taxonomy pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package atomicwallet
 */

get_header();

$check_name = get_field('title_support_h1', 'supportcategory_' . get_queried_object()->term_id, true);

$term_data = [
    'name' => ($check_name) ? $check_name : single_cat_title('', false),
    'link' => get_category_link(get_queried_object()->term_id),
    'icon' => get_field('support_cat_icon', 'supportcategory_' . get_queried_object()->term_id, true)
];
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

    <div class="support-main">
        <div class="support-main-title">
            <img src="<?php echo $term_data['icon']; ?>" alt="<?php echo $term_data['name']; ?>">
            <span><?php echo $term_data['name']; ?></span>
        </div>
        <div class="support-main-list">
            <?php
            if (have_posts()) :

                while (have_posts()) : the_post();
                ?>
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="support-main-item">
                    <div class="main-item-header"><?php the_title(); ?></div>
                    <div class="main-item-description"><?php echo get_the_excerpt(); ?></div>
                </a>
                <?php
                endwhile;
                wp_reset_query();

             endif;
            ?>
        </div>
    </div>

<?php
get_footer();
