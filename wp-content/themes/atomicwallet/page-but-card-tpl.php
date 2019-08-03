<?php
/**
 * Template name: Buy with Credit Card template
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

$data = (object) [
    'first_column_buy' => get_field('first_column_buy', get_the_ID(), true),
    'second_column_buy' => get_field('second_column_buy', get_the_ID(), true),
    'third_column_buy' => get_field('third_column_buy', get_the_ID(), true),
    'coin_icon' => get_field('coin_icon', get_the_ID(), true)['sizes']['large'],
    'coin_code' => get_field('coin_code', get_the_ID(), true),
    'first_column_buy_text' => get_field('first_column_buy_text', get_the_ID(), true),
    'second_column_buy_text' => get_field('second_column_buy_text', get_the_ID(), true),
    'third_column_buy_text' => get_field('third_column_buy_text', get_the_ID(), true),
];
?>

    <section class="mobile-hide">
        <div class="container relative buy-coin">
            <h1 class="features-title f-bold"><?php the_title(); ?></h1>
            <img src="<?php echo get_template_directory_uri(); ?>/css/images/bg-comments.svg" alt class="bg bg-comments">
            <div class="buy-coin-wrapper">
                <div class="buy-coin-item hvr-grow">
                    <a href="#buy">
                        <div class="buy-coin-fiat-value">
                            <span><?php echo $data->first_column_buy; ?></span></div>
                        <div class="buy-coin-rate">
                            <p>Get</p>
                            <img src="<?php echo $data->coin_icon; ?>" alt="">
                            <span id="hundred-dollar-rate"> </span>
                            <span class="ticker"><?php echo $data->coin_code; ?></span>
                            <div class="buy-coin-button"><?php echo $data->first_column_buy_text; ?></div>
                    </a>
                </div>
            </div>
            <!-- <div class="buy-coin-item hvr-grow">
			  <div class="buy-coin-fiat-value">
				<span>$200</span></div>
				<a href="#buy">
				<div class="buy-coin-rate">
				  <p>Get</p> <img src="css/images/crypto-icon/BTC.svg" alt=""><span> 0.04915</span><span class="ticker">BTC </span>
				  <div class="buy-coin-button">BUY</div>
			  </a>
				</div>
			</div> -->
            <div class="buy-coin-item hvr-grow">
                <a href="#buy">
                    <div class="buy-coin-fiat-value">
                        <span><?php echo $data->second_column_buy; ?></span></div>
                    <div class="buy-coin-rate">
                        <p>Get</p>
                        <img src="<?php echo $data->coin_icon; ?>" alt="">
                        <span id="five-hundred-coin-rate"> </span>
                        <span class="ticker"><?php echo $data->coin_code; ?> </span>
                        <div class="buy-coin-button"><b><?php echo $data->second_column_buy_text; ?></b></div>
                </a>
            </div>
        </div>
        <div class="buy-coin-item hvr-grow">
            <a href="#buy">
                <div class="buy-coin-fiat-value">
                    <span><?php echo $data->third_column_buy; ?></span></div>
                <div class="buy-coin-rate">
                    <p>Get</p>
                    <img src="<?php echo $data->coin_icon; ?>" alt="">
                    <span id="thousand-coin-rate"> </span>
                    <span class="ticker"><?php echo $data->coin_code; ?> </span>
                    <div class="buy-coin-button"><?php echo $data->third_column_buy_text; ?></div>
            </a>
        </div>
    </section>
    <div class="item-page-container only-mobile">
        <div class="item-page">
            <div class="item-page-article no-background">
                <h2><?php the_field('mobile_heading_h2', get_the_ID(), true); ?></h2>
				<?php the_field('mobile_desc', get_the_ID(), true); ?>
                <div class="item-page-image-template">
                    <img src="<?php $img = get_field('mobile_img', get_the_ID(), true)['sizes']['large']; echo $img; ?>" alt=""></div>

            </div>
        </div>
    </div>

    <section class="flex" id="buy" style="margin-bottom:-85px;">
        <div class="flex-container">
            <div class="flex-item">
                <h3 id="buy"><?php the_field('buy_coin_heading', get_the_ID(), true); ?></h3>
                <ol>
                    <li data-number="1"><h4><?php the_field('buy_coin_list_first_title', get_the_ID(), true); ?></h4>
						<?php the_field('buy_coin_list_first_text', get_the_ID(), true); ?>
                        </li>
                    <li data-number="2"><h4><?php the_field('buy_coin_list_second_title', get_the_ID(), true); ?></h4>
						<?php the_field('buy_coin_list_second_text', get_the_ID(), true); ?>
                    </li>
                    <li data-number="3"><h4><?php the_field('buy_coin_list_third_title', get_the_ID(), true); ?></h4>
						<?php the_field('buy_coin_list_third_text', get_the_ID(), true); ?>
                        </li>
                </ol>
            </div>
            <div class="flex-item">
                <img src="<?php $img = get_field('buy_coin_image', get_the_ID(), true)['sizes']['large']; echo $img; ?>" class="mobile-hide" alt="">
            </div>
        </div>
        <div class="only-mobile">
            <div class="mobile-download-button buy-download-mobile-button">
                <div class="download-item-app hvr-grow" data-download="android">
                    <a href="<?php the_field('buy_coin_android_link', get_the_ID(), true); ?>" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/css/images/OS/googleplay.svg" alt class="download-item-img"></a>
                </div>
                <div class="download-item-app hvr-grow" data-download="iOS">

                    <img src="<?php echo get_template_directory_uri(); ?>/css/images/OS/appstore.svg" onclick="window.kol_modal_223800.show()" alt class="download-item-img">
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part('template-parts/parts/custom', 'page-download'); ?>

    <section class="buy-coin-features-section">
        <h2 class="features-title f-bold">Atomic is a great option to Buy Bitcoin</h2>
        <div class="flex-container">
            <div class="buy-coin-item-features">
                <div class="buy-coin-features">
                    <div class="buy-coin-item-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/css/images/lock.svg" class="" alt>
                    </div><h4>Secured</h4>
                    <p>Wallet is strongly encrypted. Private keys are generated locally and never leave your device.</p></div>
            </div>
            <div class="buy-coin-item-features">
                <div class="buy-coin-features">
                    <div class="buy-coin-item-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/css/images/icons/exchange-icon.svg" class="" alt>
                    </div>
                    <h4>Universal solution</h4>
                    <p>Store, Receive, Send, Buy and Exchange 300+ coins and tokens in one place.</p></div>
            </div>
            <div class="buy-coin-item-features">
                <div class="buy-coin-features">
                    <div class="buy-coin-item-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/css/images/icons/migration-icon.svg" class="" alt>
                    </div><h4>Start with just $50</h4>
                    <p>$50 is the minimum amount to purchase. Receive crypto in less than 30 minutes.</p></div>
            </div>
            <div class="buy-coin-item-features">
                <div class="buy-coin-features">
                    <div class="buy-coin-item-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/css/images/support-icon.svg" class="" alt>
                    </div><h4>24/7 Support</h4>
                    <p>Our support team is glad to help you answer any questions.</p></div>
            </div>
        </div>
    </section>

    <?php get_template_part('template-parts/parts/custom', 'page-rew'); ?>

    <section class="mobile-hide">

        <div class="flex-container column">
            <div class="buy-coin-item-features">
                <div class="buy-coin-features">
                    <h3><?php the_field('bottom_text_heading', get_the_ID(), true); ?></h3>
                    <h4><?php the_field('bottom_text_desc', get_the_ID(), true); ?></h4>
                </div>

                <div class="buy-coin-button">
                    <a href="#download">
                        <?php the_field('bottom_text_button_text', get_the_ID(), true); ?></a>
                </div>
            </div>
    </section>

    <div class="item-page-container">

        <div class="item-page">

            <div class="item-page-article item-page-article-no-bg-mob">
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

    <section class="mobile-hide">
        <div class="flex-container column">
            <div class="buy-coin-item-features">

                <div class="buy-coin-button">
                    <a href="#download">
						<?php the_field('bottom_text_button_text', get_the_ID(), true); ?></a>
                </div>
            </div>
        </div>
    </section>


<?php
get_footer();
