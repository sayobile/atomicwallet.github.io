<?php
if (!defined('ABSPATH')) {
	die();
}

$data = (object) [
	'title' => get_field('download_block_title', get_the_ID(), true),
	'desc' => get_field('download_block_description', get_the_ID(), true),
	'android_download_link' => 'https://play.google.com/store/apps/details?id=io.atomicwallet',
	'ios_download_link' => get_field('ios_download_link', get_the_ID(), true),
	'windows_download_link' => 'https://atomicwallet.io/download/atomicwallet.exe',
	'macos_download_link' => 'https://atomicwallet.io/download/atomicwallet.dmg',
	'ubuntu_download_link' => 'https://atomicwallet.io/download/atomicwallet.AppImage',
	'debian_download_link' => 'https://atomicwallet.io/download/atomicwallet.deb',
	'fedora_download_link' => 'https://atomicwallet.io/download/atomicwallet.rpm',
];
?>

<section class="container download-container relative<?php echo (is_page_template('page-coin-price-tpl.php')) ? ' mtminus' : ''; ?>">
	<!-- Subscribe Pop-up-->
	<script>window.jQuery || document.write('<scr' + 'ipt src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"><\/sc' + 'ript>')</script>
	<script>window.$kol_jquery = window.jQuery</script>
	<script src="https://kickoffpages-kickofflabs.netdna-ssl.com/widgets/1.9.6/kol_bounce.js"></script>
	<script src='https://kickoffpages-kickofflabs.netdna-ssl.com/w/113350/220933.js'></script>
	<!-- End of Pop-up-->
	<!-- Subscribe Pop-up mobile download-->
	<script>window.jQuery || document.write('<scr' + 'ipt src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"><\/sc' + 'ript>')</script>
	<script>window.$kol_jquery = window.jQuery</script>
	<script src="https://kickoffpages-kickofflabs.netdna-ssl.com/widgets/1.9.6/kol_bounce.js"></script>
	<script src='https://kickoffpages-kickofflabs.netdna-ssl.com/w/113350/223800.js'></script>
	<!-- End of mobile download Pop-up-->

<?php if (!is_page_template('page-rrice-pre-tpl.php')) : ?>
<h2 class="download-title-top f-bold mobile-hide" id="download"><br><br><a name="download">Download Atomic Wallet</a></h2>
    <br><h3 class="download-text center f-light mobile-hide">Atomic Wallet is available for all major Operating Systems.<br> <a href="#contacts" class="sign-up-download-link mobile-hide">Subscribe</a> for our updates to know about latest news and releases.<br><br></h3>
    <p class="download-text center mobile-hide">The latest version of the wallet: <a class="sign-up-download-link" href="/downloads">1.39.1</a></p>
<?php endif; ?>

<?php if (is_page_template('page-rrice-pre-tpl.php')) : ?>
<div style="margin-top: -100px;"></div>
    <div class="item-page-download-title" id="download">Download Atomic Wallet</div>
<?php endif; ?>

