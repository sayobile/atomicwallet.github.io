<?php
if (!defined('ABSPATH')) {
	die();
}
?>

        <h1 class="blog-header"><?php single_cat_title(); ?></h1>
		<?php if (category_description()) : ?>
            <div style="text-align: center;"><?php echo category_description(); ?></div>
		<?php endif; ?>
        <div class="item-page-article blog-bg-color-none">

			<?php
			if (have_posts()) :

				while (have_posts()) : the_post();

					if (has_post_thumbnail())
						$image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), '390')[0];
					?>
                    <div class="blog-div hvr-float">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <div class="small-image-blog">
                                <img src="<?php echo $image; ?>" alt="<?php the_title(); ?>"
                                     class="blog-image-template">
                            </div>
                            <div class="blog-div-text">
                                <h4><?php echo (get_field('block_post_title', get_the_ID(), true)) ? get_field('block_post_title', get_the_ID(), true) : get_the_title(); ?></h4>
								<?php the_excerpt(); ?>
                            </div>
                        </a>
                    </div>
				<?php
				endwhile;
				wp_reset_query();

			endif;
