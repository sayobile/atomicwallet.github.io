<?php
if (!defined('ABSPATH')) {
	die();
}
?>

<section class="reviews">
	<div class="container relative">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/swiper.min.css">
		<h2 class="download-title-top f-bold"><br><a name="download">Trusted Reviews</a></h2>
		<h3 class="download-text center f-light">Check what our customers say on <a href="https://www.trustpilot.com/review/atomicwallet.io"><img src="<?php echo get_template_directory_uri(); ?>/css/images/trustpilot-logo.png" class="trustpilot-logo" alt=""></a></h3>

		<div class="swiper-container s6 swiper-container-horizontal">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<div class="comments-item comments-item-reviews">
						<div class="team-author hvr-grow">
							<a href="https://twitter.com/CharlieShrem/status/1009538446678020104?s=09" rel="nofollow">
								<img src="<?php echo get_template_directory_uri(); ?>/css/images/team-3.jpg" class="team-author-avatar" alt>
								<div class="team-author-name f-medium">Charlie Shrem</div></a>
						</div>
						<div><img src="<?php echo get_template_directory_uri(); ?>/css/images/trustpilot.png" style="margin-bottom: 15px;" alt="">
						</div><a href="https://twitter.com/CharlieShrem/status/1009538446678020104?s=09" target="_blank" rel="nofolow">
							<div class="team-text f-light">Being able to swap assets without a centralized service is awesome - atomicwallet.io
							</div></a>

					</div>
				</div>
				<div class="swiper-slide"><div class="comments-item comments-item-reviews">
						<div class="team-author hvr-grow">
							<img src="https://pbs.twimg.com/profile_images/1034462682043346944/ckEJLY7h_bigger.jpg" class="team-author-avatar" alt>
							<div class="team-author-name f-medium">FateOfCrypto</div>
						</div>
						<div><img src="<?php echo get_template_directory_uri(); ?>/css/images/trustpilot.png" style="margin-bottom: 15px;" alt="">
						</div>
						<div class="team-text f-light"><b>*Attention*</b> If you are looking for a Multi-Asset Crypto Wallet, look into @atomicwallet! Much Respect to the team behind it...</div>

					</div>
				</div>
				<div class="swiper-slide">
					<div class="comments-item comments-item-reviews">
						<div class="team-author hvr-grow">
							<img src="https://pbs.twimg.com/profile_images/954189980020236288/nHyfyjF1_400x400.jpg" width="65px;" class="team-author-avatar" alt>
							<div class="team-author-name f-medium">RzEye</div>
						</div>
						<div><img src="<?php echo get_template_directory_uri(); ?>/css/images/trustpilot.png" style="margin-bottom: 15px;" alt="">
						</div>
						<div class="team-text f-light">Use the @atomicwallet  only 2 days now and I am already totally overwhelmed. Super clean modern design and easy compact handling is definitely the key here.
							Excellent work💪 </div>

					</div>
				</div>
				<div class="swiper-slide">
					<div class="comments-item comments-item-reviews">
						<div class="team-author hvr-grow">
							<img src="https://user-images.trustpilot.com/5c0b87f03f0baa0f6e27a308/73x73.png" class="team-author-avatar" alt>
							<div class="team-author-name f-medium">
								ernesto espiritu</div>

						</div>
						<div><img src="<?php echo get_template_directory_uri(); ?>/css/images/trustpilot.png" style="margin-bottom: 15px;" alt="">
						</div>
						<div class="team-text f-light"><b>Personal favorite multi currency wallet.</b><br> Very useful Coin Swapping exchange, Swap any coin to other coin, I normally used it for swapping my high value coins against small value coins...</div>

					</div>
				</div>
				<div class="swiper-slide"><div class="comments-item comments-item-reviews">
						<div class="team-author hvr-grow">
							<img src="https://user-images.trustpilot.com/default/v1/73x73.png" class="team-author-avatar" alt>
							<div class="team-author-name f-medium">Johan Dulst</div>
						</div>
						<div><img src="<?php echo get_template_directory_uri(); ?>/css/images/trustpilot.png" style="margin-bottom: 15px;" alt="">
						</div>
						<div class="team-text f-light">
							<b>Super Multi-Wallet.</b> <br>
							if there are problems , they do fast updates to solve things, Top.
							great support also.
							Go on like that, Respect.
						</div>


					</div>
				</div>
				<div class="swiper-slide"><div class="comments-item comments-item-reviews">
						<div class="team-author hvr-grow">
							<img src="https://user-images.trustpilot.com/default/v1/73x73.png" class="team-author-avatar" alt>
							<div class="team-author-name f-medium">Sean Freeman</div>

						</div>
						<div><img src="<?php echo get_template_directory_uri(); ?>/css/images/trustpilot.png" style="margin-bottom: 15px;" alt="">
						</div>
						<div class="team-text f-light"><b>Simple and clean is the way this wallet makes me feel. It's too hard to let go.</b><br>


							In addition to being a decentralized wallet AW gives you the ability to do token exchanges...</div>
					</div>
				</div>

				<div class="swiper-slide"><div class="comments-item comments-item-reviews">
						<div class="team-author hvr-grow">
							<img src="https://user-images.trustpilot.com/default/v1/73x73.png" class="team-author-avatar" alt>
							<div class="team-author-name f-medium">Alan Young</div>

						</div>
						<div><img src="<?php echo get_template_directory_uri(); ?>/css/images/trustpilot.png" style="margin-bottom: 15px;" alt="">
						</div>
						<div class="team-text f-light"><b>I am very happy with Atomic Wallet</b><br>
							They are very active to make sure that we are updated regularly, It is a quality wallet, I am happy to recommend it to friends, Thanks for a great service

						</div>

					</div>
				</div>
			</div>

			<!-- Add Pagination -->
			<div class="swiper-pagination"></div>
			<!-- Add Arrows -->
		</div>
		<div class="swiper-button-next"></div>
		<div class="swiper-button-prev"></div>
		<script src="<?php echo get_template_directory_uri(); ?>/js/swiper.min.js"></script>
		<script>
            var appendNumber = 4;
            var prependNumber = 1;
            var swiper6 = new Swiper('.s6', {
                slidesPerView: '3',
                spaceBetween: 30,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
            $(window).resize(function(){
                var ww = $(window).width();
                if (ww<=830) swiper6.params.slidesPerView = 1;
                swiper6.resizeFix(true)
            });
            $(window).trigger('resize')
		</script>
	</div>
</section>
