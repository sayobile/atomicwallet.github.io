<?php
/**
 * Template name: Price Prediction template
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

    <div class="item-page-container rrice-pre">

        <div class="item-page">

            <div class="item-page-article">

                <h1><?php the_title(); ?></h1>

                <div class="item-page-image-template only-mobile">

                    <div class="item-page-blog-image">
                        <img src="<?php $img = get_field('mobile_image', get_the_ID(), true)['sizes']['large']; echo $img; ?>" alt="" class="">

                    </div>
                </div>

                <?php
                // First code block
                the_field('first_code_block', get_the_ID(), true);

                // Main content
                if (have_posts()) :

                    while (have_posts()) : the_post();

                        the_content();

                    endwhile;
                    wp_reset_query();

                endif;

                // Code after content
                $code_title = get_field('code_block_after_content_title', get_the_ID(), true);
                $code = get_field('code_block_after_content', get_the_ID(), true);
                $code = str_replace('<p>', '', $code);
                $code = str_replace('</p>', '', $code);

                echo "<h3 class='center'>{$code_title}</h3>";
                echo "<div style='margin-top:-55px'>{$code}</div>";
                ?>

                <div id="wallet-button" class="center" style="margin:25px 0 35px">
                    <div class="buy-coin-item-features buy-coin-item-features-top">
                        <div class="buy-coin-button">
                            <a href="<?php the_field('buy_block_link', get_the_ID(), true); ?>">
								<?php the_field('buy_block_text', get_the_ID(), true); ?></a>
                        </div>
                        <div class="buy-coin-button">
                            <a href="#download">
                                Get Wallet</a>
                        </div>
                    </div>
                </div>

                <?php
                $code_today_title = get_field('coin_price_today_block_title', get_the_ID(), true);
                $code_today_bottom_text = get_field('coin_price_today_bottom_text', get_the_ID(), true);
				$code = get_field('coin_price_today_block_code', get_the_ID(), true);
				$code = str_replace('<p>', '', $code);
				$code = str_replace('</p>', '', $code);

                echo "<h3 class='center'><br>{$code_today_title}</h3>";
                echo $code;
                echo $code_today_bottom_text;
                ?>
            </div>
        </div>
    </div>

    <?php get_template_part('template-parts/parts/custom', 'buy'); ?>

    <div class="item-page-container" style="margin-top:60px">

        <div class="item-page">

            <div class="item-page-article mb50" style="padding-bottom: 0">

                <?php the_field('bottom_content_block', get_the_ID(), true); ?>

                <?php get_template_part('template-parts/parts/custom', 'page-download'); ?>
            </div>

            <div class="button-suggest">
                <div class="button-left" style="margin-bottom: -50px;">
                    <a href="<?php the_field('button_suggest_left_link', get_the_ID(), true); ?>" class="suggest-articles-button">
                        <img src="<?php echo get_template_directory_uri(); ?>/css/images/articles/icons/arrow-left.svg" alt="">
                        <?php the_field('button_suggest_left_text', get_the_ID(), true); ?></a>
                </div>
                <div class="button-right" style="margin-bottom: -50px;">
                    <a href="<?php the_field('button_suggest_right_link', get_the_ID(), true); ?>" class="suggest-articles-button">
						<?php the_field('button_suggest_right_text', get_the_ID(), true); ?> <img src="<?php echo get_template_directory_uri(); ?>/css/images/articles/icons/arrow-right.svg" alt=""></a>
                </div>
            </div>

        </div>

    </div>

<?php
get_footer();
