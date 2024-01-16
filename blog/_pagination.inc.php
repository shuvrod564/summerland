 

    <nav aria-label="Blog Page Navigation">
        <ul class="pagination mt-4 mt-md-5 justify-content-end justify-content-lg-start" id="blogPagination">
            <?php if( $firstArrow === 'true' ) { ?> 
                <li class="page-item">
                    <a class="page-link" href="<?php echo $prevPageUrl; ?>" aria-label="Previous">
                        <img src="images/icon/arrow-left.svg" class="img-fluid" alt="Icon">
                    </a>
                </li>
            <?php } ?> 
            <li class="page-item">
                <a class="page-link <?php if($active==='1'){echo "active"; }else{ echo ''; }?>" href="index.php">1</a>
            </li>
            <li class="page-item">
                <a class="page-link <?php if($active==='2'){echo "active"; }else{ echo ''; }?>" href="#">2</a> 
            </li>  
            <li class="page-item">
                <a class="page-link <?php if($active==='3'){echo "active"; }else{ echo ''; }?>" href="#">3</a>
            </li>
            <li class="page-item">
                <a class="page-link <?php if($active==='4'){echo "active"; }else{ echo ''; }?>" href="#">4</a>
            </li> 
            <?php if( $lastArrow === 'true' ) { ?> 
                <li class="page-item">
                    <a class="page-link" href="<?php echo $nextPageUrl; ?>" aria-label="Next">
                        <img src="images/icon/arrow-right.svg" class="img-fluid" alt="Icon">
                    </a>
                </li>
            <?php } ?>
        </ul>
    </nav>