<div class="download mobile-hide">
	<div class="download-item download-item-windows hvr-grow" data-download="windows">
		<a href="<?php echo $data->windows_download_link; ?>" onclick="window.kol_modal_220933.show()"><img src="<?php echo get_template_directory_uri(); ?>/css/images/logo-windows.svg" alt class="download-item-img-color"></a>
		<img src="<?php echo get_template_directory_uri(); ?>/css/images/logo-windows-color.svg" alt class="download-item-img">
		<span class="download-name">
                <a href="<?php echo $data->windows_download_link; ?>" class="button download-button" onclick="window.kol_modal_220933.show()" ga('send', {
  hitType: 'event',
  eventCategory: 'Download',
  eventAction: 'Download',
  eventLabel: 'Windows'
});>Windows</a>
            </span>
		<span class="download-button-label">
                <a href="<?php echo $data->windows_download_link; ?>" class="button download-button" onclick="window.kol_modal_220933.show()" ga('send', {
  hitType: 'event',
  eventCategory: 'Download',
  eventAction: 'Download',
  eventLabel: 'Windows'
});>Download</a>
            </span>
	</div>
	<div class="download-item download-item-apple hvr-grow" data-download="apple">
		<a href="<?php echo $data->macos_download_link; ?>" onclick="window.kol_modal_220933.show()"><img src="<?php echo get_template_directory_uri(); ?>/css/images/logo-apple.svg" alt class="download-item-img-color"></a>
		<img src="<?php echo get_template_directory_uri(); ?>/css/images/logo-apple-color.svg" alt class="download-item-img">
		<span class="download-name">
                <a href="<?php echo $data->macos_download_link; ?>" class="button download-button" onclick="window.kol_modal_220933.show()" ga('send', {
  hitType: 'event',
  eventCategory: 'Download',
  eventAction: 'Download',
  eventLabel: 'MacOs'
});>macOS</a>
            </span>
		<span class="download-button-label">
                <a href="<?php echo $data->macos_download_link; ?>" class="button download-button" onclick="window.kol_modal_220933.show()" ga('send', {
  hitType: 'event',
  eventCategory: 'Download',
  eventAction: 'Download',
  eventLabel: 'MacOs'
});>Download</a>
            </span>
	</div>
	<div class="download-item download-item-ubuntu hvr-grow" data-download="ubuntu">
		<a href="<?php echo $data->ubuntu_download_link; ?>" onclick="window.kol_modal_220933.show()"><img src="<?php echo get_template_directory_uri(); ?>/css/images/logo-ubuntu.svg" alt class="download-item-img-color"></a>
		<img src="<?php echo get_template_directory_uri(); ?>/css/images/logo-ubuntu-color.svg" alt class="download-item-img">
		<span class="download-name">
                <a href="<?php echo $data->ubuntu_download_link; ?>" class="button download-button" onclick="window.kol_modal_220933.show()" ga('send', {
  hitType: 'event',
  eventCategory: 'Download',
  eventAction: 'Download',
  eventLabel: 'Ubuntu'
});>Ubuntu</a>
            </span>
		<span class="download-button-label">
                <a href="<?php echo $data->ubuntu_download_link; ?>" class="button download-button" onclick="window.kol_modal_220933.show()" ga('send', {
  hitType: 'event',
  eventCategory: 'Download',
  eventAction: 'Download',
  eventLabel: 'Ubuntu'
});>Download</a>
            </span>
	</div>
	<div class="download-item download-item-debian hvr-grow" data-download="debian">
		<a href="<?php echo $data->debian_download_link; ?>" onclick="window.kol_modal_220933.show()"><img src="<?php echo get_template_directory_uri(); ?>/css/images/logo-debian.svg" alt class="download-item-img-color"></a>
		<img src="<?php echo get_template_directory_uri(); ?>/css/images/logo-debian-color.svg" alt class="download-item-img">
		<span class="download-name">
                 <a href="<?php echo $data->debian_download_link; ?>" class="button download-button" onclick="window.kol_modal_220933.show()" ga('send', {
  hitType: 'event',
  eventCategory: 'Download',
  eventAction: 'Download',
  eventLabel: 'Debian'
});>Debian</a>
            </span>
		<span class="download-button-label">
                <a href="<?php echo $data->debian_download_link; ?>" class="button download-button" onclick="window.kol_modal_220933.show()" ga('send', {
  hitType: 'event',
  eventCategory: 'Download',
  eventAction: 'Download',
  eventLabel: 'Debian'
});>Download</a>
            </span>
	</div>
	<div class="download-item download-item-fedora hvr-grow" data-download="fedora">
		<a href="<?php echo $data->fedora_download_link; ?>" onclick="window.kol_modal_220933.show()"><img src="<?php echo get_template_directory_uri(); ?>/css/images/logo-fedora.svg" alt class="download-item-img-color"></a>
		<img src="<?php echo get_template_directory_uri(); ?>/css/images/logo-fedora-color.svg" alt class="download-item-img">
		<span class="download-name">
                 <a href="<?php echo $data->fedora_download_link; ?>" class="button download-button" onclick="window.kol_modal_220933.show()" ga('send', {
  hitType: 'event',
  eventCategory: 'Download',
  eventAction: 'Download',
  eventLabel: 'Fedora'
});>Fedora</a>
            </span>
		<span class="download-button-label">
                <a href="<?php echo $data->fedora_download_link; ?>" class="button download-button" onclick="window.kol_modal_220933.show()" ga('send', {
  hitType: 'event',
  eventCategory: 'Download',
  eventAction: 'Download',
  eventLabel: 'Fedora'
});>Download</a>
            </span>
	</div>
