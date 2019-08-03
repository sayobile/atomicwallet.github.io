<?php
/**
 * Template name: Ripple template
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
    'icon' => get_field('icon', get_the_ID(), true)['sizes']['large'],
    'mobile_hide_heading' => get_field('mobile_hide_heading__area', get_the_ID(), true),
    'all_show_heading' => get_field('all_show_heading__area', get_the_ID(), true),
    'short_description' => get_field('short_description', get_the_ID(), true),
    'big_image' => get_field('big_image', get_the_ID(), true)['sizes']['large'],
    'big_image_mobile' => get_field('big_image_mobile', get_the_ID(), true)['sizes']['large'],
    'android_download_link' => get_field('android_download_link', get_the_ID(), true),
    'ios_download_link' => get_field('ios_download_link', get_the_ID(), true),
    'windows_download_link' => get_field('windows_download_link', get_the_ID(), true),
    'macos_download_link' => get_field('macos_download_link', get_the_ID(), true),
    'ubuntu_download_link' => get_field('ubuntu_download_link', get_the_ID(), true),
    'debian_download_link' => get_field('debian_download_link', get_the_ID(), true),
    'fedora_download_link' => get_field('fedora_download_link', get_the_ID(), true),
    'how_to_setup' => get_field('how_to_setup', get_the_ID(), true),
    'how_to_setup_desc' => get_field('how_to_setup_desc', get_the_ID(), true),
    'how_to_setup_video_link' => get_field('how_to_setup_video_link', get_the_ID(), true),
];
?>

    <main class="main">
        <div class="mobile-hide" style="margin-top: 60px;">
        </div>
        <div class="item-page only-mobile">
            <img src="<?php echo $data->icon; ?>" class="item-page-image hvr-float">
            <h1><span class="mobile-hide"><?php echo $data->mobile_hide_heading; ?></span> <?php echo $data->all_show_heading; ?></h1>
        </div>

        <div class="container relative">
            <div class="mobile-hide">
                <img src="<?php echo $data->icon; ?>" class="item-page-image hvr-float " style="position: absolute; top: -75px;
    left: 179px;"></div>
            <h1 class="main-title coin-page-title mobile-hide"><?php echo $data->mobile_hide_heading . ' ' . $data->all_show_heading; ?></h1>
            <h2 class="download-text only-mobile  f-light"><?php echo $data->short_description; ?><br><br></h2>
            <div class="mobile-download-button only-mobile">
                <div class="download-item-app hvr-grow" data-download="android">
                    <a href="<?php echo $data->ios_download_link; ?>" target="_blank" ga('send',="" {="" hittype:="" 'event',="" eventcategory:="" 'download',="" eventaction:="" eventlabel:="" 'android'="" });=""><!-- <img src="css/images/OS/googleplay.svg" width="80%" alt class="download-item-img-color"> -->
                    <img src="<?php echo get_template_directory_uri(); ?>/css/images/OS/googleplay.svg" width="80%" alt="" class="download-item-img" style="box-shadow: 0 38px 50px rgba(34, 83, 139, 0.1)"></a>
                </div>
                <div class="download-item-app hvr-grow" data-download="iOS">
                    <a href="" onclick="window.kol_modal_223800.show()"><img src="<?php echo get_template_directory_uri(); ?>/css/images/OS/appstore.svg" width="80%" alt="" class="download-item-img-color"></a>
                    <img src="<?php echo get_template_directory_uri(); ?>/css/images/OS/appstore.svg" width="80%" onclick="window.kol_modal_223800.show()" alt="" class="download-item-img" style="box-shadow: 0 38px 50px rgba(34, 83, 139, 0.1)">
                </div>


            </div>
            <h2 class="main-subtitle coin-page-title-text mobile-hide  f-light" style="   "><?php echo $data->short_description; ?><br><br></h2>
            <div class="main_icons mobile-hide">
                <div class="main_icon f-light"><div class="main_icon_image"><img src="<?php echo get_template_directory_uri(); ?>/css/images/lock.svg" class="hvr-float"></div>Secured
                </div>
                <div class="main_icon f-light"><div class="main_icon_image hvr-float"><img src="<?php echo get_template_directory_uri(); ?>/css/images/decentralize.svg" class="hvr-float"></div>Decentralized
                </div>
                <div class="main_icon f-light"><div class="main_icon_image"><img src="<?php echo get_template_directory_uri(); ?>/css/images/anonymous.svg" class="hvr-float"></div>Anonymous
                </div>
                <a href="#download" class="button-wallet coin-page-download-button">Download</a>
            </div>
            <div class="download-wallet-top">


            </div>


            <div class="mobile-hide">
                <a href="#download"><img src="<?php echo $data->big_image; ?>" alt="" class="main-notebook main-notebook-wallet" data-aos="fade-left" data-aos-duration="800" style="margin-top: 7px;"> </a>
            </div>
            <div class="mobile-only">
                <a href="#download"><img src="<?php echo $data->big_image_mobile; ?>" alt="" class="mobile-interface-download only-mobile" data-aos="fade-left" data-aos-duration="800" style="margin-top: 7px;"> </a>
            </div>
        </div>
    </main>

    <?php
    // Reviews
    get_template_part('template-parts/parts/custom', 'page-rew');

    // Download block
    get_template_part('template-parts/parts/custom', 'page-download');
    ?>

    <h3 class="features-title-app f-bold" style="margin-top: 70px;"><?php echo $data->how_to_setup; ?></h3>
    <p class="download-text f-light container"><?php $how_to_setup_desc = str_replace('<p>', '', $data->how_to_setup_desc); $how_to_setup_desc = str_replace('</p>', '', $how_to_setup_desc); echo $how_to_setup_desc; ?></p>
    <div class="item-page-image-template">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $data->how_to_setup_video_link; ?>" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
    </div>

    <?php
    // Buy
    get_template_part('template-parts/parts/custom', 'buy');

    // Features
    get_template_part('template-parts/parts/custom', 'features');

    // Comments
    get_template_part('template-parts/parts/custom', 'comments');

    // Partners
    get_template_part('template-parts/parts/custom', 'partners');
    ?>

    <div class="item-page-container" style="padding-top: 195px;">
        <div class="item-page">

            <div class="item-page-article">

                <div class="item-page">
                    <img src="<?php echo $data->icon; ?>" class="item-page-image hvr-float">
                </div>
                <h2><?php the_field('page_description_h2', get_the_ID(), true); ?></h2>
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
    // Bottom download area
    get_template_part('template-parts/parts/custom', 'bottom-download');

get_footer();
