
        <?php include 'include/header.php';?>
    
    <!-- // banner -->
        <section class="hero_banner">
            <div class="container">
                <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item" data-bs-interval="10000">
                            <div class="row align-items-center d-flex">
                                <div class="col-xl-5 col-md-6">
                                    <div class="carousel_caption">
                                        <img src="assets/images/flairee-logo.png" alt="flairee logo" class="mb-4 sliderlogo" />
                                        <h5 class="banner_title mt-3 mb-4"> collectible miniatures and art dolls</h5>
                                        <img src="assets/images/banner-border.png" class="mb-4" alt="banner patter" />
                                        <p>ELITE artists from all over the world <span class="d-md-block"> only HANDMADE works and only FOR YOU</span></p>
                                    </div>
                                </div>
                                <div class="col-xl-7 col-md-6"><img src="assets/images/Banner.png" class="img-fluid" alt="slider" /></div>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <div class="row align-items-center d-flex">
                                <div class="col-xl-5 col-md-6">
                                    <div class="carousel_caption">
                                        <img src="assets/images/flairee-logo.png" alt="flairee logo" class="mb-4 sliderlogo" />
                                        <h5 class="banner_title mt-3 mb-4">collectible miniatures and art dolls</h5>
                                        <img src="assets/images/banner-border.png" class="mb-4" alt="banner patter" />
                                        <p>ELITE artists from all over the world <span class="d-md-block"> only HANDMADE works and only FOR YOU</span></p>
                                    </div>
                                </div>
                                <div class="col-xl-7 col-md-6"><img src="assets/images/Banner.png" class="img-fluid" alt="slider" /></div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row align-items-center d-flex">
                                <div class="col-xl-5 col-md-6">
                                    <div class="carousel_caption">
                                        <img src="assets/images/flairee-logo.png" alt="flairee logo" class="mb-4 sliderlogo" />
                                        <h5 class="banner_title mt-3 mb-4">collectible miniatures and art dolls</h5>
                                        <img src="assets/images/banner-border.png" class="mb-4" alt="banner patter" />
                                        <p>ELITE artists from all over the world <span class="d-md-block"> only HANDMADE works and only FOR YOU</span></p>
                                    </div>
                                </div>
                                <div class="col-xl-7 col-md-6"><img src="assets/images/Banner.png" class="img-fluid" alt="slider" /></div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section>
        <!--  product list tabs -->
        <section class="product_list_tabs">
            <div class="container">
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-highlights-tab" data-bs-toggle="tab" data-bs-target="#nav-highlights" type="button" role="tab" aria-controls="nav-highlights" aria-selected="true">Highlights</button>

                    <button class="nav-link" id="nav-products-tab" data-bs-toggle="tab" data-bs-target="#nav-products" type="button" role="tab" aria-controls="nav-products" aria-selected="false">New Products</button>

                    <button class="nav-link" id="nav-bestsellers-tab" data-bs-toggle="tab" data-bs-target="#nav-bestsellers" type="button" role="tab" aria-controls="nav-bestsellers" aria-selected="false">Bestsellers</button>

                    <button class="nav-link" id="nav-auction-tab" data-bs-toggle="tab" data-bs-target="#nav-auction" type="button" role="tab" aria-controls="nav-auction" aria-selected="false">Current Auctions</button>

                    <button class="nav-link" id="nav-done-sales" data-bs-toggle="tab" data-bs-target="#nav-sales" type="button" role="tab" aria-controls="nav-sales" aria-selected="false">Current Sales</button>
                </div>

                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-highlights" role="tabpanel" aria-labelledby="nav-highlights-tab">
                        <div class="my-4">
                            <div class="row">
                                <div class="col-xl-5 offset-xl-7">
                                    <form class="d-flex justify-content-end flex-around mb-4">
                                        <div class="selectfilter me-4">
                                            <label class="me-3"> Show </label>
                                            <select class="me-3">
                                                <option selected>all </option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="selectfilter selectfiltercheckbox">
                                            <label><input type="checkbox" /> Available Only </label>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="row gx-xl-5 gx-3 mb-xl-5">
                                <div class="col-xl-3 col-md-4 col-6 product-item">
                                    <div class="card product-card h-100">
                                        <button class="btn-wishlist" type="button"><i class="bi bi-heart"></i></button>

                                        <span class="arrow-tag arrow-discount"> -10% </span>

                                        <a class="card-img-top d-block overflow-hidden" href="#"><img src="assets/images/reactagnle1.png" alt="Product" /></a>

                                        <div class="pt-2">
                                            <h3 class="product-title fs-sm"><a href="#">OOAK Miniature Mouse G…</a></h3>

                                            <a class="product-meta d-block product-card-catgory pb-1" href="#">Topuslandia</a>
                                            <div class="d-flex justify-content-between">
                                                <div class="product-price"><span class="text-accent me-2 text_primary">€312.00</span> <del>€280.80</del></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-6 product-item">
                                    <div class="card product-card h-100">
                                        <button class="btn-wishlist" type="button"><i class="bi bi-heart-fill"></i></button>

                                        <a class="card-img-top d-block overflow-hidden" href="#"><img src="assets/images/reactagnle2.png" alt="Product" /></a>

                                        <div class="pt-2">
                                            <h3 class="product-title fs-sm"><a href="#">VIDEO Sculpting teeth tut...</a></h3>

                                            <a class="product-meta d-block product-card-catgory pb-1" href="#">Elettra</a>
                                            <div class="d-flex justify-content-between">
                                                <div class="product-price"><span class="text-accent me-2 text_primary">€312.00</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-md-4 col-6 product-item">
                                    <div class="card product-card h-100">
                                        <button class="btn-wishlist" type="button"><i class="bi bi-heart"></i></button>
                                        <span class="arrow-tag arrow-discount arrow-Auction"> Auction </span>
                                        <a class="card-img-top d-block overflow-hidden" href="#"><img src="assets/images/reactagnle3.png" alt="Product" /></a>

                                        <div class="pt-2">
                                            <h3 class="product-title fs-sm"><a href="#">Wooden sofa completely...</a></h3>

                                            <a class="product-meta d-block product-card-catgory pb-1" href="#">Hungarian Mminiatures</a>
                                            <div class="d-flex justify-content-between">
                                                <div class="product-price"><span class="text-accent me-2 text_primary">€312.00</span> <del>€280.80</del></div>

                                                <div class="product_timer">
                                                    <span class="text-danger">22 h 5 min left </span>
                                                </div>
                                            </div>

                                            <div class="d-flex justify-content-between">
                                                <span>33 Bids</span>

                                                <a href="#" class="arrow-tag arrow-shipping">Free Shipping</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-md-4 col-6 product-item">
                                    <div class="card product-card h-100">
                                        <button class="btn-wishlist" type="button"><i class="bi bi-heart-fill"></i></button>

                                        <a class="card-img-top d-block overflow-hidden" href="#"><img src="assets/images/reactagnle4.png" alt="Product" /></a>

                                        <div class="pt-2">
                                            <h3 class="product-title fs-sm"><a href="#">Dracaena flower in a pot</a></h3>

                                            <a class="product-meta d-block product-card-catgory pb-1" href="#">Topuslandia</a>
                                            <div class="d-flex justify-content-between">
                                                <div class="product-price"><span class="text-accent me-2 text_primary">Reserved </span></div>
                                            </div>

                                            <div class="d-flex justify-content-between">
                                                <span>&nbsp;</span>
                                                <a href="#" class="arrow-tag arrow-shipping float-end">Free Shipping</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-md-4 col-6 product-item">
                                    <div class="card product-card h-100">
                                        <button class="btn-wishlist" type="button"><i class="bi bi-heart"></i></button>

                                        <span class="arrow-tag arrow-discount"> -10% </span>

                                        <a class="card-img-top d-block overflow-hidden" href="#"><img src="assets/images/reactagnle1.png" alt="Product" /></a>

                                        <div class="pt-2">
                                            <h3 class="product-title fs-sm"><a href="#">OOAK Miniature Mouse G…</a></h3>

                                            <a class="product-meta d-block product-card-catgory pb-1" href="#">Topuslandia</a>
                                            <div class="d-flex justify-content-between">
                                                <div class="product-price"><span class="text-accent me-2 text_primary">€312.00</span> <del>€280.80</del></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-6 product-item">
                                    <div class="card product-card h-100">
                                        <button class="btn-wishlist" type="button"><i class="bi bi-heart-fill"></i></button>

                                        <a class="card-img-top d-block overflow-hidden" href="#"><img src="assets/images/reactagnle2.png" alt="Product" /></a>

                                        <div class="pt-2">
                                            <h3 class="product-title fs-sm"><a href="#">VIDEO Sculpting teeth tut...</a></h3>

                                            <a class="product-meta d-block product-card-catgory pb-1" href="#">Elettra</a>
                                            <div class="d-flex justify-content-between">
                                                <div class="product-price"><span class="text-accent me-2 text_primary">€312.00</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-md-4 col-6 product-item">
                                    <div class="card product-card h-100">
                                        <button class="btn-wishlist" type="button"><i class="bi bi-heart"></i></button>
                                        <span class="arrow-tag arrow-discount arrow-Auction"> Auction </span>
                                        <a class="card-img-top d-block overflow-hidden" href="#"><img src="assets/images/reactagnle3.png" alt="Product" /></a>

                                        <div class="pt-2">
                                            <h3 class="product-title fs-sm"><a href="#">Wooden sofa completely...</a></h3>

                                            <a class="product-meta d-block product-card-catgory pb-1" href="#">Hungarian Mminiatures</a>
                                            <div class="d-flex justify-content-between">
                                                <div class="product-price"><span class="text-accent me-2 text_primary">€312.00</span> <del>€280.80</del></div>

                                                <div class="product_timer">
                                                    <span class="text-danger">22 h 5 min left </span>
                                                </div>
                                            </div>

                                            <div class="d-flex justify-content-between">
                                                <span>33 Bids</span>

                                                <a href="#" class="arrow-tag arrow-shipping">Free Shipping</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-md-4 col-6 product-item">
                                    <div class="card product-card h-100">
                                        <button class="btn-wishlist" type="button"><i class="bi bi-heart-fill"></i></button>

                                        <a class="card-img-top d-block overflow-hidden" href="#"><img src="assets/images/reactagnle4.png" alt="Product" /></a>

                                        <div class="pt-2">
                                            <h3 class="product-title fs-sm"><a href="#">Dracaena flower in a pot</a></h3>

                                            <a class="product-meta d-block product-card-catgory pb-1" href="#">Topuslandia</a>
                                            <div class="d-flex justify-content-between">
                                                <div class="product-price"><span class="text-accent me-2 text_primary">Reserved </span></div>
                                            </div>

                                            <div class="d-flex justify-content-between">
                                                <span>&nbsp;</span>
                                                <a href="#" class="arrow-tag arrow-shipping float-end">Free Shipping</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-md-4 col-6 product-item">
                                    <div class="card product-card h-100">
                                        <button class="btn-wishlist" type="button"><i class="bi bi-heart"></i></button>

                                        <span class="arrow-tag arrow-discount"> -10% </span>

                                        <a class="card-img-top d-block overflow-hidden" href="#"><img src="assets/images/reactagnle1.png" alt="Product" /></a>

                                        <div class="pt-2">
                                            <h3 class="product-title fs-sm"><a href="#">OOAK Miniature Mouse G…</a></h3>

                                            <a class="product-meta d-block product-card-catgory pb-1" href="#">Topuslandia</a>
                                            <div class="d-flex justify-content-between">
                                                <div class="product-price"><span class="text-accent me-2 text_primary">€312.00</span> <del>€280.80</del></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-6 product-item">
                                    <div class="card product-card h-100">
                                        <button class="btn-wishlist" type="button"><i class="bi bi-heart-fill"></i></button>

                                        <a class="card-img-top d-block overflow-hidden" href="#"><img src="assets/images/reactagnle2.png" alt="Product" /></a>

                                        <div class="pt-2">
                                            <h3 class="product-title fs-sm"><a href="#">VIDEO Sculpting teeth tut...</a></h3>

                                            <a class="product-meta d-block product-card-catgory pb-1" href="#">Elettra</a>
                                            <div class="d-flex justify-content-between">
                                                <div class="product-price"><span class="text-accent me-2 text_primary">€312.00</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-md-4 col-6 product-item">
                                    <div class="card product-card h-100">
                                        <button class="btn-wishlist" type="button"><i class="bi bi-heart"></i></button>
                                        <span class="arrow-tag arrow-discount arrow-Auction"> Auction </span>
                                        <a class="card-img-top d-block overflow-hidden" href="#"><img src="assets/images/reactagnle3.png" alt="Product" /></a>

                                        <div class="pt-2">
                                            <h3 class="product-title fs-sm"><a href="#">Wooden sofa completely...</a></h3>

                                            <a class="product-meta d-block product-card-catgory pb-1" href="#">Hungarian Mminiatures</a>
                                            <div class="d-flex justify-content-between">
                                                <div class="product-price"><span class="text-accent me-2 text_primary">€312.00</span> <del>€280.80</del></div>

                                                <div class="product_timer">
                                                    <span class="text-danger">22 h 5 min left </span>
                                                </div>
                                            </div>

                                            <div class="d-flex justify-content-between">
                                                <span>33 Bids</span>

                                                <a href="#" class="arrow-tag arrow-shipping">Free Shipping</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-md-4 col-6 product-item">
                                    <div class="card product-card h-100">
                                        <button class="btn-wishlist" type="button"><i class="bi bi-heart-fill"></i></button>

                                        <a class="card-img-top d-block overflow-hidden" href="#"><img src="assets/images/reactagnle4.png" alt="Product" /></a>

                                        <div class="pt-2">
                                            <h3 class="product-title fs-sm"><a href="#">Dracaena flower in a pot</a></h3>

                                            <a class="product-meta d-block product-card-catgory pb-1" href="#">Topuslandia</a>
                                            <div class="d-flex justify-content-between">
                                                <div class="product-price"><span class="text-accent me-2 text_primary">Reserved </span></div>
                                            </div>

                                            <div class="d-flex justify-content-between">
                                                <span>&nbsp;</span>
                                                <a href="#" class="arrow-tag arrow-shipping float-end">Free Shipping</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="nav-products" role="tabpanel" aria-labelledby="nav-products-tab">
                        <div class="my-4">
                            <div class="row gx-xl-5 gx-3 mb-xl-5">
                                <div class="col-xl-3 col-md-4 col-6 product-item">
                                    <div class="card product-card h-100">
                                        <button class="btn-wishlist" type="button"><i class="bi bi-heart"></i></button>

                                        <a class="card-img-top d-block overflow-hidden" href="#"><img src="assets/images/reactagnle1.png" alt="Product" /></a>

                                        <div class="pt-2">
                                            <h3 class="product-title fs-sm"><a href="#">OOAK Miniature Mouse G…</a></h3>

                                            <a class="product-meta d-block product-card-catgory pb-1" href="#">Topuslandia</a>
                                            <div class="d-flex justify-content-between">
                                                <div class="product-price"><span class="text-accent me-2 text_primary">€312.00</span> <del>€280.80</del></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-6 product-item">
                                    <div class="card product-card h-100">
                                        <button class="btn-wishlist" type="button"><i class="bi bi-heart-fill"></i></button>

                                        <a class="card-img-top d-block overflow-hidden" href="#"><img src="assets/images/reactagnle2.png" alt="Product" /></a>

                                        <div class="pt-2">
                                            <h3 class="product-title fs-sm"><a href="#">VIDEO Sculpting teeth tut...</a></h3>

                                            <a class="product-meta d-block product-card-catgory pb-1" href="#">Elettra</a>
                                            <div class="d-flex justify-content-between">
                                                <div class="product-price"><span class="text-accent me-2 text_primary">€312.00</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-md-4 col-6 product-item">
                                    <div class="card product-card h-100">
                                        <button class="btn-wishlist" type="button"><i class="bi bi-heart"></i></button>

                                        <a class="card-img-top d-block overflow-hidden" href="#"><img src="assets/images/reactagnle3.png" alt="Product" /></a>

                                        <div class="pt-2">
                                            <h3 class="product-title fs-sm"><a href="#">Wooden sofa completely...</a></h3>

                                            <a class="product-meta d-block product-card-catgory pb-1" href="#">Hungarian Mminiatures</a>
                                            <div class="d-flex justify-content-between">
                                                <div class="product-price"><span class="text-accent me-2 text_primary">€312.00</span> <del>€280.80</del></div>

                                                <div class="product_timer">
                                                    <span class="text-danger">22 h 5 min left </span>
                                                </div>
                                            </div>

                                            <div class="d-flex justify-content-between">
                                                <span>33 Bids</span>

                                                <a href="#" class="arrow-tag">Free Shipping</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-md-4 col-6 product-item">
                                    <div class="card product-card h-100">
                                        <button class="btn-wishlist" type="button"><i class="bi bi-heart"></i></button>

                                        <a class="card-img-top d-block overflow-hidden" href="#"><img src="assets/images/reactagnle4.png" alt="Product" /></a>

                                        <div class="pt-2">
                                            <h3 class="product-title fs-sm"><a href="#">Dracaena flower in a pot</a></h3>

                                            <a class="product-meta d-block product-card-catgory pb-1" href="#">Topuslandia</a>
                                            <div class="d-flex justify-content-between">
                                                <div class="product-price"><span class="text-accent me-2 text_primary">Reserved </span></div>
                                            </div>

                                            <div class="d-flex justify-content-between">
                                                <span>&nbsp;</span>
                                                <a href="#" class="arrow-tag arrow-shipping float-end">Free Shipping</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="nav-bestsellers" role="tabpanel" aria-labelledby="nav-bestsellers-tab">
                        <div class="my-4">
                            <div class="row gx-xl-5 gx-3 mb-xl-5">
                                <div class="col-xl-3 col-md-4 col-6 product-item">
                                    <div class="card product-card h-100">
                                        <button class="btn-wishlist" type="button"><i class="bi bi-heart"></i></button>

                                        <a class="card-img-top d-block overflow-hidden" href="#"><img src="assets/images/reactagnle1.png" alt="Product" /></a>

                                        <div class="pt-2">
                                            <h3 class="product-title fs-sm"><a href="#">OOAK Miniature Mouse G…</a></h3>

                                            <a class="product-meta d-block product-card-catgory pb-1" href="#">Topuslandia</a>
                                            <div class="d-flex justify-content-between">
                                                <div class="product-price"><span class="text-accent me-2 text_primary">€312.00</span> <del>€280.80</del></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-6 product-item">
                                    <div class="card product-card h-100">
                                        <button class="btn-wishlist" type="button"><i class="bi bi-heart-fill"></i></button>

                                        <a class="card-img-top d-block overflow-hidden" href="#"><img src="assets/images/reactagnle2.png" alt="Product" /></a>

                                        <div class="pt-2">
                                            <h3 class="product-title fs-sm"><a href="#">VIDEO Sculpting teeth tut...</a></h3>

                                            <a class="product-meta d-block product-card-catgory pb-1" href="#">Elettra</a>
                                            <div class="d-flex justify-content-between">
                                                <div class="product-price"><span class="text-accent me-2 text_primary">€312.00</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-md-4 col-6 product-item">
                                    <div class="card product-card h-100">
                                        <button class="btn-wishlist" type="button"><i class="bi bi-heart"></i></button>

                                        <a class="card-img-top d-block overflow-hidden" href="#"><img src="assets/images/reactagnle3.png" alt="Product" /></a>

                                        <div class="pt-2">
                                            <h3 class="product-title fs-sm"><a href="#">Wooden sofa completely...</a></h3>

                                            <a class="product-meta d-block product-card-catgory pb-1" href="#">Hungarian Mminiatures</a>
                                            <div class="d-flex justify-content-between">
                                                <div class="product-price"><span class="text-accent me-2 text_primary">€312.00</span> <del>€280.80</del></div>

                                                <div class="product_timer">
                                                    <span class="text-danger">22 h 5 min left </span>
                                                </div>
                                            </div>

                                            <div class="d-flex justify-content-between">
                                                <span>33 Bids</span>

                                                <a href="#" class="arrow-tag">Free Shipping</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-md-4 col-6 product-item">
                                    <div class="card product-card h-100">
                                        <button class="btn-wishlist" type="button"><i class="bi bi-heart-fill"></i></button>

                                        <a class="card-img-top d-block overflow-hidden" href="#"><img src="assets/images/reactagnle4.png" alt="Product" /></a>

                                        <div class="pt-2">
                                            <h3 class="product-title fs-sm"><a href="#">Dracaena flower in a pot</a></h3>

                                            <a class="product-meta d-block product-card-catgory pb-1" href="#">Topuslandia</a>
                                            <div class="d-flex justify-content-between">
                                                <div class="product-price"><span class="text-accent me-2 text_primary">Reserved </span></div>
                                            </div>

                                            <div class="d-flex justify-content-between">
                                                <span>&nbsp;</span>
                                                <a href="#" class="arrow-tag arrow-shipping float-end">Free Shipping</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="nav-auction" role="tabpanel" aria-labelledby="nav-auction-tab">
                        <div class="my-4">
                            <div class="row gx-xl-5 gx-3 mb-xl-5">
                                <div class="col-xl-3 col-md-4 col-6 product-item">
                                    <div class="card product-card h-100">
                                        <button class="btn-wishlist" type="button"><i class="bi bi-heart"></i></button>

                                        <a class="card-img-top d-block overflow-hidden" href="#"><img src="assets/images/reactagnle1.png" alt="Product" /></a>

                                        <div class="pt-2">
                                            <h3 class="product-title fs-sm"><a href="#">OOAK Miniature Mouse G…</a></h3>

                                            <a class="product-meta d-block product-card-catgory pb-1" href="#">Topuslandia</a>
                                            <div class="d-flex justify-content-between">
                                                <div class="product-price"><span class="text-accent me-2 text_primary">€312.00</span> <del>€280.80</del></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-6 product-item">
                                    <div class="card product-card h-100">
                                        <button class="btn-wishlist" type="button"><i class="bi bi-heart-fill"></i></button>

                                        <a class="card-img-top d-block overflow-hidden" href="#"><img src="assets/images/reactagnle2.png" alt="Product" /></a>

                                        <div class="pt-2">
                                            <h3 class="product-title fs-sm"><a href="#">VIDEO Sculpting teeth tut...</a></h3>

                                            <a class="product-meta d-block product-card-catgory pb-1" href="#">Elettra</a>
                                            <div class="d-flex justify-content-between">
                                                <div class="product-price"><span class="text-accent me-2 text_primary">€312.00</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-md-4 col-6 product-item">
                                    <div class="card product-card h-100">
                                        <button class="btn-wishlist" type="button"><i class="bi bi-heart"></i></button>

                                        <a class="card-img-top d-block overflow-hidden" href="#"><img src="assets/images/reactagnle3.png" alt="Product" /></a>

                                        <div class="pt-2">
                                            <h3 class="product-title fs-sm"><a href="#">Wooden sofa completely...</a></h3>

                                            <a class="product-meta d-block product-card-catgory pb-1" href="#">Hungarian Mminiatures</a>
                                            <div class="d-flex justify-content-between">
                                                <div class="product-price"><span class="text-accent me-2 text_primary">€312.00</span> <del>€280.80</del></div>

                                                <div class="product_timer">
                                                    <span class="text-danger">22 h 5 min left </span>
                                                </div>
                                            </div>

                                            <div class="d-flex justify-content-between">
                                                <span>33 Bids</span>

                                                <a href="#" class="arrow-tag">Free Shipping</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-md-4 col-6 product-item">
                                    <div class="card product-card h-100">
                                        <button class="btn-wishlist" type="button"><i class="bi bi-heart-fill"></i></button>

                                        <a class="card-img-top d-block overflow-hidden" href="#"><img src="assets/images/reactagnle4.png" alt="Product" /></a>

                                        <div class="pt-2">
                                            <h3 class="product-title fs-sm"><a href="#">Dracaena flower in a pot</a></h3>

                                            <a class="product-meta d-block product-card-catgory pb-1" href="#">Topuslandia</a>
                                            <div class="d-flex justify-content-between">
                                                <div class="product-price"><span class="text-accent me-2 text_primary">Reserved </span></div>
                                            </div>

                                            <div class="d-flex justify-content-between">
                                                <span>&nbsp;</span>
                                                <a href="#" class="arrow-tag arrow-shipping float-end">Free Shipping</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="nav-sales" role="tabpanel" aria-labelledby="nav-sales-tab">
                        <div class="my-4">
                            <div class="row gx-xl-5 gx-3 mb-xl-5">
                                <div class="col-xl-3 col-md-4 col-6 product-item">
                                    <div class="card product-card h-100">
                                        <button class="btn-wishlist" type="button"><i class="bi bi-heart"></i></button>

                                        <a class="card-img-top d-block overflow-hidden" href="#"><img src="assets/images/reactagnle1.png" alt="Product" /></a>

                                        <div class="pt-2">
                                            <h3 class="product-title fs-sm"><a href="#">OOAK Miniature Mouse G…</a></h3>

                                            <a class="product-meta d-block product-card-catgory pb-1" href="#">Topuslandia</a>
                                            <div class="d-flex justify-content-between">
                                                <div class="product-price"><span class="text-accent me-2 text_primary">€312.00</span> <del>€280.80</del></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-6 product-item">
                                    <div class="card product-card h-100">
                                        <button class="btn-wishlist" type="button"><i class="bi bi-heart-fill"></i></button>

                                        <a class="card-img-top d-block overflow-hidden" href="#"><img src="assets/images/reactagnle2.png" alt="Product" /></a>

                                        <div class="pt-2">
                                            <h3 class="product-title fs-sm"><a href="#">VIDEO Sculpting teeth tut...</a></h3>

                                            <a class="product-meta d-block product-card-catgory pb-1" href="#">Elettra</a>
                                            <div class="d-flex justify-content-between">
                                                <div class="product-price"><span class="text-accent me-2 text_primary">€312.00</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-md-4 col-6 product-item">
                                    <div class="card product-card h-100">
                                        <button class="btn-wishlist" type="button"><i class="bi bi-heart"></i></button>

                                        <a class="card-img-top d-block overflow-hidden" href="#"><img src="assets/images/reactagnle3.png" alt="Product" /></a>

                                        <div class="pt-2">
                                            <h3 class="product-title fs-sm"><a href="#">Wooden sofa completely...</a></h3>

                                            <a class="product-meta d-block product-card-catgory pb-1" href="#">Hungarian Mminiatures</a>
                                            <div class="d-flex justify-content-between">
                                                <div class="product-price"><span class="text-accent me-2 text_primary">€312.00</span> <del>€280.80</del></div>

                                                <div class="product_timer">
                                                    <span class="text-danger">22 h 5 min left </span>
                                                </div>
                                            </div>

                                            <div class="d-flex justify-content-between">
                                                <span>33 Bids</span>

                                                <a href="#" class="arrow-tag">Free Shipping</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-md-4 col-6 product-item">
                                    <div class="card product-card h-100">
                                        <button class="btn-wishlist" type="button"><i class="bi bi-heart-fill"></i></button>

                                        <a class="card-img-top d-block overflow-hidden" href="#"><img src="assets/images/reactagnle4.png" alt="Product" /></a>

                                        <div class="pt-2">
                                            <h3 class="product-title fs-sm"><a href="#">Dracaena flower in a pot</a></h3>

                                            <a class="product-meta d-block product-card-catgory pb-1" href="#">Topuslandia</a>
                                            <div class="d-flex justify-content-between">
                                                <div class="product-price"><span class="text-accent me-2 text_primary">Reserved </span></div>
                                            </div>

                                            <div class="d-flex justify-content-between">
                                                <span>&nbsp;</span>
                                                <a href="#" class="arrow-tag arrow-shipping float-end">Free Shipping</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--  product list tabs -->
        <section class="latest_news pt-0 pb-3">
            <div class="container">
                <div class="heading_spcl">
                    <h2>Latest from <span class="font-a">Flairee News </span></h2>
                </div>
            </div>

            <div class="latest_news_card gray-scale">
                <div class="container text-center">
                    <div class="row justify-content-center">
                        <div class="col-xl-3 col-md-4 col-6">
                            <div class="cardanew h-100">
                                <span class="lead mb-2"> Welcome Post</span>
                                <div class="card-body">
                                    <div class="card py-4">
                                        <h3>Welcome To</h3>
                                        <h2>Flairee</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 col-6">
                            <div class="cardanew h-100">
                                <span class="lead mb-2"> Masquerade Ball</span>
                                <div class="card-body">
                                    <div class="card py-4">
                                        <h3>Online</h3>
                                        <h2>Show</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 col-6">
                            <div class="cardanew h-100">
                                <span class="lead mb-2"> Check Out Marketing </span>
                                <div class="card-body">
                                    <div class="card py-4">
                                        <h3>6 new copon designs for</h3>
                                        <h2>halloween</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 col-6">
                            <div class="cardanew h-100">
                                <span class="lead mb-2"> Others </span>
                                <div class="card-body">
                                    <div class="card py-4">
                                        <h3>flairee</h3>
                                        <h2>New</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="news_letter">
            <div class="container">
                <div class="row d-flex align-items-end">
                    <div class="col-md-6">
                        <div class="nl_content">
                            <h2>Signup For Our Newsletter</h2>

                            <p class="op-50 lead mb-0">Get all the updates on the wonderful world of miniature and art dolls!</p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="nl_form">
                            <div class="input-group search-header  mx-4">
                                <input class="form-control rounded-end me-3" type="text" placeholder="Enter your email" />

                                <button class="btn btn_primary">Subscribe</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include 'include/footer.php';?>

