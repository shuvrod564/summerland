<?php include_once('includes/url.inc.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon"> 
    <title>Summerland</title>
 
    <!-- All Stylesheets -->
    <?php $folder='root'; include_once('includes/stylesheets.inc.php'); ?> 
</head>
<body> 

    <!-- Preloader, Main Navigation Menu --> 
    <?php $folder='root'; include_once('includes/header.inc.php'); ?> 
    
    <!-- Header Wrapper Start -->
    <header class="header__wrapper text-center text-lg-start bg-light">
        <div class="container-fluid full-width max-1920 px-0">
            <div id="carouselId" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <!-- <ol class="carousel-indicators">
                    <li
                        data-bs-target="#carouselId"
                        data-bs-slide-to="0"
                        class="active"
                        aria-current="true"
                        aria-label="First slide"
                    ></li>
                    <li
                        data-bs-target="#carouselId"
                        data-bs-slide-to="1"
                        aria-label="Second slide"
                    ></li>
                    <li
                        data-bs-target="#carouselId"
                        data-bs-slide-to="2"
                        aria-label="Third slide"
                    ></li>
                </ol> -->
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active" data-bs-interval="3000">
                        <img
                            src="assets/images/home/banner-01.webp"
                            srcset="assets/images/home/banner-01-450.webp 575w, assets/images/home/banner-01.webp 1200w"
                            class="w-100 img-fluid" width="1903" height="793"
                            alt="Banner"
                        />
                    </div> 
                    <div class="carousel-item" data-bs-interval="3000">
                        <img
                            src="assets/images/home/banner-02.webp"
                            srcset="assets/images/home/banner-02-450.webp 575w, assets/images/home/banner-02.webp 1200w"
                            class="w-100 img-fluid" width="1903" height="793"
                            alt="Banner"
                        />
                    </div> 
                    <div class="carousel-item" data-bs-interval="3000">
                        <img
                            src="assets/images/home/banner-03.webp"
                            srcset="assets/images/home/banner-03-450.webp 575w, assets/images/home/banner-03.webp 1200w"
                            class="w-100 img-fluid" width="1903" height="793"
                            alt="Banner"
                        />
                    </div> 
                    <div class="carousel-item" data-bs-interval="3000">
                        <img
                            src="assets/images/home/banner-04.webp"
                            srcset="assets/images/home/banner-04-450.webp 575w, assets/images/home/banner-04.webp 1200w"
                            class="w-100 img-fluid" width="1903" height="793"
                            alt="Banner"
                        />
                    </div> 
                    <div class="carousel-item" data-bs-interval="3000">
                        <img
                            src="assets/images/home/banner-05.webp"
                            srcset="assets/images/home/banner-05-450.webp 575w, assets/images/home/banner-05.webp 1200w"
                            class="w-100 img-fluid" width="1903" height="793"
                            alt="Banner"
                        />
                    </div> 
                    <div class="carousel-item" data-bs-interval="3000">
                        <img
                            src="assets/images/home/banner-06.webp"
                            srcset="assets/images/home/banner-06-450.webp 575w, assets/images/home/banner-06.webp 1200w"
                            class="w-100 img-fluid" width="1903" height="793"
                            alt="Banner"
                        />
                    </div> 
                    <div class="carousel-item" data-bs-interval="3000">
                        <img
                            src="assets/images/home/banner-07.webp"
                            srcset="assets/images/home/banner-07-450.webp 575w, assets/images/home/banner-07.webp 1200w"
                            class="w-100 img-fluid" width="1903" height="793"
                            alt="Banner"
                        />
                    </div> 
                    <div class="carousel-item" data-bs-interval="3000">
                        <img
                            src="assets/images/home/banner-08.webp"
                            srcset="assets/images/home/banner-08-450.webp 575w, assets/images/home/banner-08.webp 1200w"
                            class="w-100 img-fluid" width="1903" height="793"
                            alt="Banner"
                        />
                    </div> 
                    <div class="carousel-item" data-bs-interval="3000">
                        <img
                            src="assets/images/home/banner-09.webp"
                            srcset="assets/images/home/banner-09-450.webp 575w, assets/images/home/banner-09.webp 1200w"
                            class="w-100 img-fluid" width="1903" height="793"
                            alt="Banner"
                        />
                    </div> 
                    <div class="carousel-item" data-bs-interval="3000">
                        <img
                            src="assets/images/home/banner-10.webp"
                            srcset="assets/images/home/banner-10-450.webp 575w, assets/images/home/banner-10.webp 1200w"
                            class="w-100 img-fluid" width="1903" height="793"
                            alt="Banner"
                        />
                    </div> 
                    <div class="carousel-item" data-bs-interval="3000">
                        <img
                            src="assets/images/home/banner-11.webp"
                            srcset="assets/images/home/banner-11-450.webp 575w, assets/images/home/banner-11.webp 1200w"
                            class="w-100 img-fluid" width="1903" height="793"
                            alt="Banner"
                        />
                    </div> 
                    <div class="carousel-item" data-bs-interval="3000">
                        <img
                            src="assets/images/home/banner-12.webp"
                            srcset="assets/images/home/banner-12-450.webp 575w, assets/images/home/banner-12.webp 1200w"
                            class="w-100 img-fluid" width="1903" height="793"
                            alt="Banner"
                        />
                    </div> 
                </div><!--.//carousel-inner-->
                <button
                    class="carousel-control-prev opacity-100"
                    type="button"
                    data-bs-target="#carouselId"
                    data-bs-slide="prev"
                >
                    <img src="assets/images/home/arrow-left.svg" width="28" height="64" class="img-fluid" alt="Chevron">
                </button>
                <button
                    class="carousel-control-next opacity-100"
                    type="button"
                    data-bs-target="#carouselId"
                    data-bs-slide="next"
                >
                    <img src="assets/images/home/arrow-right.svg" width="28" height="64" class="img-fluid" alt="Chevron">
                </button>
            </div>
            
            <!-- <div class="items d-flex align-items-center" style="background: #000 url('assets/images/home/header-background-image.webp') no-repeat center center / cover;">  
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-6 col-md-7 order-lg-2">
                            <img src="assets/images/home/header-hero-thumbnail.webp" class="img-fluid" alt="image">
                        </div> 
                        <div class="col-lg-6 order-lg-1">
                            <h1 class="h1 ff-sf fw-bold text-uppercase text-white">
                                The next generation of
                                <span class="d-block">roofing - tiles</span>
                            </h1>
                            <h2 class="h4 text-white fw-semibold">Where Functionality meets Stunning with the Help of Modern Technology</h2>
                            <p class="text-white small">
                                Summerland Trading Co is a leading company in the roof-tile industry. This Kerala-based company is now a leading manufacturer and supplier of imported roof tiles, shingles, sanitary ware, and other building materials.
                                All products are manufactured using cutting-edge technology and they are handled by experts from the time they are designed until the time they are installed in homes across Kerala. We provide the best after-sales service along with the highest quality products. 
                            </p>

                        </div> 
                    </div>  
                </div>
            </div>    -->
        </div><!--.//container-fluid--> 
    </header>
    <!-- Header Wrapper End --> 

    <!-- Product Wrapper Start -->
    <section class="py-5">
        <div class="container">  
            <h2 class="h2 text-uppercase text-center">Know our products</h2>
             
            <nav class="mt-4">
                <div class="nav nav-tabs mx-auto border-0 justify-content-center" id="nav-tab" role="tablist">
                    <button class="nav-link border-0 m-0 lead fw-bold active" id="nav-tab1-tab" data-bs-toggle="tab" data-bs-target="#nav-tab1" type="button" role="tab" aria-controls="nav-tab1" aria-selected="true">TILE ROOFING</button>
                    <button class="nav-link border-0 m-0 lead fw-bold" id="nav-tab2-tab" data-bs-toggle="tab" data-bs-target="#nav-tab2" type="button" role="tab" aria-controls="nav-tab2" aria-selected="false">SANITARY WARE</button>
                    <button class="nav-link border-0 m-0 lead fw-bold" id="nav-tab3-tab" data-bs-toggle="tab" data-bs-target="#nav-tab3" type="button" role="tab" aria-controls="nav-tab3" aria-selected="false">ROOFING SHINGLES</button>
                    <button class="nav-link border-0 m-0 lead fw-bold" id="nav-tab4-tab" data-bs-toggle="tab" data-bs-target="#nav-tab4" type="button" role="tab" aria-controls="nav-tab4" aria-selected="false">CRIZERAWUD</button>
                </div>
            </nav> 
            <div class="tab-content pt-4 pt-lg-5" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-tab1" role="tabpanel" aria-labelledby="nav-tab1-tab">
                    <div class="owl-carousel productCarousel">
                        <div class="product__card listing">
                            <figure class="text-center">
                                <img 
                                    class="img-fluid transition" 
                                    src="<?php echo $base_url;?>assets/images/products/tiles/french-series/blue-gray.webp" 
                                    alt="Blue Grey"
                                    width="403" height="403"
                                >
                            </figure>
                            <div class="caption px-3 py-3 d-flex justify-content-between align-items-center">
                                <div class="title">
                                    <h2 class="lead-sm mb-1 fw-semibold text-white">
                                        Blue Grey 
                                    </h2>
                                    <p class="mb-0 small lh-base">Piano Curve</p>
                                </div>
                                <button value="Frence Series - Blue Grey, Piano Curve" class="btn btn-outline-white productEnquirBtn">ENQUIRE NOW</button>
                            </div>
                        </div>
                        <div class="product__card listing">
                            <figure class="text-center">
                                <img 
                                    class="img-fluid transition" 
                                    src="<?php echo $base_url;?>assets/images/products/tiles/french-series/coffee-matt.webp" 
                                    alt="Coffee Matt"
                                    width="403" height="403"
                                >
                            </figure>
                            <div class="caption px-3 py-3 d-flex justify-content-between align-items-center">
                                <div class="title">
                                    <h2 class="lead-sm mb-1 fw-semibold text-white">
                                        Coffee Matt 
                                    </h2>
                                    <p class="mb-0 small lh-base">Piano Curve</p>
                                </div>
                                <button value="Frence Series - Coffee Matt, Piano Curve" class="btn btn-outline-white productEnquirBtn">ENQUIRE NOW</button>
                            </div>
                        </div>
                        <div class="product__card listing">
                            <figure class="text-center">
                                <img 
                                    class="img-fluid transition" 
                                    src="<?php echo $base_url;?>assets/images/products/tiles/german-series/blue-gray.webp" 
                                    alt="Blue Grey"
                                    width="403" height="403"
                                >
                            </figure>
                            <div class="caption px-3 py-3 d-flex justify-content-between align-items-center">
                                <div class="title">
                                    <h2 class="lead-sm mb-1 fw-semibold text-white">
                                        Blue Grey 
                                    </h2>
                                    <p class="mb-0 small lh-base">Full Flat</p>
                                </div>
                                <button value="German Series - Blue Grey, Full Flat" class="btn btn-outline-white productEnquirBtn">ENQUIRE NOW</button>
                            </div>
                        </div>
                        <div class="product__card listing">
                            <figure class="text-center">
                                <img 
                                    class="img-fluid transition" 
                                    src="<?php echo $base_url;?>assets/images/products/tiles/german-series/coffee-matt.webp" 
                                    alt="Coffee Matt"
                                    width="403" height="403"
                                >
                            </figure>
                            <div class="caption px-3 py-3 d-flex justify-content-between align-items-center">
                                <div class="title">
                                    <h2 class="lead-sm mb-1 fw-semibold text-white">
                                        Coffee Matt 
                                    </h2>
                                    <p class="mb-0 small lh-base">Full Flat</p>
                                </div>
                                <button value="German Series -Coffee Matt, Full Flat" class="btn btn-outline-white productEnquirBtn">ENQUIRE NOW</button>
                            </div>
                        </div>
                        <div class="product__card listing">
                            <figure class="text-center">
                                <img 
                                    class="img-fluid transition" 
                                    src="<?php echo $base_url;?>assets/images/products/tiles/east-asian-series/blue-gray-glossy.webp" 
                                    alt="Blue Grey"
                                    width="403" height="403"
                                >
                            </figure>
                            <div class="caption px-3 py-3 d-flex justify-content-between align-items-center">
                                <div class="title">
                                    <h2 class="lead-sm mb-1 fw-semibold text-white">
                                        Blue Grey 
                                    </h2>
                                    <p class="mb-0 small lh-base">Glossy</p>
                                </div>
                                <button value="East Asian Series - Blue Grey, Glossy" class="btn btn-outline-white productEnquirBtn">ENQUIRE NOW</button>
                            </div>
                        </div>
                        <div class="product__card listing">
                            <figure class="text-center">
                                <img 
                                    class="img-fluid transition" 
                                    src="<?php echo $base_url;?>assets/images/products/tiles/east-asian-series/coffee-brown-glossy.webp" 
                                    alt="Coffee Brown"
                                    width="403" height="403"
                                >
                            </figure>
                            <div class="caption px-3 py-3 d-flex justify-content-between align-items-center">
                                <div class="title">
                                    <h2 class="lead-sm mb-1 fw-semibold text-white">
                                        Coffee Brown 
                                    </h2>
                                    <p class="mb-0 small lh-base">Glossy</p>
                                </div>
                                <button value="East Asian Series - Coffee Brown, Glossy" class="btn btn-outline-white productEnquirBtn">ENQUIRE NOW</button>
                            </div>
                        </div>
                    </div><!--.//owl_carousel-->
                </div><!--.//tab_pane_1-->

                <div class="tab-pane fade" id="nav-tab2" role="tabpanel" aria-labelledby="nav-tab2-tab">
                    <div class="owl-carousel productCarousel">
                        <!-- <div class="product__card">
                            <a href="#" class="thumbnail d-block p-3 p-md-4">
                                <img src="assets/images/-products/product.webp" class="img-fluid" width="355" height="355" alt="product thumbnail">
                            </a>
                            <div class="caption">
                                <div class="d-flex flex-wrap justify-content-between align-items-center">
                                    <div class="details">
                                        <h3 class="lead fw-medium ff-sf mb-0"><a href="#" class="link">One Piece Closet 1</a></h3>
                                        <p class="mb-0 desc ff-sf small">Lorem Ipsum Is Simply Dummy Text Of</p>
                                    </div>
                                    <a href="#" class="btn btn-primary">Know More <i class="arrow"></i></a>
                                </div>
                            </div>
                        </div>   -->
                        <div class="product__card listing">
                            <figure class="text-center position-relative">
                                <img 
                                    class="img-fluid transition" 
                                    src="<?php echo $base_url;?>assets/images/products/closets/ht6001.webp" 
                                    alt="HT6001"
                                    width="403" height="403"
                                >
                                <?php include('includes/warranty-thumb.inc.php');?>
                            </figure>
                            <div class="caption px-3 py-3 d-flex justify-content-between align-items-center">
                                <div class="title">
                                    <h2 class="lead-sm mb-1 fw-semibold text-white">
                                        HT6001
                                    </h2>
                                    <p class="mb-0 small lh-base">Wash down Wall hang</p>
                                </div>
                                <button value="EWCs- HT6001" class="btn btn-outline-white productEnquirBtn">ENQUIRE NOW</button>
                            </div>
                        </div>
                        <div class="product__card listing">
                            <figure class="text-center position-relative">
                                <?php include('includes/warranty-thumb.inc.php');?>
                                <img 
                                    class="img-fluid transition" 
                                    src="<?php echo $base_url;?>assets/images/products/closets/ht6112.webp" 
                                    alt="HT6112"
                                    width="403" height="403"
                                >
                            </figure>
                            <div class="caption px-3 py-3 d-flex justify-content-between align-items-center">
                                <div class="title">
                                    <h2 class="lead-sm mb-1 fw-semibold text-white">
                                        HT6112
                                    </h2>
                                    <p class="mb-0 small lh-base">Wash down Wall hang</p>
                                </div>
                                <button value="EWCs- HT6112" class="btn btn-outline-white productEnquirBtn">ENQUIRE NOW</button>
                            </div>
                        </div>
                        <div class="product__card listing">
                            <figure class="text-center position-relative">
                                <?php include('includes/warranty-thumb.inc.php');?>
                                <img 
                                    class="img-fluid transition" 
                                    src="<?php echo $base_url;?>assets/images/products/faucet/M3I383-I64C.webp" 
                                    alt="MHR16404"
                                    width="405" height="405"
                                >
                            </figure>
                            <div class="caption px-3 py-3 d-flex justify-content-between align-items-center">
                                <div class="title">
                                    <h2 class="lead-sm mb-1 fw-semibold text-white">
                                        MHR16404
                                    </h2>
                                    <p class="mb-0 small lh-base">Bath Mixer Faucet</p>
                                </div>
                                <button value="Faucet- MHR16404" class="btn btn-outline-white productEnquirBtn">ENQUIRE NOW</button>
                            </div>
                        </div>
                        <div class="product__card listing">
                            <figure class="text-center position-relative">
                                <?php include('includes/warranty-thumb.inc.php');?>
                                <img 
                                    class="img-fluid transition" 
                                    src="<?php echo $base_url;?>assets/images/products/faucet/M4I383-I64C.webp" 
                                    alt="MHR16405"
                                    width="405" height="405"
                                >
                            </figure>
                            <div class="caption px-3 py-3 d-flex justify-content-between align-items-center">
                                <div class="title">
                                    <h2 class="lead-sm mb-1 fw-semibold text-white">
                                        MHR16405
                                    </h2>
                                    <p class="mb-0 small lh-base">Shower Mixer Faucet</p>
                                </div>
                                <button value="Faucet- MHR16405" class="btn btn-outline-white productEnquirBtn">ENQUIRE NOW</button>
                            </div>
                        </div>
                        <div class="product__card listing">
                            <figure class="text-center mb-0 position-relative">
                                <?php include('includes/warranty-thumb.inc.php');?>
                                <img 
                                    class="img-fluid transition w-100" 
                                    src="<?php echo $base_url;?>assets/images/products/washbasins/6021A.webp" 
                                    alt="6021A"
                                    width="403" height="403"
                                >
                            </figure>
                            <div class="caption px-3 py-3 d-flex justify-content-between align-items-center">
                                <div class="title">
                                    <h2 class="lead-sm mb-1 fw-semibold text-white">
                                        6021A
                                    </h2>
                                    <p class="mb-0 small lh-base">Art Basin</p>
                                </div>
                                <button value="Washbasins- 6021A" class="btn btn-outline-white productEnquirBtn">ENQUIRE NOW</button>
                            </div>
                        </div>
                        <div class="product__card listing">
                            <figure class="text-center mb-0 position-relative">
                                <?php include('includes/warranty-thumb.inc.php');?>
                                <img 
                                    class="img-fluid transition w-100" 
                                    src="<?php echo $base_url;?>assets/images/products/washbasins/6112B.webp" 
                                    alt="6112B"
                                    width="403" height="403"
                                >
                            </figure>
                            <div class="caption px-3 py-3 d-flex justify-content-between align-items-center">
                                <div class="title">
                                    <h2 class="lead-sm mb-1 fw-semibold text-white">
                                        6112B
                                    </h2>
                                    <p class="mb-0 small lh-base">Art Basin</p>
                                </div>
                                <button value="Washbasins- 6112B" class="btn btn-outline-white productEnquirBtn">ENQUIRE NOW</button>
                            </div>
                        </div>
                    </div><!--.//owl_carousel-->
                </div><!--.//tab_pane_2-->

                <div class="tab-pane fade" id="nav-tab3" role="tabpanel" aria-labelledby="nav-tab3-tab">
                    <div class="owl-carousel productCarousel">
                        <div class="product__card listing">
                            <figure class="text-center mb-0">
                                <img 
                                    class="img-fluid transition w-100" 
                                    src="<?php echo $base_url;?>assets/images/products/roofing-shingles/caramel-brown-sm.webp" 
                                    alt="Caramel Brown"
                                    width="403" height="403"
                                >
                            </figure>
                            <div class="caption px-3 py-3 d-flex justify-content-between align-items-center">
                                <div class="title">
                                    <h2 class="lead-sm mb-1 fw-semibold text-white">
                                        Caramel Brown 
                                    </h2> 
                                </div>
                                <button value="Roofing Shingles - Caramel Brown" class="btn btn-outline-white productEnquirBtn">ENQUIRE NOW</button>
                            </div>
                        </div>
                        <div class="product__card listing">
                            <figure class="text-center mb-0">
                                <img 
                                    class="img-fluid transition w-100" 
                                    src="<?php echo $base_url;?>assets/images/products/roofing-shingles/charcol-grey-sm.webp" 
                                    alt="Charcol Grey"
                                    width="403" height="403"
                                >
                            </figure>
                            <div class="caption px-3 py-3 d-flex justify-content-between align-items-center">
                                <div class="title">
                                    <h2 class="lead-sm mb-1 fw-semibold text-white">
                                        Charcol Grey 
                                    </h2> 
                                </div>
                                <button value="Roofing Shingles - Charcol Grey" class="btn btn-outline-white productEnquirBtn">ENQUIRE NOW</button>
                            </div>
                        </div>
                        <div class="product__card listing">
                            <figure class="text-center mb-0">
                                <img 
                                    class="img-fluid transition w-100" 
                                    src="<?php echo $base_url;?>assets/images/products/roofing-shingles/forest-green-sm.webp" 
                                    alt="Forest Green"
                                    width="403" height="403"
                                >
                            </figure>
                            <div class="caption px-3 py-3 d-flex justify-content-between align-items-center">
                                <div class="title">
                                    <h2 class="lead-sm mb-1 fw-semibold text-white">
                                        Forest Green 
                                    </h2> 
                                </div>
                                <button value="Roofing Shingles - Forest Green" class="btn btn-outline-white productEnquirBtn">ENQUIRE NOW</button>
                            </div>
                        </div>
                        <div class="product__card listing">
                            <figure class="text-center mb-0">
                                <img 
                                    class="img-fluid transition w-100" 
                                    src="<?php echo $base_url;?>assets/images/products/roofing-shingles/midnight-blue-sm.webp" 
                                    alt="Midnight Blue"
                                    width="403" height="403"
                                >
                            </figure>
                            <div class="caption px-3 py-3 d-flex justify-content-between align-items-center">
                                <div class="title">
                                    <h2 class="lead-sm mb-1 fw-semibold text-white">
                                        Midnight Blue 
                                    </h2> 
                                </div>
                                <button value="Roofing Shingles - Midnight Blue" class="btn btn-outline-white productEnquirBtn">ENQUIRE NOW</button>
                            </div>
                        </div>
                    </div><!--.//owl_carousel-->
                </div><!--.//tab_pane_3-->

                <div class="tab-pane fade" id="nav-tab4" role="tabpanel" aria-labelledby="nav-tab4-tab">
                    <div class="owl-carousel productCarousel">
                        <div class="product__card listing">
                            <figure class="text-center mb-0">
                                <img 
                                    class="img-fluid transition w-100" 
                                    src="<?php echo $base_url;?>assets/images/products/pvc-form-boards/crizerawud-9mm.webp" 
                                    alt="CRIZERAWUD 9mm"
                                    width="403" height="403" loading="lazy"
                                >
                            </figure>
                            <div class="caption px-3 py-3 d-flex justify-content-between align-items-center">
                                <div class="title">
                                    <h2 class="lead-sm mb-0 fw-semibold text-white">
                                        CRIZERAWUD 9mm
                                    </h2> 
                                </div>
                                <button value="CRIZERAWUD - CRIZERAWUD 9mm" class="btn btn-outline-white productEnquirBtn">ENQUIRE NOW</button>
                            </div>
                        </div>
                        <div class="product__card listing">
                            <figure class="text-center mb-0">
                                <img 
                                    class="img-fluid transition w-100" 
                                    src="<?php echo $base_url;?>assets/images/products/pvc-form-boards/crizerawud-12mm.webp" 
                                    alt="CRIZERAWUD 12mm"
                                    width="403" height="403" loading="lazy"
                                >
                            </figure>
                            <div class="caption px-3 py-3 d-flex justify-content-between align-items-center">
                                <div class="title">
                                    <h2 class="lead-sm mb-0 fw-semibold text-white">
                                        CRIZERAWUD 12mm
                                    </h2> 
                                </div>
                                <button value="CRIZERAWUD - CRIZERAWUD 12mm" class="btn btn-outline-white productEnquirBtn">ENQUIRE NOW</button>
                            </div>
                        </div>
                        <div class="product__card listing">
                            <figure class="text-center mb-0">
                                <img 
                                    class="img-fluid transition w-100" 
                                    src="<?php echo $base_url;?>assets/images/products/pvc-form-boards/crizerawud-17mm.webp" 
                                    alt="CRIZERAWUD 17mm"
                                    width="403" height="403" loading="lazy"
                                >
                            </figure>
                            <div class="caption px-3 py-3 d-flex justify-content-between align-items-center">
                                <div class="title">
                                    <h2 class="lead-sm mb-0 fw-semibold text-white">
                                        CRIZERAWUD 17mm
                                    </h2> 
                                </div>
                                <button value="CRIZERAWUD - CRIZERAWUD 17mm" class="btn btn-outline-white productEnquirBtn">ENQUIRE NOW</button>
                            </div>
                        </div>
                        <div class="product__card listing">
                            <figure class="text-center mb-0">
                                <img 
                                    class="img-fluid transition w-100" 
                                    src="<?php echo $base_url;?>assets/images/products/wpc-boards/WPC-Boards-sm.webp" 
                                    alt="WPC Boards"
                                    width="403" height="403"
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
                    </div><!--.//owl_carousel-->
                </div><!--.//tab_pane_4-->
            </div><!--.//tab__content-->
              
        </div><!--.//container--> 
    </section>
    <!-- Product Wrapper End -->

    <!-- Service Wrapper Start -->
    <section class="py-5 bg-light">
        <div class="container"> 
            <div class="row g-4 gx-xl-5 align-items-center">  
                <div class="col-lg-6 order-lg-2 text-center d-none d-lg-block">
                    <div class="ps-lg-4 ps-xl-5"> 
                        <div class="owl-carousel aboutImageSlider">
                            <img src="assets/images/about/about-thumbnail-01.webp" class="img-fluid lazyload object-cover w-100" width="576" height="760" alt="About"> 
                            <img src="assets/images/about/about-thumbnail-01.webp" class="img-fluid lazyload object-cover w-100" width="576" height="760" alt="About"> 
                            <img src="assets/images/about/about-thumbnail-01.webp" class="img-fluid lazyload object-cover w-100" width="576" height="760" alt="About">  
                        </div>
                    </div>
                </div><!--.//col-->
                <div class="col-lg-6 order-lg-1">
                    <div class="text-center text-lg-start"> 
                        <h2 class="h1 text-capitalize">
                            The Best Finishing Touch <span class="d-block">For Your Home</span>
                        </h2>
                        <p>A whole world of trustworthy and elegant roofing tiles of Summerland adds wings to your dream structures. At Summerland, architects, designers and customers will find the right model to meet every design and functional need. Whether it is for a new building or renovation work, Summerland offers a wide range of possibilities.</p>  
    
                        <div class="row g-4 align-items-center mt-3 mt-md-4">
                            <div class="col-5">
                                <img src="assets/images/services/roofing-sm-thumbnail.webp" class="img-fluid lazyload object-cover w-100" width="246" height="246" alt="Roofing"> 
                            </div>
                            <div class="col-7 text-start">
                                <h3 class="h4 ff-sf fw-semibold">Roofing</h3>
                                <p class="text-dark small mb-1">Whether you’re thinking about installing a new roof or need minor repairs, make our roofing tiles and shingles your first choice. Our team are always happy to provide you with quality service and guidance.</p>
                                <a href="roofing-shingles.php" class="link__more">Know More <i class="arrow"></i></a> 
                            </div>
                        </div><!--./row-->
                    </div>
                </div><!--.//col-->
            </div><!--.//row-->
        </div><!--.//container--> 
    </section>
    <!-- Service Wrapper End -->
      
    <!-- Process Wrapper Start --> 
    <?php 
        $folder='root'; 
        $className ="";
        $topTitle  ="";
        $heading   ="Our Process";
        include_once('includes/process-section.inc.php'); 
    ?> 
    <!-- Process Wrapper End -->

    <!-- Roofing Wrapper Start -->
    <section class="pt-sm-4 pt-md-5 pb-lg-5 pb-3 text-center text-lg-start position-relative max-1920"> 
        <div class="container-fluid right">  
            <div class="row g-4 gx-lg-5 align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="owl-carousel roofingCarousel">
                        <img src="assets/images/services/roofing/roofing-image-01.webp" width="655" height="755" class="img-fluid lazyload round" alt="Image">
                        <img src="assets/images/services/roofing/roofing-image-02.webp" width="655" height="755" class="img-fluid lazyload round" alt="Image"> 
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1"> 
                    <div class="ps-lg-4 ps-xl-5 aligned__content"> 
                        <h2 class="h1 text-grey">
                            Professional 
                            <span class="text-primary d-lg-block">Roofing Tiles & Shingles</span>
                        </h2>
                        <p class="small mt-3 mt-lg-4">
                            As one of Kerala's leading roof tile manufacturers, Summerland roof tiles are made of the highest quality raw materials. They offer the most reliable protection for homes against extreme weather conditions without compromising your architectural concept or exceeding your budget. These highly durable and cost-efficient roofing tiles are available in a wide selection of shapes, colours and sizes.
                        </p>   
                        <p class="small">
                            Roofing Shingles are the most commonly used roofing material in North America, and they are increasingly preferred across India. These products are composites composed of reinforced fibreglass mesh and mineral-stabilised, high-grade asphalt granules overlaid with ceramic coatings for strength.
                        </p>   
                        <a href="roofing-tile.php" class="btn btn-primary">Know More <i class="arrow"></i></a>
                    </div>
                </div><!--.//col--> 
            </div><!--.//row--> 
        </div><!--.//container--> 
    </section>
    <!-- Roofing Wrapper End -->

    <!-- Rededin Wrapper Start -->
    <section class="pt-5 pb-lg-5 pb-4 text-center text-lg-start position-relative max-1920"> 
        <div class="container-fluid start">  
            <div class="row g-4 gx-lg-5 align-items-center">
                <div class="col-lg-6">
                    <div class="owl-carousel redefinCarousel">
                        <img src="assets/images/services/redefin/redefin-image-01.webp" width="655" height="755" class="img-fluid lazyload round" alt="Image">
                        <img src="assets/images/services/redefin/redefin-image-01.webp" width="655" height="755" class="img-fluid lazyload round" alt="Image"> 
                    </div>
                </div>
                <div class="col-lg-6"> 
                    <div class="pe-lg-4 pe-xl-5 aligned__content"> 
                        <h2 class="h1 text-grey">
                            Redefining 
                            <span class="text-primary d-lg-block">The Luxury !!</span>
                        </h2>
                        <p class="small my-3 my-lg-4">
                            Through the centuries, people have improved their methods of protecting their homes from rain and sun, wind and heat. Roofing tiles have become one of the most popular coverings for pitched roofs. The essence has remained unchanged throughout the ages despite the appearance of more advanced, improved materials and the innovation of new techniques. Each individual colour or combination provides the opportunity to complement the style that will become the hallmark of your home. Summerland is a place where luxury and style are redefined in all their forms.
                        </p>   
                        <a href="#" class="btn btn-primary">Know More <i class="arrow"></i></a>
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

    <!-- Product Enquiry Form and validation Script -->
    <?php include_once('includes/product-enquire-modal-form-script.inc.php'); ?> 
 
</body>
</html>