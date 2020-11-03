<div class="header-section section bg-white d-none d-xl-block">
    <div class="container">
        <div class="row row-cols-lg-3 align-items-center">

            <!-- Header Language & Currency Start -->
            <div class="col">
                <ul class="header-lan-curr">
                    
                </ul>
            </div>
            <!-- Header Language & Currency End -->

            <!-- Header Logo Start -->
            <div class="col">
                <div class="header-logo justify-content-center">
                    <a href="index.html"><img src="assets/images/logo/logo.png" alt="Learts Logo"></a>
                </div>
            </div>
            <!-- Header Logo End -->

            <!-- Header Tools Start -->
            <div class="col">
                <div class="header-tools justify-content-end">
                   
                    <div class="header-search">
                        <a href="#offcanvas-search" class="offcanvas-toggle"><i class="fal fa-search"></i></a>
                    </div>
                    
                </div>
            </div>
            <!-- Header Tools End -->

        </div>
    </div>

    <!-- Site Menu Section Start -->
    <div class="site-menu-section section">
        <div class="container">
            <nav class="site-main-menu justify-content-center">
                <ul>
                    <li class="has-children">
                        <a href="#">
                            <span class="menu-text">Home</span>
                        </a>
                    </li>
                    <?php foreach ($dataCat as $value ){ ?>
                    <li class="has-children">
                        <a href="#">
                            <span class="menu-text"><?= $value['cat_name']; ?></span>
                        </a>
                    </li>
                    <?php } ?>
                    <li class="has-children">
                        <a href="#">
                            <span class="menu-text">News</span>
                        </a>
                    </li>
                    <li class="has-children">
                        <a href="#">
                            <span class="menu-text">About</span>
                        </a>
                    </li>
                    
                </ul>
            </nav>
        </div>
    </div>
    <!-- Site Menu Section End -->

</div>