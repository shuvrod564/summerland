<?php include_once('includes/url.inc.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon"> 
    <title>WPC Boards</title>
 
    <!-- All Stylesheets -->
    <?php $folder='root'; include_once('includes/stylesheets.inc.php'); ?> 
</head>
<body> 

    <!-- Preloader, Main Navigation Menu --> 
    <?php $folder='root'; include_once('includes/header.inc.php'); ?> 

    <!-- Header Wrapper Start -->
    <div class="container-fluid full-width px-0 text-center">
        <img 
            src="assets/images/global/pvc-banner.webp" 
            width="1903" height="425" class="img-fluid"
            alt="East Asian Series Tiles"
        > 
    </div>
    <!-- Header Wrapper End -->    

    <!-- Product Listing Wrapper Start -->
    <section class="py-5">
        <div class="container py-lg-4">
            <h1 class="h1 text-uppercase fw-bold text-center mb-4 mb-md-5">WPC Boards</h1> 
            <div class="row gx-2 gx-sm-3 gy-3 gy-sm-4 justify-content-center">
                <div class="col-md-6 col-sm-6">
                    <div class="product__card listing">
                        <figure class="text-center mb-0">
                            <img 
                                class="img-fluid transition w-100" 
                                src="<?php echo $base_url;?>assets/images/products/wpc-boards/WPC-Boards.webp" 
                                alt="WPC Boards"
                                width="638" height="424"
                            >
                        </figure>
                        <div class="caption px-3 py-3 d-flex justify-content-between align-items-center">
                            <div class="title">
                                <h2 class="lead-sm mb-0 fw-semibold text-white">
                                    WPC Boards
                                </h2> 
                            </div>
                            <button value="CRIZERAWUD - WPC Boards" class="btn btn-outline-white productEnquirBtn">ENQUIRE NOW</button>
                        </div>
                    </div>
                </div><!--.//col-->    
                   
                  
            </div><!--.//row-->
             
        </div><!--.//container-->
    </section>
    <!-- Product Listing Wrapper End -->
 
   
    <!-- Footer and Script List --> 
    <?php $folder='root'; include_once('includes/footer.inc.php'); ?> 

    <!-- Product Enquiry Form and validation Script -->
    <?php include_once('includes/product-enquire-modal-form-script.inc.php'); ?> 
    
</body>
</html>