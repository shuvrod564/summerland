<?php include_once('includes/url.inc.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon"> 
    <title>Roofing Shingles</title>
 
    <!-- All Stylesheets -->
    <?php $folder='root'; include_once('includes/stylesheets.inc.php'); ?> 
</head>
<body> 

    <!-- Preloader, Main Navigation Menu --> 
    <?php $folder='root'; include_once('includes/header.inc.php'); ?> 

    <!-- Header Wrapper Start -->
    <header class="page__header d-flex align-items-center" style="background-image: url('assets/images/global/page-header-bg-image.webp');">
        <div class="container">
            <p class="h1 text-uppercase text-white text-center mb-0">Roofing Shingles</p>
        </div>
    </header>
    <!-- Header Wrapper End -->   
    
    <!-- Roofing Wrapper Start -->
    <section class="py-4 py-lg-5 text-center text-md-start position-relative max-1920"> 
        <div class="container-fluid right">  
            <div class="row g-4 gx-lg-5 align-items-center">
                <div class="col-md-6 order-md-2">
                    <div class="owl-carousel roofingCarousel">
                        <img src="assets/images/services/shingles/roofing-shingles-01.webp" class="img-fluid lazyload round" alt="Image">
                        <img src="assets/images/services/shingles/roofing-shingles-02.webp" class="img-fluid lazyload round" alt="Image"> 
                    </div>
                </div>
                <div class="col-md-6 order-md-1"> 
                    <div class="ps-lg-4 ps-xl-5 aligned__content"> 
                        <h1 class="h1 text-grey">
                        Roofing <span class="text-primary">Shingles</span>
                        </h1>
                        <p>In India, you can find different types of roofing shingles, from traditional wood shingles to asphalt to modern-day designer ones and even beyond! It isn’t as easy as it was back in the day when you just had to choose between ceramic, wood, and asphalt shingles! So it is important that you are acquainted with all these different types of roofing shingles. At Summerland, we will help you find the best roofing shingles for you.</p>
                     
                    </div>
                </div><!--.//col--> 
            </div><!--.//row--> 
        </div><!--.//container--> 
    </section>
    <!-- Roofing Wrapper End -->
 
   
    <!-- Footer and Script List --> 
    <?php $folder='root'; include_once('includes/footer.inc.php'); ?> 
    <!-- Form Validation -->
    <?php $folder='root'; include_once('includes/_quote-form-validation.script.inc.php');?>
    
</body>
</html>