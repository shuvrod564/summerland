 

    <nav aria-label="Blog Page Navigation">
        <ul class="pagination mt-4 mt-md-5 justify-content-end justify-content-lg-start" id="blogPaginatio">
            <?php if( $prevBtn === 'true' ) { ?> 
                <li class="page-item">
                    <a class="page-link" href="<?php echo $prevPageUrl; ?>" aria-label="Previous">
                        <img src="./blog/images/icon/arrow-left.svg" class="img-fluid" alt="Icon">
                    </a>
                </li>
            <?php } ?> 
             
                <li class="page-item">
                    <?php if(!$currentPageUrl) { ?>
                        <a class="page-link <?php if($active==='1'){echo "active"; }else{ echo ''; }?>" href="<?php echo $currentPageUrl; ?>"><?php echo $prevPageNum; ?></a>
                        <?php } else { ?>
                            <a class="page-link <?php if($active==='1'){echo "active"; }else{ echo ''; }?>" href="<?php echo $prevPageUrl; ?>"><?php echo $prevPageNum; ?></a>
                    <?php } ?>
                </li>
                <?php if($totalPage==='2') { ?>
                    <li class="page-item">
                        <a class="page-link <?php if($active==='2'){echo "active"; }else{ echo ''; }?>" href="<?php echo $currentPageUrl; ?>"><?php echo $currentPageNum; ?></a>
                    </li>
                <?php } ?>
                <?php if($totalPage==='3') { ?>
                    <li class="page-item">
                        <a class="page-link <?php if($active==='3'){echo "active"; }else{ echo ''; }?>" href="<?php echo $currentPageUrl; ?>"><?php echo $currentPageNum; ?></a>
                    </li>
                <?php } ?>
             
            <?php if( $nexBtn === 'true' ) { ?> 
                <li class="page-item">
                    <a class="page-link" href="<?php echo $nextPageUrl; ?>" aria-label="Next">
                        <img src="./blog/images/icon/arrow-right.svg" class="img-fluid" alt="Icon">
                    </a>
                </li>
            <?php } ?>
        </ul>
    </nav>