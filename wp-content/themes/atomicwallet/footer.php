<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package atomicwallet
 */

?>

</div>
<?php echo (is_front_page() || is_page(78) || is_tax('supportcategory') || get_post_type() == 'support') ? '</main>' : '</div>'; ?>


<?php if (!is_front_page() && !is_page(78) && !is_tax() && get_post_type() != 'support' && !is_page_template('page-ripple-tpl.php') && !is_page_template('page-but-card-tpl.php') && !is_page_template('page-coin-price-tpl.php') && !is_page_template('page-assets-tpl.php') && !is_page_template('page-rrice-pre-tpl.php')) : ?>
<section class="subscribe" id="contacts">
    <div class="container relative">
        <div id="kol_embed_container_229450"></div>
        <script>window.jQuery || document.write('<scr' + 'ipt src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"><\/sc' + 'ript>')</script>
        <script>window.$kol_jquery = window.jQuery</script>
        <script src="https://kickoffpages-kickofflabs.netdna-ssl.com/widgets/1.9.6/kol_embed.js"></script>
        <script src='https://kickoffpages-kickofflabs.netdna-ssl.com/w/113350/229450.js'></script>
    </div>
</section>
<?php endif; ?>

<footer class="footer-new">
    <div class="container relative">
        <div class="footer-row">
            <div class="footer-new-left">
                <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/css/images/logo.png" alt="" class="footer-new-logo"></a><br>
                <a href="mailto:support@atomicwallet.io" class="footer-new-email f-light">support@atomicwallet.io</a><br>
                <div class="footer-new-soc">
                    <?php loop_social_footer(); ?>
                </div>
            </div>
            <div class="footer-new-right">
                <div class="footer-new-cols">

                    <div class="footer-new-col">
                        <div class="footer-new-col-title">Atomic Wallet</div>
                        <ul class="f-light">
                            <li><a href="https://support.atomicwallet.io/">Support</a></li>
                            <li><a href="https://t.me/atomicwalletchat">Telegram chat</a></li>
                            <li><a href="https://atomicwallet.io/terms-of-service">Terms of service</a></li>
                            <li><a href="https://atomicwallet.io/privacy">Privacy policy</a></li>
                            <li><a href="https://drive.google.com/drive/folders/1zbu1nKCBq2zNCnEtjWsw3oMJei6aFSuZ">Press Kit</a></li>
                        </ul>
                    </div>




                    <div class="footer-new-col">
                        <div class="footer-new-col-title">Buy Cryptoсurrency</div>
                        <ul class="f-light">
                            <li><a href="https://atomicwallet.io/buy-bitcoin">Buy Bitcoin (BTC)</a></li>
                            <li><a href="https://atomicwallet.io/buy-litecoin">Buy Litecoin (LTC)</a></li>
                            <li><a href="https://atomicwallet.io/buy-ethereum">Buy Ethereum (ETH)</a></li>
                            <li><a href="https://atomicwallet.io/buy-ripple">Buy Ripple (XRP)</a></li>
                            <li><a href="https://atomicwallet.io/buy-bitcoin-cash">Buy Bitcoin Cash (BCH)</a></li>
                        </ul>
                    </div>

                    <div class="footer-new-col">
                        <div class="footer-new-col-title">Assets</div>
                        <ul class="f-light">
                            <li><a href="https://atomicwallet.io/bitcoin-wallet">Bitcoin (BTC)</a></li>
                            <li><a href="https://atomicwallet.io/ethereum">Ethereum (ETH)</a></li>
                            <li><a href="https://atomicwallet.io/ripple">Ripple (XRP)</a></li>
                            <li><a href="https://atomicwallet.io/litecoin">Litecoin (LTC)</a></li>
                            <li><a href="https://atomicwallet.io/eos">EOS</a></li>
                            <li><a href="https://atomicwallet.io/neo">NEO</a></li>
                            <li><a href="https://atomicwallet.io/tron">TRON (TRX)</a></li>
                            <li><a href="https://atomicwallet.io/dogecoin">Dogecoin (DOGE)</a></li>
                            <li><a href="https://atomicwallet.io/cardano">Cardano (ADA)</a></li>
                            <li><a href="https://atomicwallet.io/dash">DASH</a></li>
                            <li><a href="https://atomicwallet.io/stellar">Stellar (XLM)</a></li>
                            <li><a href="https://atomicwallet.io/zcash">Zcash (ZEC)</a></li>
                        </ul>
                    </div>

                    <div class="footer-new-col">
                        <div class="footer-new-col-title">Cryptocurrency Prices</div>
                        <ul class="f-light">
                            <li><a href="https://atomicwallet.io/bitcoin-price-prediction">Bitcoin Price</a></li>
                            <li><a href="https://atomicwallet.io/litecoin-price-prediction">Litecoin Price</a></li>
                            <li><a href="https://atomicwallet.io/ethereum-price-prediction">Ethereum Price</a></li>
                            <li><a href="https://atomicwallet.io/ripple-price-prediction">Ripple Price</a></li>
                            <li><a href="https://atomicwallet.io/stellar-price-prediction">Stellar Price</a></li>
                            <li><a href="https://atomicwallet.io/eos-price-prediction">EOS Price</a></li>
                            <li><a href="https://atomicwallet.io/neo-price-prediction">NEO Price</a></li>
                            <li><a href="https://atomicwallet.io/tron-price-prediction">TRON Price</a></li>
                            <li><a href="https://atomicwallet.io/dogecoin-price-prediction">Dogecoin Price</a></li>

                            <li><a href="https://atomicwallet.io/dash-price-prediction">DASH Price</a></li>
                            <li><a href="https://atomicwallet.io/zcash-price-prediction">ZCash Price</a></li>
                            <li><a href="https://atomicwallet.io/bitcoin-cash-price-prediction">Bitcoin Cash Price</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>

</footer>

<?php wp_footer(); ?>
<script type="text/javascript">!function(e,t,n){function a(){var e=t.getElementsByTagName("script")[0],n=t.createElement("script");n.type="text/javascript",n.async=!0,n.src="https://beacon-v2.helpscout.net",e.parentNode.insertBefore(n,e)}if(e.Beacon=n=function(t,n,a){e.Beacon.readyQueue.push({method:t,options:n,data:a})},n.readyQueue=[],"complete"===t.readyState)return a();e.attachEvent?e.attachEvent("onload",a):e.addEventListener("load",a,!1)}(window,document,window.Beacon||function(){});</script>
<script type="text/javascript">window.Beacon('init', 'e947e766-402f-44b0-8f02-3ed79a72263c')</script>

</body>
</html>