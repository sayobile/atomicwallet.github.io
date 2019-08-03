<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(); ?></title>
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@atomicwallet">
    <meta name="twitter:creator" content="@atomicwallet">
    <meta name="twitter:title" content="<?php echo (get_field('social_meta_title', get_the_ID(), true)) ? get_field('social_meta_title', get_the_ID(), true) : get_the_title() ?> | Atomic Wallet Guide">
    <meta name="twitter:description" content="<?php the_field('social_meta_desc', get_the_ID(), true); ?>">
    <?php
	if (has_post_thumbnail()) :
		$image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full')[0];
	?>
    <meta name="twitter:image" content="<?php echo $image; ?>">
    <?php endif; ?>
	<?php wp_head(); ?>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!--<script async src="https://www.googletagmanager.com/gtag/js?id=UA-114023091-1"></script>
  <script>
	  window.dataLayer = window.dataLayer || [];

	  function gtag() {
		  dataLayer.push(arguments);
	  }

	  gtag('js', new Date());

	  gtag('config', 'UA-114023091-1');
  </script>-->

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-KBC3CH8');</script>
    <!-- End Google Tag Manager -->

    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Start of Async Prefinery Code -->
    <script type="text/javascript">var _pfy = _pfy || [];(function(){function pfy_load(){var pfys=document.createElement('script');pfys.type='text/javascript';pfys.async=true;pfys.src='https://widget.prefinery.com/widget/v2/1w40x3e4.js';var pfy=document.getElementsByTagName('script')[0];pfy.parentNode.insertBefore(pfys,pfy);}if (window.attachEvent){window.attachEvent('onload',pfy_load);}else{window.addEventListener('load',pfy_load,false);}})();</script>
    <!-- End of Async Prefinery Code -->
</head>
<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KBC3CH8"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?php if (is_home() || is_front_page()) : ?>
    <script src="<?php echo get_template_directory_uri(); ?>/js/aos.js"></script>
    <script>
        AOS.init();
    </script>
<?php endif; ?>

<div class="header-container<?php echo (is_category(1)) ? ' blog' : ''; ?>">
    <div class="header-menu-mobile header-menu-close f-light only-mobile" id="menu-mobile">
        <div class="container relative">
			<?php
			$args = [
				'theme_location' => 'main-menu',
				'container' => false
			];

			wp_nav_menu($args);
			?>
            <button class="header-menu-mobile-close" id="menu-button-close"></button>
        </div>
    </div>

    <div class="container relative">
        <img src="<?php echo get_template_directory_uri(); ?>/css/images/bg-first-screen.svg" alt class="bg bg-main">
        <header class="header">
            <a href="https://atomicwallet.io" class="header-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/css/images/logo.svg" alt="Atomic">
            </a>
			<?php
			$args = [
				'theme_location' => 'main-menu',
				'container' => 'nav',
				'container_class' => 'header-menu  f-light'
			];

			wp_nav_menu($args);
			?>
            <nav class="header-menu-icons  f-light">
                <?php loop_social_header(); ?>
            </nav>
            <button class="header-button only-mobile" id="menu-button-open"></button>
        </header>
    </div>
</div>

<?php if (is_front_page()) : ?>
<main class="main">
    <div class="container relative">
<?php elseif (is_page(78)) : ?>
<main class="main support">
    <div class="support-container">
<?php elseif (is_tax('supportcategory') || get_post_type() == 'support') : ?>
<main class="main support">
    <div class="support-container support-page">
<?php else : ?>
        <div class="item-page-container<?php echo (is_category(1)) ? ' blog' : ''; ?>">
            <div class="item-page">
<?php endif;
