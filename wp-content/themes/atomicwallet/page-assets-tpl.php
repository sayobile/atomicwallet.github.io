<?php
/**
 * Template name: Assets template
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

    <main class="main" style="padding-top: 0">
        <div class="container relative">
            <h1 class="main-title f-bold"><?php the_title(); ?></h1>
            <p class="main-subtitle"><?php $code = get_field('description_code', get_the_ID(), true); $code = str_replace('<p>', '', $code); $code = str_replace('</p>', '', $code); echo $code; ?></p>
            <div class="list-page-button-label">
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSfN4WOC257NF8IPy5QVYSpxeTwmlt9ktp99lOk99cAAPt2EGA/viewform" target="_blank" class="button">Add coin</a>
            </div>
        </div>
    </main>

    <div class="list-table" id="list-table">
        <div class="list-table-swiped-zone" id="list-table-swiped-zone"></div>
        <div class="container cfx">
            <!--       <div class="list-table-search sticky">
					  <input type="text" placeholder="Search" id="list-table-search">
					  <img src="css/images/icons/search-icon.png" alt="" class="search-icon">
				  </div> -->
            <div class="list-table-caption f-bold sticky" id="list-table-swiped-all-width">
                <div class="list-table-th">Name</div>
                <div class="table-th-caption">
                    <div class="list-table-th">Market Cap</div>
                    <div class="list-table-th">Price</div>
                    <div class="list-table-th">Volume</div>
                    <div class="list-table-th">Change </div>
                </div>
                <!-- <div class="list-table-th">Wallet</div> -->
            </div>
            <div class="list-table-col">

                <div class="list-table-items" id="list-table-items-1"></div>

                <div class="list-table-col start-swiped" id="list-table-width">
                    <div class="list-table-container" id="list-table-swiped">
                        <div class="list-table-items" id="list-table-items-2"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="list-table-preloader" id="list-table-preloader">
            <div></div>
        </div>
    </div>

<?php
get_footer();
