<?php include_once('includes/url.inc.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"> 
    <title>Flat Roof Tile</title>
 
    <!-- All Stylesheets -->
    <?php $folder='root'; include_once('includes/stylesheets.inc.php'); ?> 
</head>
<body> 

    <!-- Preloader, Main Navigation Menu --> 
    <?php $folder='root'; include_once('includes/header.inc.php'); ?> 

    <!-- Header Wrapper Start -->
    <header class="page__header d-flex align-items-center" style="background-image: url('images/global/page-header-bg-image.webp');">
        <div class="container">
            <h1 class="h1 text-uppercase text-white text-center mb-0">Flat Roof Tile</h1>
        </div>
    </header>
    <!-- Header Wrapper End -->  

    <!-- Listing Wrapper Start -->
    <section class="py-5">
        <div class="container">
            <div class="product__card__lg">
                <div class="row g-4 gx-lg-5 align-items-center">
                    <div class="col-md-5">
                        <div class="thumbnail__box overflow-hidden"> 
                            <img src="images/products/flat-roof-tile/06.webp" class="img-fluid" alt="Image">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <h2 class="text-uppercase fw-semibold">Flat Roof tile</h2>
                        <div class="">Product Details:</div>
                        <div class="table__wrapp mt-2">
                            <table class="table table-bordered mb-0">
                                <tr>
                                    <td>Dimensions</td>
                                    <td>300x400</td>
                                </tr> 
                                <tr>
                                    <td>Brand</td>
                                    <td>CRIZERA</td>
                                </tr>
                                <tr>
                                    <td>Usage/Application</td>
                                    <td>Building  Roofing </td>
                                </tr>
                                <tr>
                                    <td>Country of Origin</td>
                                    <td>Made in India</td>
                                </tr>
                            </table>
                        </div>
                        <div class="d-flex flex-wrap mt-3 mt-md-4 align-items-center justify-content-between"> 
                            <div class="price h4 mb-0">Product Price: <span class="text-primary">249/-</span></div>
                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quoteModal" class="btn btn-primary">GET A QUOTE <i class="arrow"></i></a>
                        </div>
                    </div>
                </div><!--./row-->
            </div><!--.//pro__card-->
            <div class="product__card__lg">
                <div class="row g-4 gx-lg-5 align-items-center">
                    <div class="col-md-5">
                        <div class="thumbnail__box overflow-hidden"> 
                            <img src="images/products/flat-roof-tile/07.webp" class="img-fluid" alt="Image">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <h2 class="text-uppercase fw-semibold">Flat Roof tile</h2>
                        <div class="">Product Details:</div>
                        <div class="table__wrapp mt-2">
                            <table class="table table-bordered mb-0">
                                <tr>
                                    <td>Dimensions</td>
                                    <td>300x400</td>
                                </tr> 
                                <tr>
                                    <td>Brand</td>
                                    <td>CRIZERA</td>
                                </tr>
                                <tr>
                                    <td>Usage/Application</td>
                                    <td>Building  Roofing </td>
                                </tr>
                                <tr>
                                    <td>Country of Origin</td>
                                    <td>Made in India</td>
                                </tr>
                            </table>
                        </div>
                        <div class="d-flex flex-wrap mt-3 mt-md-4 align-items-center justify-content-between"> 
                            <div class="price h4 mb-0">Product Price: <span class="text-primary">249/-</span></div>
                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quoteModal" class="btn btn-primary">GET A QUOTE <i class="arrow"></i></a>
                        </div>
                    </div>
                </div><!--./row-->
            </div><!--.//pro__card--> 

 
            <!-- Pagination -->
            <?php 
                $prevBtn="true"; $nextBtn="false"; 
                $prevPageUrl   ="flat-roof-tile.php";
                $nextPageUrl   ="#"; 
                $active        ="2"; 
                $pageName      = 'flat-roof-tile.php';
                include_once('includes/pagination.inc.php'); 
            ?>
        </div><!--.//container-->
    </section>
    <!-- Listing Wrapper End -->

    



    
    <!-- Modal -->
    <div class="modal fade" id="quoteModal" tabindex="-1" aria-labelledby="quoteModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <p class="modal-title h4 mb-0 fw-medium text-dark" id="quoteModalLabel">Get A Quote</p>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form__wrapp row gy-2 gx-4">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="small" for="fullName">Full Name <span class="text-danger">*</span></label>
                                <input type="text" name="fullName" id="fullName" class="form-control">
                                <div class="small text-danger fw-light error" id="fullName-error"></div>
                            </div> 
                        </div><!--.//col-->  
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="small" for="emailAddress">Email <span class="text-danger">*</span></label>
                                <input type="text" name="emailAddress" id="emailAddress" class="form-control">
                                <div class="small text-danger fw-light error" id="emailAddress-error"></div>
                            </div>
                        </div><!--.//col-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="small" for="contactNumber">Phone Number <span class="text-danger">*</span></label>
                                <input type="text" name="contactNumber" id="contactNumber" class="form-control">
                                <div class="small text-danger fw-light error" id="contactNumber-error"></div>
                            </div>
                        </div><!--.//col-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="small" for="subject">Subject <span class="text-danger">*</span></label>
                                <input type="text" name="subject" id="subject" class="form-control">
                                <div class="small text-danger fw-light error" id="subject-error"></div>
                            </div>
                        </div><!--.//col-->
                        <div class="col-12"> 
                            <div class="form-group">
                                <label class="small" for="userMessage">Message <span class="text-danger">*</span></label>
                                <textarea type="text" name="userMessage" id="userMessage" class="form-control"></textarea>
                                <div class="small text-danger fw-light error" id="userMessage-error"></div>
                            </div>
                        </div> 
                        <div class="col-12"> 
                            <div class="form-group">
                                <button onclick="submitQuoteContactForm()" class="btn btn-primary px-4 px-md-5 mt-4">Submit</button> 
                            </div>
                        </div>
                    </div> 
                </div><!--./modal-body-->
            </div>
        </div>
    </div>
   
     
    <!-- Footer and Script List --> 
    <?php $folder='root'; include_once('includes/footer.inc.php'); ?> 
    <!-- Form Validation -->
    <?php $folder='root'; include_once('includes/_quote-form-validation.script.inc.php');?>
    
</body>
</html>