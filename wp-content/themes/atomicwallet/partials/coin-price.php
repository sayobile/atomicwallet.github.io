<?php /*Template Name: Coin price*/?>
<?php get_header();?>

<div class="container-price">

    <div class="breadcrumbs">
        <a href="#">Prices</a> 
        >
        <a href="#">Bitcoin price</a>
    </div>

    <div class="wrapper">
        
    <div class="graphic-content">
            
            <div class="graphic-content__header">
                
                <div class="logo-crypto">
                    <i class="icon icon-btc"style="width:auto;height:auto;"></i>
                    <h4><?php the_title(); ?> <span>(BTC)</span></h4>
                </div>
               
                <div class="price-info">
                    <h4>$13,678.90</h4>
                    <span class="up-price">+$1235.89(4,78%)</span>
                </div>

            </div>

            <div class="wrapper-canvas">
                <canvas id="graphic" width="991" height="460"></canvas>
            </div>

            <div class="short-caption">
            <?php
                    if (have_posts()) :

                        while (have_posts()) : the_post();

                            the_content();

                        endwhile;
                        wp_reset_query();

                    endif;
                    ?>
            </div>

            <?php get_template_part('partials/wallet'); ?>
            

    </div>

    <?php get_sidebar('cryptolist'); ?>
    
    </div>


</div>


<script>

let ctx = document.getElementById('graphic').getContext('2d');
let labels = ['January','February','March','April','May','June']

let chart = new Chart(ctx, {
   type:'line',
    data:{
        labels:labels,
        datasets:[
            {   backgroundColor:'rgba(255,255,255,0)',
                borderColor:'green',
                data:[125,100,69,65,41,324,44],
            }
        ]
    },
    options: {
        legend:false,
        tooltips: {
        callbacks: {
           label: function(tooltipItem) {
                  return tooltipItem.yLabel;
           }
        }
    }
    }
    
})


</script>



<?php get_footer();?>