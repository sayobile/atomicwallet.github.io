<?php
if (!defined('ABSPATH')) {
	die();
}

$data = (object) [
	'title' => get_field('title', get_the_ID(), true),
	'icon' => get_field('icon', get_the_ID(), true)['sizes']['large'],
	'first_column_price' => get_field('first_column_price', get_the_ID(), true),
	'first_column_coin_code' => get_field('first_column_coin_code', get_the_ID(), true),
	'first_column_buy_text' => get_field('first_column_buy_text', get_the_ID(), true),
	'first_column_buy_link' => get_field('first_column_buy_link', get_the_ID(), true),
	'second_column_price' => get_field('second_column_price', get_the_ID(), true),
	'second_column_coin_code' => get_field('second_column_coin_code', get_the_ID(), true),
	'second_column_buy_text' => get_field('second_column_buy_button_text', get_the_ID(), true),
	'second_column_buy_link' => get_field('second_column_buy_button_link', get_the_ID(), true),
	'third_column_price' => get_field('third_column_price', get_the_ID(), true),
	'third_column_coin_code' => get_field('third_column_coin_code', get_the_ID(), true),
	'third_column_buy_text' => get_field('third_column_buy_button_text', get_the_ID(), true),
	'third_column_buy_link' => get_field('third_column_buy_button_link', get_the_ID(), true),
];
?>
<section class="mobile-hide coin-price-section">
    <div class="container relative buy-coin">
        <?php $h_tag = (is_page_template('page-but-card-tpl.php')) ? 'h1' : 'h3'; ?>
        <<?php echo $h_tag; ?> class="features-title f-bold"><?php echo $data->title; ?></<?php echo $h_tag; ?>>
        <img src="<?php echo get_template_directory_uri(); ?>/css/images/bg-comments.svg" alt class="bg bg-comments">

        <div class="buy-coin-wrapper">
            <div class="buy-coin-item hvr-grow">
                <a href="<?php echo $data->first_column_buy_link; ?>">
                    <div class="buy-coin-fiat-value">
                        <span><?php echo $data->first_column_price; ?></span>
                    </div>
                    <div class="buy-coin-rate">
                        <p>Get</p> <img src="<?php echo $data->icon; ?>" alt="">
                        <span id="hundred-dollar-rate"></span>
                        <span class="ticker"><?php echo $data->first_column_coin_code; ?></span>
                        <div class="buy-coin-button"><?php echo $data->first_column_buy_text; ?></div>
                    </div>
                </a>
            </div>

            <div class="buy-coin-item hvr-grow">
                <a href="<?php echo $data->second_column_buy_link; ?>">
                    <div class="buy-coin-fiat-value">
                        <span><?php echo $data->second_column_price; ?></span></div>
                    <div class="buy-coin-rate">
                        <p>Get</p> <img src="<?php echo $data->icon; ?>" alt="">
                        <span id="five-hundred-coin-rate"></span>
                        <span class="ticker"><?php echo $data->second_column_coin_code; ?></span>
                        <div class="buy-coin-button"><strong><?php echo $data->second_column_buy_text; ?></strong></div>
                    </div>
                </a>
            </div>

            <div class="buy-coin-item hvr-grow">
                <a href="<?php echo $data->third_column_buy_link; ?>">
                    <div class="buy-coin-fiat-value">
                        <span><?php echo $data->third_column_price; ?></span></div>
                    <div class="buy-coin-rate">
                        <p>Get</p> <img src="<?php echo $data->icon; ?>" alt="">
                        <span id="thousand-coin-rate"></span>
                        <span class="ticker"><?php echo $data->third_column_coin_code; ?></span>
                        <div class="buy-coin-button"><?php echo $data->third_column_buy_text; ?></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
