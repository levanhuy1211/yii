<?php
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<!-- Slider main container Start -->
    <div class="section">
        <div class="container">
            <div class="home4-slider swiper-container">
                <div class="swiper-wrapper">
                    <?php foreach ($dataBanner as $key=>$value ) {?>
                  
                    <div class="home4-slide-item swiper-slide" data-swiper-autoplay="5000">
                        <div class="home4-slide-image">
                            <img src="<?= $value['banner_image'];?>"></div>
                        <div class="home4-slide-content">
                            <span class="category"><?= $value['banner_text_top'];?></span>
                            <h2 class="title"><?= $value['banner_text_dow'];?></h2>
                            <div class="link"><a href="shop.html" class="btn btn-black btn-outline-hover-black">shop now</a></div>
                        </div>
                    </div>
                    <?php }?>
                </div>
                <div class="home4-slider-prev swiper-button-prev"><i class="ti-angle-left"></i></div>
                <div class="home4-slider-next swiper-button-next"><i class="ti-angle-right"></i></div>
                <div class="home4-slider-pagination swiper-pagination"></div>
            </div>
        </div>
    </div>
    <!-- Slider main container End -->

<!-- Sale Banner Section Start -->
<div class="section section-padding">
    <div class="container">

        <!-- Section Title Start -->
        <div class="section-title text-center">
            <h3 class="sub-title">Just for you</h3>
            <h2 class="title title-icon-both">Making & crafting</h2>
        </div>
        <!-- Section Title End -->

        <div class="row learts-mb-n40">

            <div class="col-lg-5 col-md-6 col-12 mr-auto learts-mb-40">
                <div class="sale-banner1" data-bg-image="assets/images/banner/sale/sale-banner1-1.png">
                    <div class="inner">
                        <img src="assets/images/banner/sale/sale-banner1-1.1.png" alt="Sale Banner Icon">
                        <span class="title">Spring sale</span>
                        <h2 class="sale-percent">
                            <span class="number">40</span> % <br> off
                        </h2>
                        <a href="shop.html" class="link">shop now</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12 learts-mb-40">
                <div class="sale-banner2">
                    <div class="inner">
                        <div class="image"><img src="assets/images/banner/sale/sale-banner2-1.jpg" alt=""></div>
                        <div class="content row justify-content-between mb-n3">
                            <div class="col-auto mb-3">
                                <h2 class="sale-percent">10% off</h2>
                                <span class="text">YOUR NEXT PURCHASE</span>
                            </div>
                            <div class="col-auto mb-3">
                                <a class="btn btn-hover-dark" href="shop.html">SHOP NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Sale Banner Section End -->

<!-- Category Banner Section Start -->
<div class="section section-fluid section-padding pt-0">
    <div class="container">
        <div class="category-banner1-carousel">

            <div class="col">
                <div class="category-banner1">
                    <div class="inner">
                        <a href="shop.html" class="image"><img src="assets/images/banner/category/banner-s1-1.jpg" alt=""></a>
                        <div class="content">
                            <h3 class="title">
                                <a href="shop.html">Gift ideas</a>
                                <span class="number">16</span>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="category-banner1">
                    <div class="inner">
                        <a href="shop.html" class="image"><img src="assets/images/banner/category/banner-s1-2.jpg" alt=""></a>
                        <div class="content">
                            <h3 class="title">
                                <a href="shop.html">Home Decor</a>
                                <span class="number">16</span>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="category-banner1">
                    <div class="inner">
                        <a href="shop.html" class="image"><img src="assets/images/banner/category/banner-s1-3.jpg" alt=""></a>
                        <div class="content">
                            <h3 class="title">
                                <a href="shop.html">Kids & Babies</a>
                                <span class="number">6</span>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="category-banner1">
                    <div class="inner">
                        <a href="shop.html" class="image"><img src="assets/images/banner/category/banner-s1-4.jpg" alt=""></a>
                        <div class="content">
                            <h3 class="title">
                                <a href="shop.html">Kitchen</a>
                                <span class="number">15</span>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="category-banner1">
                    <div class="inner">
                        <a href="shop.html" class="image"><img src="assets/images/banner/category/banner-s1-5.jpg" alt=""></a>
                        <div class="content">
                            <h3 class="title">
                                <a href="shop.html">Kniting & Sewing</a>
                                <span class="number">4</span>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Category Banner Section End -->