</div>
<!--              <div class="container relative only-mobile">
        <img class="mobile_interface only-mobile" src="css/images/mobile_interface-mobile.png">
        </div> -->
	<?php if (is_page_template('page-rrice-pre-tpl.php')) : ?>
        <div class="only-mobile">
            <span class="download-text f-light only-mobile"> Manage your Bitcoin, Ethereum, XRP, Litecoin, XLM and over 300 other coins and tokens.</span>
        </div>

        <div class="mobile-download-button only-mobile" style="margin-bottom: 50px">
            <div class="download-item-app hvr-grow" data-download="android">
                <a href="https://play.google.com/store/apps/details?id=io.atomicwallet&referrer=utm_source%3Dwebsite"
                   target="_blank" ga('send',="" {="" hittype:="" 'event',="" eventcategory:="" 'download',=""
                eventaction:="" eventlabel:="" 'android'="" });="">
                <!-- <img src="css/images/OS/googleplay.svg" width="80%" alt class="download-item-img-color"> -->
                <img src="<?php echo get_template_directory_uri(); ?>/css/images/OS/googleplay.svg" width="80%" alt
                     class="download-item-img"></a>
            </div>
            <div class="download-item-app hvr-grow" data-download="iOS">
                <img src="<?php echo get_template_directory_uri(); ?>/css/images/OS/appstore.svg" width="80%"
                     onclick="window.kol_modal_223800.show()" alt class="download-item-img">
            </div>
        </div>

        <?php endif; ?>


<?php if (!is_page_template('page-but-card-tpl.php')) : ?>
<div class="mobile-hide">
	<div class="mobile-download-button">
		<div class="download-item-app hvr-grow" data-download="android">
			<a href="<?php echo $data->android_download_link; ?>" target="_blank" ga('send',="" {="" hittype:="" 'event',="" eventcategory:="" 'download',="" eventaction:="" eventlabel:="" 'android'="" });=""><!-- <img src="css/images/OS/googleplay.svg" width="80%" alt class="download-item-img-color"> -->
			<img src="<?php echo get_template_directory_uri(); ?>/css/images/OS/googleplay.svg" width="80%" alt class="download-item-img" style="box-shadow: 0 38px 50px rgba(34, 83, 139, 0.1)"></a>
		</div>
		<div class="download-item-app hvr-grow" data-download="iOS">
			<a href="" onclick="window.kol_modal_223800.show()"><img src="<?php echo get_template_directory_uri(); ?>/css/images/OS/appstore.svg" width="80%" alt class="download-item-img-color"></a>
			<img src="<?php echo get_template_directory_uri(); ?>/css/images/OS/appstore.svg" width="80%" onclick="window.kol_modal_223800.show()" alt class="download-item-img" style="box-shadow: 0 38px 50px rgba(34, 83, 139, 0.1)">
		</div>

	</div>
</div>
<?php if (!is_page_template('page-rrice-pre-tpl.php')) : ?>
<div class="download-button-bottom mobile-hide">
	<a href="https://atomicwallet.io/download/hash_sum.pdf" target="_blank" class="button hash-torrent hvr-float">Check Hash Sum</a>&nbsp;&nbsp;&nbsp;&nbsp;
	<!--<a href="magnet:?xt=urn:btih:8F40C43C1602510238281D707D6C29B674B61C95&dn=Atomic" class="button hash-torrent" target="_blank">Torrent Download</a>-->
</div>
<?php endif; ?>
<?php endif; ?>

</section>
