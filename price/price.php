<?php require('../header/header.php')?>

<link rel="stylesheet" href="../css/atomic_font/atomicwallet.css">

<div class="container-rpice">

    <div class="breadcrumbs">
        <a href="#">Prices</a>
        <a href="#">Bitcoin price</a>
    </div>

    <div class="wrapper">
        
    <div class="graphic-content">
            
            <div class="graphic-content__header">
                
                <div class="logo-crypto">
                    <i class="icon icon-btc"></i>
                    <h4>Bitcoin price</h2>
                </div>
               
                <div class="price-info">
                    <h4>$13,678.90</h4>
                    <span class="changes">+$1235.89(4,78%)</span>
                </div>

            </div>


            <div class="wrapper-canvas">
                <canvas id="graphic" width="991" height="460"></canvas>
            </div>


    </div>

    <div class="list-crypto"></div>
    
    </div>


</div>



 
<style>
.container-rpice{
    padding:125px 294px;
    box-sizing:border-box;
}

#graphic{
    width:991px!important;
    height:460px!important;
}

</style>

<script src="../js/chart.js"></script>
<script>



 $(function(){

let ctx = document.getElementById('graphic').getContext('2d');
let labels = ['January','February','March','April','May','June']

let chart = new Chart(ctx, {
    type: 'line',
    data:{
        labels:labels,
        dataset:[
            {   
                label:'My first dataset',
                fill:false,
                lineTension:0.1,
                backgroundColor:"rgba(75,192,192,.4)",
                borderColor:"rgba(75,192,192,1)",
                borderCapStyle:'butt',
                borderDash:[],
                borderDashOffset:0.0,
                borderJoinStyle:'miter',
                pointBorderColor:"rgba(75,192,192,1)",  
                pointBackgroundColor:"#fff",
                pointBorderWidth:1,
                pointHoverRadius:5,   
                pointHoverBackgroundColor:'rgba(75,192,192,1)',
                pointHoverBorderColor:"rgba(220,220,220,1)",
                pointHoverBorderWidth:2,
                pointRadius:10,
                pointHitRadius:10,
                data:[65,59,80,81,56,55,40]
            },
        ]
    },
});
})
</script>