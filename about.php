<?php include_once('includes/url.inc.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon"> 
    <title>About Us - Summerland</title>
 
    <!-- All Stylesheets -->
    <?php $folder='root'; include_once('includes/stylesheets.inc.php'); ?> 
</head>
<body> 

    <!-- Preloader, Main Navigation Menu --> 
    <?php $folder='root'; include_once('includes/header.inc.php'); ?>

    <!-- Header Wrapper Start -->
    <header class="page__header d-flex align-items-center" style="background-image: url('assets/images/global/page-header-bg-image.webp');">
        <div class="container">
            <p class="h1 text-uppercase text-white text-center mb-0">About Us</p>
        </div>
    </header>
    <!-- Header Wrapper End -->

    <!-- Roofing Wrapper Start -->
    <section class="pt-sm-4 pt-md-5 pb-lg-5 pb-3 text-center text-lg-start position-relative max-1920"> 
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
                        <h1 class="h1 text-grey">
                            About 
                            <span class="text-primary">Us</span>
                        </h1>
                        <p class="mt-3 mt-lg-4">
                            At Summerland Trading Co, our mission is to provide high-quality building materials like roofing tiles, roofing shingles and sanitary wares and to build long-term relationships with our clients and the community by providing the right solution to any roofing problem with the help of the most qualified employees and services.
                        </p>  
                        <p class="">We use only the best raw materials to manufacture Summerland roof tiles. Without compromising your architectural concept or costing a fortune, we will provide the most reliable protection for homes against extreme weather conditions.</p>  
                    </div>
                </div><!--.//col--> 
            </div><!--.//row--> 
        </div><!--.//container--> 
    </section>
    <!-- Roofing Wrapper End -->

    <!-- Process Wrapper Start --> 
    <?php 
        $folder='root'; 
        $className ="bg-light";
        $topTitle  ="Dependable & Sincere Company";
        $heading   ="Our Advantages";
        include_once('includes/process-section.inc.php'); 
    ?> 
    <!-- Process Wrapper End -->

    <!-- Rededin Wrapper Start -->
    <section class="pt-5 pb-lg-5 pb-4 text-center text-lg-start position-relative max-1920"> 
        <div class="container-fluid start">  
            <div class="row g-4 gx-lg-5 align-items-center">
                <div class="col-lg-6">
                    <div class="owl-carousel redefinCarousel">
                        <img src="assets/images/services/redefin/redefin-image-01.webp" class="img-fluid lazyload round" alt="Image">
                        <img src="assets/images/services/redefin/redefin-image-01.webp" class="img-fluid lazyload round" alt="Image"> 
                    </div>
                </div>
                <div class="col-lg-6"> 
                    <div class="pe-lg-4 pe-xl-5 aligned__content"> 
                        <h2 class="h1 text-grey"> 
                            <span class="text-primary">Why</span> Choose Us?
                        </h2>
                        <p class="mt-3 mt-lg-4">
                            We have been supplying and manufacturing roofing tiles in Kottayam, Kerala for a long time and have always managed to offer the kind of roofing tiles our customers needed. We also provide an exemplary after-service, which we think helped us gain the trust of our customers.
                        </p> 
                        <p>Summerland provides high-quality products and services at an affordable cost. Because we believe in delivering the best at a reasonable price. Our transparent pricing and detailed invoices will give you an understanding of our work ethics and values. We stand out among all the roofing tiles manufacturers due to the way we treat our customers, you can expect the same from us.</p>   
                    </div>
                </div><!--.//col--> 
            </div><!--.//row--> 
        </div><!--.//container--> 
    </section>
    <!-- Rededin Wrapper End -->
 
    <!-- Testimonial Wrapper Start -->  
    <?php $folder='root'; include_once('includes/testimonial-section.inc.php'); ?> 
    <!-- Testimonial Wrapper End -->
     
    <!-- Footer and Script List --> 
    <?php $folder='root'; include_once('includes/footer.inc.php'); ?> 
    
</body>
</html>