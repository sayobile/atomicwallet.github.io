<?php
/**
 * Template name: Coin price template
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

    <!-- TradingView Widget BEGIN -->
    <div class="tradingview-widget-container">
        <div class="tradingview-widget-container__widget"></div>
        <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com" rel="noopener" target="_blank"></a>
        </div>
        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js"
                async>
            {
                "symbols"
            :
                [
                    {
                        "title": "BTC/USD",
                        "proName": "BITFINEX:BTCUSD"
                    },
                    {
                        "title": "ETH/USD",
                        "proName": "BITFINEX:ETHUSD"
                    },
                    {
                        "description": "XRP/USD",
                        "proName": "KRAKEN:XRPUSD"
                    },
                    {
                        "description": "XLM/USD",
                        "proName": "BITFINEX:XLMUSD"
                    },
                    {
                        "description": "LTC/USD",
                        "proName": "COINBASE:LTCUSD"
                    },
                    {
                        "description": "DOGE/USD",
                        "proName": "BITTREX:DOGEUSD"
                    },
                    {
                        "description": "BCH/USD",
                        "proName": "COINBASE:BCHUSD"
                    },
                    {
                        "description": "DASH/USD",
                        "proName": "KRAKEN:DASHUSD"
                    },
                    {
                        "description": "EOS/USD",
                        "proName": "KRAKEN:EOSUSD"
                    },
                    {
                        "description": "DGB/USD",
                        "proName": "BITFINEX:DGBUSD"
                    }
                ],
                    "theme"
            :
                "light",
                    "isTransparent"
            :
                true,
                    "displayMode"
            :
                "adaptive",
                    "locale"
            :
                "en"
            }
        </script>
    </div>
    <!-- TradingView Widget END -->


    <div class="item-page-container">

        <div class="item-page">

            <div class="item-page-article no-background" style="background: transparent;padding-top: 0">

                <div class="mobile-download-button only-mobile">
                    <div class="download-item-app hvr-grow" data-download="android">
                        <a href="https://play.google.com/store/apps/details?id=io.atomicwallet" target="_blank"><!-- <img src="css/images/OS/googleplay.svg" width="80%" alt class="download-item-img-color"> -->
                            <img src="<?php echo get_template_directory_uri(); ?>/css/images/OS/googleplay.svg" width="80%" alt class="download-item-img"></a>
                    </div>
                    <div class="download-item-app hvr-grow" data-download="iOS">
                        <img src="<?php echo get_template_directory_uri(); ?>/css/images/OS/appstore.svg" width="80%" onclick="window.kol_modal_223800.show()" alt class="download-item-img">
                    </div>


                </div>



    <div id="wallet-button" class="center">
        <div class="buy-coin-item-features buy-coin-item-features-top">
            <div class="buy-coin-button">
                <a href="<?php the_field('buy_button_link', get_the_ID(), true); ?>">
                    <?php the_field('buy_button_text', get_the_ID(), true); ?></a>
            </div>
            <div class="buy-coin-button">
                <a href="https://atomicwallet.io/downloads">
                    Get Wallet</a>
            </div>
        </div>
    </div>

                <div style="margin-top: 50px;"></div>

                <div style="margin-top: 50px;"></div>
                <h1 class="center mobile-hide"><?php the_title(); ?></h1>
                <br>
                <h3 class="center mobile-hide"><?php the_field('first_block_title', get_the_ID(), true); ?></h3>
                <div class="widget-price mobile-hide">
					<?php
                    $code = get_field('first_block_scripts', get_the_ID(), true);
					$code = str_replace('<p>', '', $code);
					$code = str_replace('</p>', '', $code);

					echo $code;
                    ?>
                </div>
                <style>
                    #tradingview_a6953 {
                        width: 320px;
                    }
                </style>

                <h2 class="center mobile-hide"><?php the_field('second_block_title', get_the_ID(), true); ?></h2>
                <div class="widget-price mobile-hide">
					<?php
					$code = get_field('second_block_scripts', get_the_ID(), true);
					$code = str_replace('<p>', '', $code);
					$code = str_replace('</p>', '', $code);

					echo $code;
					?>
                </div>

                <section>
                    <h2 class="center"><?php the_field('third_block_title', get_the_ID(), true); ?></h2>
                    <div class="widget-price">
						<?php
						$code = get_field('third_block_scripts', get_the_ID(), true);
						$code = str_replace('<p>', '', $code);
						$code = str_replace('</p>', '', $code);

						echo $code;
						?>
                    </div>
                </section>

                <h2 class="center"><?php the_field('four_block_title', get_the_ID(), true); ?></h2>
                <div class="widget-cc">
					<?php the_field('four_block_scripts', get_the_ID(), true); ?>
                </div>

            </div>
        </div>

		<?php get_template_part('template-parts/parts/custom', 'buy'); ?>

        <section class="position-top">

            <div class="flex-container column">
                <div class="buy-coin-item-features">
                    <div class="buy-coin-features">
                        <h3><?php the_field('bottom_text_heading', get_the_ID(), true); ?></h3>
                        <h4><?php the_field('bottom_text_desc', get_the_ID(), true); ?></h4>
                    </div>

                    <div class="buy-coin-button">
                        <a href="<?php the_field('buy_button_link', get_the_ID(), true); ?>">
							<?php the_field('bottom_text_button_text', get_the_ID(), true); ?></a>
                    </div>
                </div>
        </section>

        <div class="item-page-container">

            <div class="item-page">

                <div class="item-page-article mb50">

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



        </div>


        <?php get_template_part('template-parts/parts/custom-page', 'download'); ?>

    <div class="mobile-download-button only-mobile">
        <div class="download-item-app hvr-grow" data-download="android">
            <a href="https://play.google.com/store/apps/details?id=io.atomicwallet" target="_blank"><!-- <img src="css/images/OS/googleplay.svg" width="80%" alt class="download-item-img-color"> -->
                <img src="<?php echo get_template_directory_uri(); ?>/css/images/OS/googleplay.svg" width="80%" alt class="download-item-img"></a>
        </div>
        <div class="download-item-app hvr-grow" data-download="iOS">
            <img src="<?php echo get_template_directory_uri(); ?>/css/images/OS/appstore.svg" width="80%" onclick="window.kol_modal_223800.show()" alt class="download-item-img">
        </div>


    </div>


    <?php get_template_part('template-parts/parts/custom', 'other-coins'); ?>


    <section class="position-top list1">
        <div class="flex-container column">
            <div class="buy-coin-item-features">

                <div class="buy-coin-button">
                    <a href="<?php the_field('buy_button_link', get_the_ID(), true); ?>">
						<?php the_field('buy_button_text', get_the_ID(), true); ?></a>
                </div>
            </div>
    </section>

    <section class="subscribe only-mobile" id="contacts">
        <div class="container relative">
            <div id="kol_embed_container_229450"></div>
            <script>window.jQuery || document.write('<scr' + 'ipt src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"><\/sc' + 'ript>')</script>
            <script>window.$kol_jquery = window.jQuery</script>
            <script src="https://kickoffpages-kickofflabs.netdna-ssl.com/widgets/1.9.6/kol_embed.js"></script>
            <script src='https://kickoffpages-kickofflabs.netdna-ssl.com/w/113350/229450.js'></script>
        </div>
    </section>


<?php
get_footer();