<!-- Product Section Start -->
<div class="section section-fluid section-padding pt-0">
    <div class="container">

        <!-- Section Title Start -->
        <div class="section-title text-center">
            <h3 class="sub-title">Shop now</h3>
            <h2 class="title title-icon-both">Shop our best-sellers</h2>
        </div>
        <!-- Section Title End -->

        <!-- Products Start -->
        <div class="products row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1">

            <div class="col">
                <div class="product">
                    <div class="product-thumb">
                        <a href="product-details.html" class="image">
                            <span class="product-badges">
                                <span class="onsale">-13%</span>
                            </span>
                            <img src="assets/images/product/s328/product-1.jpg" alt="Product Image">
                            <img class="image-hover " src="assets/images/product/s328/product-1-hover.jpg" alt="Product Image">
                        </a>
                        <a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                    </div>
                    <div class="product-info">
                        <h6 class="title"><a href="product-details.html">Boho Beard Mug</a></h6>
                        <span class="price">
                            <span class="old">$45.00</span>
                        <span class="new">$39.00</span>
                        </span>
                        <div class="product-buttons">
                            <a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fal fa-search"></i></a>
                            <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
                            <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fal fa-random"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="product">
                    <div class="product-thumb">
                        <a href="product-details.html" class="image">
                            <img src="assets/images/product/s328/product-2.jpg" alt="Product Image">
                            <img class="image-hover " src="assets/images/product/s328/product-2-hover.jpg" alt="Product Image">
                        </a>
                        <a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                    </div>
                    <div class="product-info">
                        <h6 class="title"><a href="product-details.html">Motorized Tricycle</a></h6>
                        <span class="price">
                            $35.00
                        </span>
                        <div class="product-buttons">
                            <a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fal fa-search"></i></a>
                            <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
                            <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fal fa-random"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="product">
                    <div class="product-thumb">
                        <span class="product-badges">
                            <span class="hot">hot</span>
                        </span>
                        <a href="product-details.html" class="image">
                            <img src="assets/images/product/s328/product-3.jpg" alt="Product Image">
                            <img class="image-hover " src="assets/images/product/s328/product-3-hover.jpg" alt="Product Image">
                        </a>
                        <a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                    </div>
                    <div class="product-info">
                        <h6 class="title"><a href="product-details.html">Walnut Cutting Board</a></h6>
                        <span class="price">
                            $100.00
                        </span>
                        <div class="product-buttons">
                            <a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fal fa-search"></i></a>
                            <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
                            <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fal fa-random"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="product">
                    <div class="product-thumb">
                        <a href="product-details.html" class="image">
                            <span class="product-badges">
                                <span class="onsale">-27%</span>
                            </span>
                            <img src="assets/images/product/s328/product-4.jpg" alt="Product Image">
                            <img class="image-hover " src="assets/images/product/s328/product-4-hover.jpg" alt="Product Image">
                        </a>
                        <a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                    </div>
                    <div class="product-info">
                        <h6 class="title"><a href="product-details.html">Pizza Plate Tray</a></h6>
                        <span class="price">
                            <span class="old">$30.00</span>
                        <span class="new">$22.00</span>
                        </span>
                        <div class="product-buttons">
                            <a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fal fa-search"></i></a>
                            <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
                            <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fal fa-random"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="product">
                    <div class="product-thumb">
                        <a href="product-details.html" class="image">
                            <img src="assets/images/product/s328/product-5.jpg" alt="Product Image">
                            <img class="image-hover " src="assets/images/product/s328/product-5-hover.jpg" alt="Product Image">
                        </a>
                        <a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                        <div class="product-options">
                            <ul class="colors">
                                <li style="background-color: #c2c2c2;">color one</li>
                                <li style="background-color: #374140;">color two</li>
                                <li style="background-color: #8ea1b2;">color three</li>
                            </ul>
                            <ul class="sizes">
                                <li>Large</li>
                                <li>Medium</li>
                                <li>Small</li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-info">
                        <h6 class="title"><a href="product-details.html">Minimalist Ceramic Pot</a></h6>
                        <span class="price">
                            $120.00
                        </span>
                        <div class="product-buttons">
                            <a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fal fa-search"></i></a>
                            <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
                            <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fal fa-random"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="product">
                    <div class="product-thumb">
                        <a href="product-details.html" class="image">
                            <img src="assets/images/product/s328/product-6.jpg" alt="Product Image">
                            <img class="image-hover " src="assets/images/product/s328/product-6-hover.jpg" alt="Product Image">
                        </a>
                        <a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                    </div>
                    <div class="product-info">
                        <h6 class="title"><a href="product-details.html">Clear Silicate Teapot</a></h6>
                        <span class="price">
                            $140.00
                        </span>
                        <div class="product-buttons">
                            <a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fal fa-search"></i></a>
                            <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
                            <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fal fa-random"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="product">
                    <div class="product-thumb">
                        <a href="product-details.html" class="image">
                            <span class="product-badges">
                                <span class="hot">hot</span>
                            </span>
                            <img src="assets/images/product/s328/product-7.jpg" alt="Product Image">
                            <img class="image-hover " src="assets/images/product/s328/product-7-hover.jpg" alt="Product Image">
                        </a>
                        <a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                    </div>
                    <div class="product-info">
                        <h6 class="title"><a href="product-details.html">Lucky Wooden Elephant</a></h6>
                        <span class="price">
                            $35.00
                        </span>
                        <div class="product-buttons">
                            <a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fal fa-search"></i></a>
                            <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
                            <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fal fa-random"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="product">
                    <div class="product-thumb">
                        <a href="product-details.html" class="image">
                            <span class="product-badges">
                                <span class="outofstock"><i class="fal fa-frown"></i></span>
                            <span class="hot">hot</span>
                            </span>
                            <img src="assets/images/product/s328/product-8.jpg" alt="Product Image">
                            <img class="image-hover " src="assets/images/product/s328/product-8-hover.jpg" alt="Product Image">
                        </a>
                        <a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                        <div class="product-options">
                            <ul class="colors">
                                <li style="background-color: #000000;">color one</li>
                                <li style="background-color: #b2483c;">color two</li>
                            </ul>
                            <ul class="sizes">
                                <li>Large</li>
                                <li>Medium</li>
                                <li>Small</li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-info">
                        <h6 class="title"><a href="product-details.html">Decorative Christmas Fox</a></h6>
                        <span class="price">
                            $50.00
                        </span>
                        <div class="product-buttons">
                            <a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fal fa-search"></i></a>
                            <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
                            <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fal fa-random"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="product">
                    <div class="product-thumb">
                        <a href="product-details.html" class="image">
                            <img src="assets/images/product/s328/product-9.jpg" alt="Product Image">
                            <img class="image-hover " src="assets/images/product/s328/product-9-hover.jpg" alt="Product Image">
                        </a>
                        <a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                    </div>
                    <div class="product-info">
                        <h6 class="title"><a href="product-details.html">Aluminum Equestrian</a></h6>
                        <span class="price">
                            $100.00
                        </span>
                        <div class="product-buttons">
                            <a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fal fa-search"></i></a>
                            <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
                            <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fal fa-random"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="product">
                    <div class="product-thumb">
                        <a href="product-details.html" class="image">
                            <img src="assets/images/product/s328/product-10.jpg" alt="Product Image">
                            <img class="image-hover " src="assets/images/product/s328/product-10-hover.jpg" alt="Product Image">
                        </a>
                        <a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                    </div>
                    <div class="product-info">
                        <h6 class="title"><a href="product-details.html">Fish Cut Out Set</a></h6>
                        <span class="price">
                            $9.00
                        </span>
                        <div class="product-buttons">
                            <a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fal fa-search"></i></a>
                            <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
                            <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fal fa-random"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="product">
                    <div class="product-thumb">
                        <a href="product-details.html" class="image">
                            <img src="assets/images/product/s328/product-11.jpg" alt="Product Image">
                            <img class="image-hover " src="assets/images/product/s328/product-11-hover.jpg" alt="Product Image">
                        </a>
                        <a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                    </div>
                    <div class="product-info">
                        <h6 class="title"><a href="product-details.html">Electric Egg Blender</a></h6>
                        <span class="price">
                            $200.00
                        </span>
                        <div class="product-buttons">
                            <a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fal fa-search"></i></a>
                            <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
                            <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fal fa-random"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="product">
                    <div class="product-thumb">
                        <a href="product-details.html" class="image">
                            <img src="assets/images/product/s328/product-12.jpg" alt="Product Image">
                            <img class="image-hover " src="assets/images/product/s328/product-12-hover.jpg" alt="Product Image">
                        </a>
                        <a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                    </div>
                    <div class="product-info">
                        <h6 class="title"><a href="product-details.html">Cape Cottage Playhouse</a></h6>
                        <span class="price">
                            $35.00
                        </span>
                        <div class="product-buttons">
                            <a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fal fa-search"></i></a>
                            <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
                            <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fal fa-random"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="product">
                    <div class="product-thumb">
                        <a href="product-details.html" class="image">
                            <img src="assets/images/product/s328/product-13.jpg" alt="Product Image">
                            <img class="image-hover " src="assets/images/product/s328/product-13-hover.jpg" alt="Product Image">
                        </a>
                        <a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                        <div class="product-options">
                            <ul class="colors">
                                <li style="background-color: #ffffff;">color one</li>
                                <li style="background-color: #01796f;">color two</li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-info">
                        <h6 class="title"><a href="product-details.html">Kernel Popcorn Bowl</a></h6>
                        <span class="price">
                            $25.00
                        </span>
                        <div class="product-buttons">
                            <a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fal fa-search"></i></a>
                            <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
                            <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fal fa-random"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="product">
                    <div class="product-thumb">
                        <a href="product-details.html" class="image">
                            <span class="product-badges">
                                <span class="outofstock"><i class="fal fa-frown"></i></span>
                            </span>
                            <img src="assets/images/product/s328/product-14.jpg" alt="Product Image">
                            <img class="image-hover " src="assets/images/product/s328/product-14-hover.jpg" alt="Product Image">
                        </a>
                        <a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                        <div class="product-options">
                            <ul class="colors">
                                <li style="background-color: #000000;">color one</li>
                                <li style="background-color: #ffffff;">color two</li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-info">
                        <h6 class="title"><a href="product-details.html">Abstract Folded Pots</a></h6>
                        <span class="price">
                            $50.00 - $55.00
                        </span>
                        <div class="product-buttons">
                            <a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fal fa-search"></i></a>
                            <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
                            <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fal fa-random"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="product">
                    <div class="product-thumb">
                        <a href="product-details.html" class="image">
                            <img src="assets/images/product/s328/product-15.jpg" alt="Product Image">
                            <img class="image-hover " src="assets/images/product/s328/product-15-hover.jpg" alt="Product Image">
                        </a>
                        <a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                    </div>
                    <div class="product-info">
                        <h6 class="title"><a href="product-details.html">Brush & Dustpan Set</a></h6>
                        <span class="price">
                            $9.00
                        </span>
                        <div class="product-buttons">
                            <a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fal fa-search"></i></a>
                            <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
                            <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fal fa-random"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Products End -->

    </div>
</div>
<!-- Product Section End -->