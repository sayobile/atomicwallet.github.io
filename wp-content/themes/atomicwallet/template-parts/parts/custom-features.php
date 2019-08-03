<?php
if (!defined('ABSPATH')) {
	die();
}

$data = (object) [
    'features_title' => get_field('features_title', get_the_ID(), true),
    'features_desc' => get_field('features_desc', get_the_ID(), true),
    'features_image' => get_field('features_image', get_the_ID(), true)['sizes']['large'],
    'features_bottom_description' => get_field('features_bottom_description', get_the_ID(), true),
    'atomic_swap_exchange_image' => get_field('atomic_swap_exchange_image', get_the_ID(), true)['sizes']['large'],
    'secure_image' => get_field('secure_image', get_the_ID(), true)['sizes']['large'],
    'multi_currency_image' => get_field('multi-currency_image', get_the_ID(), true)['sizes']['large'],
    'buy_cryptocurrency_image' => get_field('buy_cryptocurrency_image', get_the_ID(), true)['sizes']['large'],
];
?>

<section class="features" id="features">
    <div class="container relative">
        <img src="<?php echo get_template_directory_uri(); ?>/css/images/bg-video.svg" alt="" class="bg bg-video">

        <img src="<?php echo get_template_directory_uri(); ?>/css/images/bg-features-1.svg" alt class="bg bg-features-1">
        <img src="<?php echo get_template_directory_uri(); ?>/css/images/bg-features-2.svg" alt class="bg bg-features-2">
        <img src="<?php echo get_template_directory_uri(); ?>/css/images/bg-features-3.svg" alt class="bg bg-features-3">
        <img src="<?php echo get_template_directory_uri(); ?>/css/images/bg-features-2.svg" alt class="bg bg-features-4">

        <?php if ($data->buy_cryptocurrency_image) : ?>
            <img src="<?php echo $data->buy_cryptocurrency_image; ?>" data-aos="zoom-in" data-aos-duration="800" alt class="bg bg-features-1-1-crypto mobile-hide">
        <?php else : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/css/images/features1.png" data-aos="zoom-in" data-aos-duration="800" alt class="bg bg-features-1-1-crypto mobile-hide">
        <?php endif; ?>

        <?php if ($data->atomic_swap_exchange_image) : ?>
            <img src="<?php echo $data->atomic_swap_exchange_image; ?>" data-aos="zoom-in" data-aos-duration="800" alt class="bg bg-features-1-1 mobile-hide">
        <?php else : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/css/images/features-1.png" data-aos="zoom-in" data-aos-duration="800" alt class="bg bg-features-1-1 mobile-hide">
        <?php endif; ?>

        <?php if ($data->secure_image) : ?>
            <img src="<?php echo $data->secure_image; ?>" data-aos="zoom-in" data-aos-duration="800" alt class="bg bg-features-2-1 mobile-hide">
        <?php else : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/css/images/features-2.png" data-aos="zoom-in" data-aos-duration="800" alt class="bg bg-features-2-1 mobile-hide">
        <?php endif; ?>

        <?php if ($data->multi_currency_image) : ?>
            <img src="<?php echo $data->multi_currency_image; ?>" data-aos="zoom-in" data-aos-duration="800" alt class="bg bg-features-3-1 mobile-hide">
        <?php else : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/css/images/features-3.png" data-aos="zoom-in" data-aos-duration="800" alt class="bg bg-features-3-1 mobile-hide">
        <?php endif; ?>

        <h2 class="features-title f-bold" data-aos="fade-right" data-aos-duration="800" data-aos-duration="800"><?php echo $data->features_title; ?></h2>
        <p class="download-text mobile-hide f-light" data-aos="fade-right" data-aos-duration="800"><?php $features_desc = str_replace('<p>', '', $data->features_desc); $features_desc = str_replace('</p>', '', $features_desc); echo $features_desc; ?><br><br><br>
            <img  class="mobile-hide" width="95%" style="margin-bottom: -30px" src="<?php echo $data->features_image; ?>"><br>
        </p>
        <p>&nbsp;</p>
        <p class="mobile-hide download-text-small f-light" ><?php echo $data->features_bottom_description; ?><br>
            <a class="hvr-grow" href="#download">Download</a>
        </p>



        <div>
            <div class="features-item">
                <div class="icon icon-light icon-exchange"></div>
                <div class="features-item-title f-medium" data-aos="fade-up-right" data-aos-duration="800">Atomic Swap Exchange</div>
                <div class="features-text f-light" data-aos="fade-right" data-aos-duration="800">
                    Use decentralized Atomic Swap to proceed with cross-chain exchange avoiding third party risks. <br><br><span class="mobile-hide">For coins not yet supported by Atomic Swap, we have built-in ShapeShift and Changelly exchanges.<br><br></span><br>
                    <a href="https://atomicwallet.io/centralized-exchanges-vs-atomic-swap">Read more about Atomic Swaps.</a>

                    <div class="features_icons mobile-hide">
                        <div class="features_icon f-light"><div class="main_icon_image"><img width="50" src="<?php echo get_template_directory_uri(); ?>/css/images/logo-changelly-white.svg"></div><p class="main_icon_text_small"><br>Instant limitless exchange service, supporting 90+ altcoins</p>
                        </div>
                        <div class="features_icon f-light"><div class="main_icon_image"><img width="40" src="<?php echo get_template_directory_uri(); ?>/css/images/logo-shapeshift-white.svg"></div><p class="main_icon_text_small"><br>Private, convenient<br>and fast way to <br>exchange cryptos</p>
                        </div>
                        <div class="features_icon f-light"><div class="main_icon_image"><img width="50" src="<?php echo get_template_directory_uri(); ?>/css/images/logo-atomic-white.svg"></div><p class="main_icon_text_small"><br>Best option for uncensored cross-blockchain swaps</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="features-item features-item-right">
                <div class="icon icon-light icon-secure"></div>
                <div class="features-item-title f-medium" data-aos="fade-up-left" data-aos-duration="800">Secure</div>
                <div class="features-text f-light" data-aos="fade-right" data-aos-duration="800">Strong encryption and custody-free solution <br>guarantees our clients the highest level of security. <br><br>Your private keys are encrypted and never leave your device. Only you have control over your funds. <br><br><a href="https://atomicwallet.io/atomic-wallet-security">Learn more about Atomic Wallet security</a><br><br><!--<a href="https://en.bitcoin.it/wiki/Private_key" target=_blank>Know more</a> about Private Keys.-->
                </div>
            </div>
            <div class="features-item features-item-left">
                <div class="icon icon-light icon-migration"></div>
                <div class="features-item-title f-medium" data-aos="fade-up-right" data-aos-duration="800">Multi-currency</div>
                <div class="features-text f-light" data-aos="fade-right" data-aos-duration="800">Atomic Wallet currently supports 300+<br> coins and tokens. It's the most convenient way to handle all your crypto assets. <a href="/assets">The list</a> is updated on a daily basis and we keep hunting for more!</div>
            </div>
            <div class="mobile-hide"  style="padding-top:330px;"></div>
            <div class="features-item features-item-right">
                <div class="icon icon-light icon-buy-crypto"></div>
                <div class="features-item-title f-medium" data-aos="fade-up-left" data-aos-duration="800">Buy Cryptocurrency</div>
                <div class="features-text f-light" data-aos="fade-right" data-aos-duration="800">Buy Bitcoin, Litecoin, Ethereum and XRP with your Bank card. We accept USD, EUR and your local currency worldwide. <br><br><a href="https://atomicwallet.io/buy-bitcoin-with-bank-card">Learn how to buy crypto in Atomic Wallet</a><br><br>
                </div>
            </div>
        </div>
    </div>
</section>
<div style="margin-top: 950px;" class="mobile-hide">
</div>
<div style="margin-top: 550px;" class="only-mobile">
</div>
