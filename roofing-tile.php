<?php include_once('includes/url.inc.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon"> 
    <title>Roofing Tiles</title>
 
    <!-- All Stylesheets -->
    <?php $folder='root'; include_once('includes/stylesheets.inc.php'); ?> 
</head>
<body> 

    <!-- Preloader, Main Navigation Menu --> 
    <?php $folder='root'; include_once('includes/header.inc.php'); ?> 

    <!-- Header Wrapper Start -->
    <header class="page__header d-flex align-items-center" style="background-image: url('assets/images/global/page-header-bg-image.webp');">
        <div class="container">
            <p class="h1 text-uppercase text-white text-center mb-0">Roofing Tiles</p>
        </div>
    </header>
    <!-- Header Wrapper End -->   
    
    <!-- Roofing Wrapper Start -->
    <section class="pt-sm-4 pt-md-5 pb-lg-5 pb-3 text-center text-lg-start position-relative  max-1920"> 
        <div class="container-fluid right">  
            <div class="row g-4 gx-lg-5 align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="owl-carousel roofingCarousel">
                        <img src="assets/images/services/roofing/roofing-image-01.webp" class="img-fluid lazyload round" alt="Image">
                        <img src="assets/images/services/roofing/roofing-image-02.webp" class="img-fluid lazyload round" alt="Image"> 
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1"> 
                    <div class="ps-lg-4 ps-xl-5 aligned__content"> 
                        <h1 class="h1 text-primary">
                            Roofing Tiles
                        </h1>
                        <p>Clay tiles' hard-wearing structure can withstand strong winds, heavy hail, intense heat, and even fire. Natural slates are another popular choice in terms of resilience and durability. It can withstand all kinds of weather extremes, maintaining structural integrity when exposed to very high winds, hot temperatures, and hail. Its natural properties also make it non-combustible. Metal tiles are manufactured to survive stormy conditions with excellent resistance to fire, rot, mildew, and insects despite boasting a more lightweight structure. </p>
                        <p>Are you confused about which is the best option for you? Our roofing specialist will give you all the details and you will be able to make an informed decision.</p>
                    </div>
                </div><!--.//col--> 
            </div><!--.//row--> 
        </div><!--.//container--> 
    </section>
    <!-- Roofing Wrapper End -->
 
     
    <!-- Footer and Script List --> 
    <?php $folder='root'; include_once('includes/footer.inc.php'); ?>  
    
</body>
</html>