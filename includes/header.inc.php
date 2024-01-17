 
 
    <!-- navigation start -->
    <nav class="navbar navbar-expand-xl  max-1920" id="mainNav">
        <div class="container-fluid position-relative">
            <a href="<?php echo $base_url;?>" class="navbar-brand">
                <img src="<?php echo $base_url;?>assets/images/logo.svg" width="272" height="64" class="w-auto" alt="Summerland">
            </a>  
            <div class="d-block d-none d-xl-block">  
                <div class="top__nav">
                    <div class="d-flex justify-content-end">
                        <a href="#" class="d-inline-flex align-items-center fw-semibold">
                            <img src="<?php echo $base_url;?>assets/images/icons/download.svg" class="img-fluid" width="20" height="20" alt="download">
                            <span>Download Brochure</span>
                        </a>
                        <a href="#" class="d-inline-flex align-items-center fw-semibold">
                            <img src="<?php echo $base_url;?>assets/images/icons/email.svg" class="img-fluid" width="27" height="20" alt="Email">
                            <span>info@summerland.co.in</span>
                        </a>
                        <a href="tel:+919495999128" class="btn btn-primary fw-semibold text-white rounded-0">
                            <img src="<?php echo $base_url;?>assets/images/icons/mobile-white.svg" class="img-fluid mobile" width="16" height="30" alt="Phone">
                            <span>+91 9495 999 128</span>
                            <!-- <span>+91 9987 654 321</span> -->
                        </a>
                    </div>
                </div>
                <ul class="navbar-nav align-items-center">   
                    <li class="nav-item d-none d-xxl-block">
                        <a href="<?php echo $base_url;?>" class="nav-link">Home</a>
                    </li>  
                    <li class="nav-item d-none d-xxl-block">
                        <a href="<?php echo $base_url;?>about.php" class="nav-link">About Us</a>
                    </li> 
                    <li class="nav-item dropdown "> 
                        <!-- <a href="<?php echo $base_url;?>sanitary-ware.php" class="nav-link dropdown-toggle">Sanitaryware</a> -->
                        <a href="#" class="nav-link dropdown-toggle" type="button" id="serviceDropDown3" data-bs-toggle="dropdown" aria-expanded="false">
                            Sanitaryware
                        </a>
                        <ul class="dropdown-menu border-0 bg-white p-2 shadow" aria-labelledby="serviceDropDown3">
                            <li><a class="dropdown-item rounded" href="<?php echo $base_url;?>ewcs.php">EWCs</a></li>
                            <li><a class="dropdown-item rounded" href="<?php echo $base_url;?>faucet.php">Faucets</a></li> 
                            <li><a class="dropdown-item rounded" href="<?php echo $base_url;?>washbasins.php">Washbasins</a></li>
                        </ul> 
                    </li>     
                    <li class="nav-item">
                        <a href="<?php echo $base_url;?>roofing-shingles.php" class="nav-link">Roofing Shingles</a>
                    </li>  
                    <li class="nav-item dropdown ">  
                        <a href="#" class="nav-link dropdown-toggle" type="button" id="serviceDropDown002" data-bs-toggle="dropdown" aria-expanded="false">
                            Crizerawud
                        </a>
                        <ul class="dropdown-menu border-0 bg-white p-2 shadow" aria-labelledby="serviceDropDown002">
                            <li><a class="dropdown-item rounded" href="<?php echo $base_url;?>pvc-form-boards.php">PVC Form Boards</a></li>
                            <li><a class="dropdown-item rounded" href="<?php echo $base_url;?>wpc-boards.php">WPC Boards</a></li>  
                        </ul> 
                    </li>     
                    <li class="nav-item dropdown "> 
                        <!-- <a href="<?php echo $base_url;?>roofing-tile.php" class="nav-link dropdown-toggle">Roof Tile</a> -->
                        <a href="#" class="nav-link dropdown-toggle" type="button" id="serviceDropDown3" data-bs-toggle="dropdown" aria-expanded="false">
                            Roof Tile
                        </a>
                        <ul class="dropdown-menu border-0 bg-white p-2 shadow" aria-labelledby="serviceDropDown3">
                            <li><a class="dropdown-item rounded" href="<?php echo $base_url;?>french-series.php">French Series</a></li>
                            <li><a class="dropdown-item rounded" href="<?php echo $base_url;?>german-series.php">German Series</a></li> 
                            <li><a class="dropdown-item rounded" href="<?php echo $base_url;?>east-asian-series.php">East Asian Series</a></li> 
                        </ul> 
                    </li>     
                    <li class="nav-item border_right"> 
                        <a href="<?php echo $base_url;?>buildwares.php" class="nav-link">Buildwares</a> 
                    </li>     
                     
                       
                    <li class="nav-item"> 
                        <button type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample" class="navbar-toggler"><span></span><span></span><span></span></button>  
                    </li>    
                </ul>  
            </div>  
            <button type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample" class="navbar-toggler d-xl-none"><span></span><span></span><span></span></button>  
        </div>
    </nav> 
    <!-- navigation end -->

    <!-- Mobile Btns -->
    <div class="d-flex d-sm-none justify-content-between bg-primary brochure__box px-2">
        <a href="#" class="d-inline-flex align-items-center fw-medium">
            <img src="<?php echo $base_url;?>assets/images/icons/download.svg" width="21" height="21" class="img-fluid download" alt="download">
            <span>Download Brochure</span>
        </a> 
        <a href="tel:+919495999128" class="d-inline-flex align-items-center fw-medium text-white rounded-0 shadow-none">
            <img src="<?php echo $base_url;?>assets/images/icons/mobile-white.svg" width="12" height="21" class="img-fluid mobile" alt="Phone">
            <span>+91 9495 999 128</span>
        </a>
    </div>
    <!-- Mobile Btns End -->

    <!-- Side Navigation Start -->
    <div class="offcanvas offcanvas-end sideNav" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header bg-primary">
            <p class="offcanvas-title lead-sm fw-semibold text-white mb-0 text-uppercase" id="offcanvasExampleLabel">Summerland</p>
            <button type="button" class="btn-close p-1 rounded-circle" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body px-0">
            <ul class="links__list">
                <li><a href="<?php echo $base_url;?>">Home</a></li>
                <li><a href="<?php echo $base_url;?>about.php">About Us</a></li>
                <li>
                    <div class="d-flex">
                        <!-- <a href="<?php echo $base_url;?>sanitary-ware.php" class="btn__link">Sanitaryware</a> -->
                        <a class="collapsed collapse__btn w-100" data-bs-toggle="collapse" href="#collapse001" role="button" aria-expanded="false" aria-controls="collapse001">
                            Sanitaryware
                        </a>
                    </div>
                    <ul class="collapse" id="collapse001">
                        <li><a href="<?php echo $base_url;?>ewcs.php">EWCs</a></li>
                        <li><a href="<?php echo $base_url;?>faucet.php">Faucets</a></li> 
                        <li><a href="<?php echo $base_url;?>washbasins.php">Washbasins</a></li>
                    </ul>
                </li>  
                <li><a href="<?php echo $base_url;?>roofing-shingles.php">Roofing Shingles</a></li>   
                <li>
                    <div class="d-flex">
                        <!-- <a href="<?php echo $base_url;?>roofing-tile.php" class="btn__link">Roof Tile</a> -->
                        <a class="collapsed collapse__btn w-100" data-bs-toggle="collapse" href="#collapse002" role="button" aria-expanded="false" aria-controls="collapse002">
                            Crizerawud
                        </a>
                    </div>
                    <ul class="collapse" id="collapse002">
                        <li><a href="<?php echo $base_url;?>pvc-form-boards.php">PVC Form Boards</a></li>
                        <li><a href="<?php echo $base_url;?>wpc-boards.php">WPC Boards</a></li>     
                    </ul>
                </li> 
                <li>
                    <div class="d-flex">
                        <!-- <a href="<?php echo $base_url;?>roofing-tile.php" class="btn__link">Roof Tile</a> -->
                        <a class="collapsed collapse__btn w-100" data-bs-toggle="collapse" href="#collapse003" role="button" aria-expanded="false" aria-controls="collapse003">
                            Roof Tile
                        </a>
                    </div>
                    <ul class="collapse" id="collapse003">
                        <li><a href="<?php echo $base_url;?>french-series.php">French Series</a></li>
                        <li><a href="<?php echo $base_url;?>german-series.php">German Series</a></li> 
                        <li><a href="<?php echo $base_url;?>east-asian-series.php">East Asian Series</a></li> 
                    </ul>
                </li> 
                <li>
                    <div class="d-flex">
                        <a href="<?php echo $base_url;?>buildwares.php" class="">Buildwares</a> 
                    </div> 
                </li>  
                <!-- <li><a href="<?php echo $base_url;?>blog/">Blog</a></li> -->
                <li><a href="<?php echo $base_url;?>contact.php">Contact Us</a></li>
            </ul>
        </div>
    </div><!--.//off-canvas-->
     
    <!-- Side Navigation End -->
     
 