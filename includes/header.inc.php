 
 
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
                    <li class="nav-item">
                        <a href="<?php echo $base_url;?>" class="nav-link">Home</a>
                    </li>  
                    <li class="nav-item">
                        <a href="<?php echo $base_url;?>about.php" class="nav-link">About Us</a>
                    </li> 
                    <li class="nav-item dropdown "> 
                        <a href="<?php echo $base_url;?>sanitary-ware.php" class="nav-link dropdown-toggle">Sanitaryware</a>
                        <a href="#" class="nav-link dropdown-toggle d-none" type="button" id="serviceDropDown3" data-bs-toggle="dropdown" aria-expanded="false">
                            #
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
                        <a href="<?php echo $base_url;?>tile-roofing.php" class="nav-link dropdown-toggle">Roof Tile</a>
                        <a href="#" class="nav-link dropdown-toggle d-none" type="button" id="serviceDropDown3" data-bs-toggle="dropdown" aria-expanded="false">
                            #
                        </a>
                        <div class="dropdown-menu border-0 bg-white p-0" aria-labelledby="serviceDropDown3">
                            <a href="<?php echo $base_url;?>roof-tile.php" class="dropdown-item">French Series</a>   
                            <a href="<?php echo $base_url;?>flat-roof-tile.php" class="dropdown-item">German Series</a>   
                            <a href="<?php echo $base_url;?>central-flat-roof-tile.php" class="dropdown-item">East Asian Series</a>   
                            <!-- <a href="<?php echo $base_url;?>roof-tile.php" class="dropdown-item">Roof tile</a>   
                            <a href="<?php echo $base_url;?>flat-roof-tile.php" class="dropdown-item">Flat Roof tile</a>   
                            <a href="<?php echo $base_url;?>central-flat-roof-tile.php" class="dropdown-item">Central Flat Roof tile</a>    -->
                        </div> 
                    </li>     
                    <li class="nav-item dropdown border_right"> 
                        <a href="#" class="nav-link dropdown-toggle">Buildwares</a>
                        <a href="#" class="nav-link dropdown-toggle d-none" type="button" id="serviceDropDown3" data-bs-toggle="dropdown" aria-expanded="false">
                            #
                        </a>
                        <div class="dropdown-menu border-0 bg-white p-0" aria-labelledby="serviceDropDown3">
                            <a href="#" class="dropdown-item">Manhole Covers</a>   
                            <a href="#" class="dropdown-item">Cutoff Wheel</a>   
                            <a href="#" class="dropdown-item">Water Tank Filter</a>   
                            <a href="#" class="dropdown-item">Silicone Sealant</a>   
                            <a href="#" class="dropdown-item">Concrete Nails</a>    
                        </div> 
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
        <a href="#" class="d-inline-flex align-items-center">
            <img src="<?php echo $base_url;?>assets/images/icons/download.svg" class="img-fluid download" alt="download">
            <span>Download Brochure</span>
        </a> 
        <a href="tel:+919987654321" class="d-inline-flex align-items-center text-white rounded-0 shadow-none">
            <img src="<?php echo $base_url;?>assets/images/icons/mobile-white.svg" class="img-fluid mobile" alt="download">
            <span>+91 9987 654 321</span>
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
                        <a href="<?php echo $base_url;?>sanitary-ware.php" class="btn__link">Sanitaryware</a>
                        <a class="collapsed collapse__btn border-start" data-bs-toggle="collapse" href="#collapse001" role="button" aria-expanded="false" aria-controls="collapse001">
                        </a>
                    </div>
                    <ul class="collapse" id="collapse001">
                        <li><a href="#" class="dropdown-item">EWC’s Faucets</a></li>   
                        <li><a href="#" class="dropdown-item">Washbasins</a></li>  
                    </ul>
                </li>  
                <li><a href="<?php echo $base_url;?>roofing-shingles.php">Roofing Shingles</a></li>   
                <li>
                    <div class="d-flex">
                        <a href="<?php echo $base_url;?>tile-roofing.php" class="btn__link">Roof Tile</a>
                        <a class="collapsed collapse__btn border-start" data-bs-toggle="collapse" href="#collapse002" role="button" aria-expanded="false" aria-controls="collapse002">
                        </a>
                    </div>
                    <ul class="collapse" id="collapse002">
                        <li><a href="#" class="dropdown-item">French Series</a></li>  
                        <li><a href="#" class="dropdown-item">German Series</a></li>   
                        <li><a href="#" class="dropdown-item">East Asian Series</a></li>   
                    </ul>
                </li> 
                <li>
                    <div class="d-flex">
                        <a href="#" class="btn__link">Buildwares</a>
                        <a class="collapsed collapse__btn border-start" data-bs-toggle="collapse" href="#collapse003" role="button" aria-expanded="false" aria-controls="collapse003">
                        </a>
                    </div>
                    <ul class="collapse" id="collapse003">
                        <li><a href="#" class="dropdown-item">Manhole Covers</a></li>   
                        <li><a href="#" class="dropdown-item">Cutoff Wheel</a></li>   
                        <li><a href="#" class="dropdown-item">Water Tank Filter</a></li>   
                        <li><a href="#" class="dropdown-item">Silicone Sealant</a></li>   
                        <li><a href="#" class="dropdown-item">Concrete Nails</a></li>  
                    </ul>
                </li>  
                <!-- <li><a href="<?php echo $base_url;?>blog/">Blog</a></li> -->
                <li><a href="<?php echo $base_url;?>contact.php">Contact Us</a></li>
            </ul>
        </div>
    </div><!--.//off-canvas-->
     
    <!-- Side Navigation End -->
     
 