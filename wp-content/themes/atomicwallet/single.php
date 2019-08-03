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
<?php if (have_posts()) : ?>
<div class="item-page-container">
<div class="item-page">
    <div class="item-page-article">
		<?php
		while (have_posts()) : the_post();

			if (has_post_thumbnail())
				$image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full')[0];
			?>
            <h1><?php the_title(); ?></h1>

            <div class="item-page-image-template">
            </div>
            <?php
            the_content();

		endwhile;
		wp_reset_query();

		?>
    </div>
    </div>
    </div>
<?php endif; ?>

    <div class="item-page-download">
        <div class="item-page-download-title" id="download"><?php esc_html_e('Download Atomic Wallet', 'atomicwallet'); ?></div>
        <!-- Subscribe Pop-up-->
        <script>window.jQuery || document.write('<scr' + 'ipt src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"><\/sc' + 'ript>')</script>
        <script>window.$kol_jquery = window.jQuery</script>
        <script src="https://kickoffpages-kickofflabs.netdna-ssl.com/widgets/1.9.6/kol_bounce.js"></script>
        <script src='https://kickoffpages-kickofflabs.netdna-ssl.com/w/113350/220933.js'></script>
        <!-- Subscribe Pop-up mobile download-->
        <script>window.jQuery || document.write('<scr' + 'ipt src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"><\/sc' + 'ript>')</script>
        <script>window.$kol_jquery = window.jQuery</script>
        <script src="https://kickoffpages-kickofflabs.netdna-ssl.com/widgets/1.9.6/kol_bounce.js"></script>
        <script src='https://kickoffpages-kickofflabs.netdna-ssl.com/w/113350/223800.js'></script>
        <!-- End of mobile download Pop-up-->

        <div class="download">
            <div class="download-item download-item-windows hvr-grow" data-download="windows">
                <a href="https://atomicwallet.io/download/atomicwallet.exe"
                   onclick="window.kol_modal_220933.show()"><img src="<?php echo get_template_directory_uri(); ?>/css/images/logo-windows.svg" alt=""
                                                                 class="download-item-img-color"></a>
                <img src="<?php echo get_template_directory_uri(); ?>/css/images/logo-windows-color.svg" alt="" class="download-item-img">
                <span class="download-name">
                    <a href="https://atomicwallet.io/download/atomicwallet.exe" class="button download-button"
                       onclick="window.kol_modal_220933.show()" ga('send',="" {="" hittype:="" 'event',="" eventcategory:="" 'download',="" eventaction:="" eventlabel:="" 'windows'="" });="">Windows</a>
                </span>
                <span class="download-button-label">
                    <a href="https://atomicwallet.io/download/atomicwallet.exe" class="button download-button"
                       onclick="window.kol_modal_220933.show()" ga('send',="" {="" hittype:="" 'event',="" eventcategory:="" 'download',="" eventaction:="" eventlabel:="" 'windows'="" });="">Download</a>
                </span>
            </div>
            <div class="download-item download-item-apple hvr-grow" data-download="apple">
                <a href="https://atomicwallet.io/download/atomicwallet.dmg"
                   onclick="window.kol_modal_220933.show()"><img src="<?php echo get_template_directory_uri(); ?>/css/images/logo-apple.svg" alt=""
                                                                 class="download-item-img-color"></a>
                <img src="<?php echo get_template_directory_uri(); ?>/css/images/logo-apple-color.svg" alt="" class="download-item-img">
                <span class="download-name">
                    <a href="https://atomicwallet.io/download/atomicwallet.dmg" class="button download-button"
                       onclick="window.kol_modal_220933.show()" ga('send',="" {="" hittype:="" 'event',="" eventcategory:="" 'download',="" eventaction:="" eventlabel:="" 'macos'="" });="">macOS</a>
                </span>
                <span class="download-button-label">
                    <a href="https://atomicwallet.io/download/atomicwallet.dmg" class="button download-button"
                       onclick="window.kol_modal_220933.show()" ga('send',="" {="" hittype:="" 'event',="" eventcategory:="" 'download',="" eventaction:="" eventlabel:="" 'macos'="" });="">Download</a>
                </span>
            </div>
            <div class="download-item download-item-ubuntu hvr-grow" data-download="ubuntu">
                <a href="https://atomicwallet.io/download/atomicwallet.AppImage"
                   onclick="window.kol_modal_220933.show()"><img src="<?php echo get_template_directory_uri(); ?>/css/images/logo-ubuntu.svg" alt=""
                                                                 class="download-item-img-color"></a>
                <img src="<?php echo get_template_directory_uri(); ?>/css/images/logo-ubuntu-color.svg" alt="" class="download-item-img">
                <span class="download-name">
                    <a href="https://atomicwallet.io/download/atomicwallet.AppImage" class="button download-button"
                       onclick="window.kol_modal_220933.show()" ga('send',="" {="" hittype:="" 'event',="" eventcategory:="" 'download',="" eventaction:="" eventlabel:="" 'ubuntu'="" });="">Ubuntu</a>
                </span>
                <span class="download-button-label">
                    <a href="https://atomicwallet.io/download/atomicwallet.AppImage" class="button download-button"
                       onclick="window.kol_modal_220933.show()" ga('send',="" {="" hittype:="" 'event',="" eventcategory:="" 'download',="" eventaction:="" eventlabel:="" 'ubuntu'="" });="">Download</a>
                </span>
            </div>
            <div class="download-item download-item-debian hvr-grow" data-download="debian">
                <a href="https://atomicwallet.io/download/atomicwallet.deb"
                   onclick="window.kol_modal_220933.show()"><img src="<?php echo get_template_directory_uri(); ?>/css/images/logo-debian.svg" alt=""
                                                                 class="download-item-img-color"></a>
                <img src="<?php echo get_template_directory_uri(); ?>/css/images/logo-debian-color.svg" alt="" class="download-item-img">
                <span class="download-name">
                     <a href="https://atomicwallet.io/download/atomicwallet.deb" class="button download-button"
                        onclick="window.kol_modal_220933.show()" ga('send',="" {="" hittype:="" 'event',="" eventcategory:="" 'download',="" eventaction:="" eventlabel:="" 'debian'="" });="">Debian</a>
                </span>
                <span class="download-button-label">
                    <a href="https://atomicwallet.io/download/atomicwallet.deb" class="button download-button"
                       onclick="window.kol_modal_220933.show()" ga('send',="" {="" hittype:="" 'event',="" eventcategory:="" 'download',="" eventaction:="" eventlabel:="" 'debian'="" });="">Download</a>
                </span>
            </div>
            <div class="download-item download-item-fedora hvr-grow" data-download="fedora">
                <a href="https://atomicwallet.io/download/atomicwallet.rpm"
                   onclick="window.kol_modal_220933.show()"><img src="<?php echo get_template_directory_uri(); ?>/css/images/logo-fedora.svg" alt=""
                                                                 class="download-item-img-color"></a>
                <img src="<?php echo get_template_directory_uri(); ?>/css/images/logo-fedora-color.svg" alt="" class="download-item-img">
                <span class="download-name">
                     <a href="https://atomicwallet.io/download/atomicwallet.rpm" class="button download-button"
                        onclick="window.kol_modal_220933.show()" ga('send',="" {="" hittype:="" 'event',="" eventcategory:="" 'download',="" eventaction:="" eventlabel:="" 'fedora'="" });="">Fedora</a>
                </span>
                <span class="download-button-label">
                    <a href="https://atomicwallet.io/download/atomicwallet.rpm" class="button download-button"
                       onclick="window.kol_modal_220933.show()" ga('send',="" {="" hittype:="" 'event',="" eventcategory:="" 'download',="" eventaction:="" eventlabel:="" 'fedora'="" });="">Download</a>
                </span>
            </div>
        </div>
        <style>
            .mobile-download-button {
                display: flex;
                justify-content: center;
                padding-top: 45px;
            }

            @media screen and (max-width: 830px) {
                .mobile-download-button {
                    display: flex;
                    justify-content: center;
                    padding-top: 65px;
                    padding-bottom: 35px;

                }
            }
        </style>
        <div class="only-mobile">
            <span class="download-text f-light only-mobile"> Manage your Bitcoin, Ethereum, XRP, Litecoin, XLM and over 300 other coins and tokens.</span>
        </div>
        <div class="mobile-download-button">
            <div class="download-item-app hvr-grow" data-download="android">
                <a href="https://play.google.com/store/apps/details?id=io.atomicwallet&referrer=utm_source%3Dwebsite"
                   target="_blank" ga('send',="" {="" hittype:="" 'event',="" eventcategory:="" 'download',=""
                eventaction:="" eventlabel:="" 'android'="" });="">
                <!-- <img src="css/images/OS/googleplay.svg" width="80%" alt class="download-item-img-color"> -->
                <img src="<?php echo get_template_directory_uri(); ?>/css/images/OS/googleplay.svg" width="80%" alt class="download-item-img"></a>
            </div>
            <div class="download-item-app hvr-grow" data-download="iOS">
                <a href="" onclick="window.kol_modal_223800.show()"><img src="<?php echo get_template_directory_uri(); ?>/css/images/OS/appstore.svg" width="80%"
                                                                         alt class="download-item-img-color"></a>
                <img src="<?php echo get_template_directory_uri(); ?>/css/images/OS/appstore.svg" width="80%" onclick="window.kol_modal_223800.show()" alt
                     class="download-item-img">
            </div>


        </div>
    </div>
    </div>
    </div>


    <?php
    $stories = get_field('post_top_stories', get_the_ID(), true);

    if ($stories) :
    ?>
    <h2 class="top-stories"><?php esc_html_e('Top Stories', 'atomicwallet'); ?></h2>
    <div class="related-search-grid">
    <?php
    $args = [
        'cat' => 1,
        'post__in' => $stories
    ];

    $loop = new WP_Query($args);

        while ($loop->have_posts()) : $loop->the_post();
			if (has_post_thumbnail())
				$image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), '390')[0];
        ?>
            <div class="rsh-block hvr-grow">
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <div class="rsh-text">
                        <h4><?php the_title(); ?></h4>
                    </div>
                    <div class="rsh-image-block">
                        <img src="<?php echo $image; ?>" alt="<?php the_title(); ?>">
                    </div>
                </a>
            </div>
    <?php
    endwhile;
    wp_reset_query();
    ?>
    </div>
    <?php
    endif;

get_footer();
