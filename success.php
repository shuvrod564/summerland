<?php include_once('includes/url.inc.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <title>Success</title>

    <!-- All Stylesheets -->
    <?php $folder='root'; include_once('includes/stylesheets.inc.php'); ?> 
</head>
<body> 

    <!-- Preloader, Main Navigation Menu --> 
    <?php $folder='root'; include_once('includes/header.inc.php'); ?> 
     
    <!-- Header Wrapper Start -->
    <header class="page__header d-flex align-items-center" style="background-image: url('images/global/page-header-bg-image.webp');">
        <div class="container">
            <h1 class="h1 text-uppercase text-white text-center mb-0">Success</h1>
        </div>
    </header>
    <!-- Header Wrapper End --> 
 
    <!--  -->
    <div class="ptb pt-3">
        <div class="container">
            <div class="mx-auto" style="max-width: 300px;">
                <img src="images/success.gif" class="img-fluid " alt="Check"> 
            </div>
            <p class="lead text-center fw-normal col-lg-7 mx-auto">
                Your form was submitted successfully. One of the Team Members will contact you to discuss the service options as quickly as possible. 
                <br> You can contact us on +91 9987 654 321.
            </p>
        </div>
    </div>
     

    <!-- Footer and Script List --> 
    <?php $folder='root'; include_once('includes/footer.inc.php'); ?> 
     
    
</body>
</html>