<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link href="assets/images/favicon.ico" type="img/x-icon" rel="shortcut icon"> -->
    <script src="https://kit.fontawesome.com/8c204d0fdf.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/iconfont.min.css">
    <link rel="stylesheet" href="assets/css/plugins.css">
    <link rel="stylesheet" href="assets/css/helper.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <title>Trang chủ</title>
</head>

<body>
    <!--Header section start-->
    <div id="main-wrapper">
        <header class="header header-transparent header-sticky">
            <div class="header-top">
                <div class="container">
                    <div class="row align-items-center">
                        <div
                            class="col-xl-6 col-lg-8 d-flex flex-wrap justify-content-lg-start justify-content-center align-items-center">
                            <!--Links start-->
                            <div class="header-top-links">
                                <ul>
                                    <li><a href="#"><i class="fa fa-phone"></i>(08) 123 456 7890</a></li>
                                    <li><a href="#"><i class="fa fa-envelope-open-o"></i>yourmail@domain.com</a></li>
                                </ul>
                            </div>
                            <!--Links end-->
                        </div>
                        <div class="col-xl-6 col-lg-4">
                            <div class="ht-right d-flex justify-content-lg-end justify-content-center">
                                <ul class="ht-us-menu d-flex">
                                    <li>
                                    <?php if (isset($_SESSION['user'])): ?>
                                            <a href="#"><i class="fa fa-user-circle"></i> <?= $_SESSION['user']['ten_dang_nhap'] ?></a>
                                            <ul class="ht-dropdown right">
                                                <li><a href="my-account.html">My Account</a></li>
                                                <li><a href="?act=dang-xuat">Đăng xuất</a></li>
                                            </ul>
                                        <?php else: ?>
                                            <a href="?act=tai-khoan"><i class="fa fa-user-circle-o"></i>Tài khoản</a>
                                            <ul class="ht-dropdown right">
                                                <li><a href="?act=tai-khoan">Đăng nhập</a></li>
                                                <li><a href="?act=tai-khoan">Đăng ký</a></li>
                                            </ul>
                                        <?php endif; ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="header-bottom menu-right">
                <div class="container">
                    <div class="row align-items-center">

                        <!--Logo start-->
                        <div class="col-lg-3 col-md-3 col-6 order-lg-1 order-md-1 order-1">
                            <div class="logo">
                                <a href="?act=trang-chu"><img src="assets/images/logo.png" alt="logo TG shop"></a>
                            </div>
                        </div>
                        <!--Logo end-->

                        <!--Menu start-->
                        <div
                            class="col-lg-6 col-md-6 col-12 order-lg-2 order-md-2 order-3 d-flex justify-content-center">
                            <nav class="main-menu">
                                <ul>
                                    <li><a style="display: inline-block; white-space: nowrap;" href="?act=/">Trang
                                            chủ</a>
                                    </li>
                                    <li><a style="display: inline-block; white-space: nowrap;"
                                            href="?act=san-pham-theo-danh-muc">Sản phẩm</a>
                                        <!-- 
                                            <ul class="mega-menu four-column">
                                                <li><a href="#" class="item-link">Pages</a>
                                                    <ul>
                                                        <li><a href="compare.html">Compare</a></li>
                                                        <li><a href="cart.html">Shopping Cart</a></li>
                                                        <li><a href="checkout.html">Checkout</a></li>
                                                        <li><a href="wishlist.html">Wishlist</a></li>
                                                        <li><a href="my-account.html">My Account</a></li>
                                                        <li><a href="login-register.html">Login Register</a></li>
                                                        <li><a href="faq.html">Frequently Questions</a></li>
                                                        <li><a href="404.html">Error 404</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#" class="item-link">Shop Layout</a>
                                                    <ul>
                                                        <li><a href="shop.html">Shop</a></li>
                                                        <li><a href="shop-three-column.html">Shop Three Column</a></li>
                                                        <li><a href="shop-four-column.html">Shop Four Column</a></li>
                                                        <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                                        <li><a href="shop-list-nosidebar.html">Shop List No Sidebar</a></li>
                                                        <li><a href="shop-list-left-sidebar.html">Shop List Left Sidebar</a>
                                                        </li>
                                                        <li><a href="shop-list-right-sidebar.html">Shop List Right
                                                                Sidebar</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#" class="item-link">Product Details</a>
                                                    <ul>
                                                        <li><a href="single-product.html">Single Product</a></li>
                                                        <li><a href="single-product-variable.html">Variable Product</a></li>
                                                        <li><a href="single-product-affiliate.html">Affiliate Product</a>
                                                        </li>
                                                        <li><a href="single-product-group.html">Group Product</a></li>
                                                        <li><a href="single-product-tabstyle-2.html">Product Left Tab</a>
                                                        </li>
                                                        <li><a href="single-product-tabstyle-3.html">Product Right Tab</a>
                                                        </li>
                                                        <li><a href="single-product-gallery-left.html">Product Gallery
                                                                Left</a></li>
                                                        <li><a href="single-product-gallery-right.html">Product Gallery
                                                                Right</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#" class="item-link">Product Details</a>
                                                    <ul>
                                                        <li><a href="single-product-sticky-left.html">Product Sticky
                                                                Left</a></li>
                                                        <li><a href="single-product-sticky-right.html">Product Sticky
                                                                Right</a></li>
                                                        <li><a href="single-product-slider-box.html">Product Box Slider</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                         -->
                                    </li>
                                    <li><a style="display: inline-block; white-space: nowrap;" href="blog.html">Blog</a>
                                    </li>
                                    <li><a style="display: inline-block; white-space: nowrap;" href="about.html">About
                                            Us</a></li>
                                    <li><a style="display: inline-block; white-space: nowrap;"
                                            href="contact.html">Contact Us</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!--Menu end-->

                        <!--Search Cart Start-->
                        <div class="col-lg-3 col-md-3 col-6 order-lg-3 order-md-3 order-2 d-flex justify-content-end">
                            <div class="header-search">
                                
                                <div class="header-search-form">
                                    <form action="#">
                                        <input type="text" placeholder="Type and hit enter">
                                        <button><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="header-cart">
                                <a href="cart.html"><i class="fa fa-shopping-cart"></i><span>3</span></a>
                            </div>
                        </div>
                        <!--Search Cart End-->
                    </div>

                    <!--Mobile Menu start-->
                    <div class="row">
                        <div class="col-12 d-flex d-lg-none">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                    <!--Mobile Menu end-->
                </div>
            </div>
        </header>
        <div class="page-banner-section section bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="page-banner text-center">
                            <h1 style="margin: 0 !important;">Shop</h1>
                            <ul class="page-breadcrumb">
                                <li><a href="index.html">Home</a></li>
                                <li>Shop</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div
            class="shop-section section pt-30 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-70 pb-lg-50 pb-md-40 pb-sm-60 pb-xs-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 order-lg-1 order-2">

                        <!-- Sidebar Danh Mục -->
                        <div class="common-sidebar-widget">
                            <h3 class="sidebar-title">DANH MỤC</h3>
                            <ul class="sidebar-list">
                                <?php if (!empty($danhMucs)): ?>
                                    <?php foreach ($danhMucs as $danhMuc): ?>
                                        <li>
                                            <a
                                                href="?act=san-pham-theo-danh-muc&id_danh_muc=<?php echo $danhMuc['id_danh_muc']; ?>">
                                                <i
                                                    class="fa fa-angle-right"></i><?php echo htmlspecialchars($danhMuc['ten_danh_muc']); ?>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <li>Không có danh mục nào.</li>
                                <?php endif; ?>
                            </ul>
                        </div>
                        <!-- Single Sidebar End  -->
                        <!-- Single Sidebar Start  -->
                        <div class="common-sidebar-widget">
                            <h3 class="sidebar-title">Price</h3>
                            <ul class="sidebar-list">
                                <!-- Tìm kiếm sản phẩm từ 0$ - 50$ -->
                                <li>
                                    <a href="?act=san-pham-theo-gia&min_price=0&max_price=50">
                                        <i class="fa fa-angle-right"></i>
                                        <span class="price">0$</span> - <span class="price">50$</span>
                                    </a>
                                </li>
                                <!-- Tìm kiếm sản phẩm từ 50$ trở lên -->
                                <li>
                                    <a href="?act=san-pham-theo-gia&min_price=50">
                                        <i class="fa fa-angle-right"></i>
                                        <span class="price">50$</span> and above
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <!-- Single Sidebar End  -->
                        <!-- Single Sidebar Start  -->
                        <div class="common-sidebar-widget">
                            <div class="single-banner">
                                <a href="#">
                                    <img src="assets/images/banner/banner_doc.png" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- Single Sidebar End  -->
                    </div>
                    <div class="col-lg-9 order-lg-2 order-1">
                        <!-- <div class="row">
                            <div class="col-12">
                                <div class="shop-banner mb-35 mb-xs-20">
                                    <img src="./assets/images/banner/category-image.jpg" alt="">
                                </div>
                                <div class="shop-banner-title">
                                    <h2>Shop</h2>
                                </div>
                            </div>
                        </div> -->
                        <div class="row">
                            <div class="col-12">
                                <!-- Grid & List View Start -->
                                <div
                                    class="shop-topbar-wrapper d-md-flex justify-content-md-between align-items-center">
                                    <div class="grid-list-option">
                                        <!-- <ul class="nav">
                                            <li>
                                                <a class="active show" data-toggle="tab" href="#grid"><i
                                                        class="fa fa-th"></i></a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#list" class=""><i
                                                        class="fa fa-th-list"></i></a>
                                            </li>
                                        </ul> -->
                                    </div>

                                </div>
                                <!-- Grid & List View End -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="shop-product">
                                    <div id="myTabContent-2" class="tab-content">
                                        <div id="grid" class="tab-pane fade active show">
                                            <div class="product-grid-view">
                                                <div class="row">
                                                    <?php foreach ($currentProducts as $sanPham): ?>
                                                        <div class="col-lg-3 col-md-4 col-sm-6 mb-30">
                                                            <!-- Sản phẩm đơn lẻ Bắt đầu -->
                                                            <div class="single-product"
                                                                style="border: 1px solid #ddd; padding: 10px; border-radius: 5px;">
                                                                <div class="product-img">
                                                                    <a href="?act=san-pham-chi-tiet&id_san_pham=<?= $sanPham['id_san_pham'] ?>">
                                                                        <img src="<?= BASE_URL . $sanPham['hinh_anh'] ?>"
                                                                            alt="<?= $sanPham['ten_san_pham'] ?>">
                                                                    </a>
                                                                    <div class="product-action"
                                                                        style="display: flex; align-items: center; justify-content: center; padding: 2px; background-color: #f8f8f8; border-radius: 5px;">
                                                                        <form action="?act=add-to-cart" method="post">
                                                                            <input type="hidden" name="product_id" value="<?= $sanPham['id_san_pham'] ?>">
                                                                            <input type="hidden" name="quantity" value="1">
                                                                            <button type="submit" class="product-btn" 
                                                                                style="background-color: #ff6f61; color: white; padding: 5px 10px; border-radius: 5px; text-decoration: none; display: block; width: auto; text-align: center; font-size: 14px;">Thêm vào giỏ</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                                <div class="product-content">
                                                                    <p class=""><a
                                                                            href="?act=san-pham-chi-tiet&id_san_pham=<?= $sanPham['id_san_pham'] ?>"><?= $sanPham['ten_san_pham'] ?></a>
                                                                    </p>
                                                                    <h4 class="price">
                                                                        <?php if (!empty($sanPham['gia_khuyen_mai'])): ?>
                                                                            <span class="new"
                                                                                style="color: #cea679; font-weight: bold; text-decoration: none;">
                                                                                <?= $sanPham['gia_khuyen_mai'] ?>$
                                                                            </span>
                                                                            <span class="old"
                                                                                style="text-decoration: line-through; color: #gray; ; font-weight: bold;">
                                                                                <?= $sanPham['gia_san_pham'] ?>$
                                                                            </span>
                                                                        <?php else: ?>
                                                                            <span class="old"
                                                                                style="color:#cea679; font-weight: bold;">
                                                                                <?= $sanPham['gia_san_pham'] ?>$
                                                                            </span>
                                                                        <?php endif; ?>

                                                                    </h4>
                                                                </div>
                                                            </div>
                                                            <!-- Sản phẩm đơn lẻ Kết thúc -->
                                                        </div>
                                                    <?php endforeach; ?>
                                                </div>
                                                <div id="list" class="tab-pane fade">
                                                    <div class="product-list-view">
                                                        <!-- Single List Product Start -->
                                                        <div class="product-list-item mb-40">
                                                            <div class="row align-items-center">
                                                                <div class="col-md-4 col-sm-6">
                                                                    <div class="single-product">
                                                                        <div class="product-img mb-0 mb-xs-25">
                                                                            <a href="single-product.html">
                                                                                <img src="./assets/images/product/product-18.jpg"
                                                                                    alt="">
                                                                            </a>
                                                                            <span class="descount-sticker">-10%</span>
                                                                            <span class="sticker">New</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8 col-sm-6">
                                                                    <div class="product-content-shop-list">
                                                                        <div class="product-content">
                                                                            <h3><a href="single-product.html">White
                                                                                    Shave
                                                                                    Brux</a></h3>
                                                                            <h4 class="price"><span
                                                                                    class="new">€90.00</span>
                                                                            </h4>
                                                                            <div class="ratting">
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                            </div>
                                                                            <p>Pellentesque habitant morbi tristique
                                                                                senectus et
                                                                                netus et malesuada fames ac turpis
                                                                                egestas.
                                                                                Vestibulum tortor quam, feugiat vitae,
                                                                                ultricies
                                                                                eget, tempor sit amet, ante. Donec eu
                                                                                libero sit
                                                                                amet quam egestas semper. Aenean
                                                                                ultricies mi
                                                                                vitae est. Mauris placerat eleifend leo.
                                                                            </p>
                                                                            <div
                                                                                class="product-action d-flex justify-content-between">
                                                                                <a class="product-btn" href="#">Add to
                                                                                    Cart</a>
                                                                                <ul class="d-flex">
                                                                                    <li><a href="#quick-view-modal-container"
                                                                                            data-toggle="modal"
                                                                                            title="Quick View"><i
                                                                                                class="fa fa-eye"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#"><i
                                                                                                class="fa fa-heart-o"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#"><i
                                                                                                class="fa fa-exchange"></i></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single List Product Start -->
                                                        <!-- Single List Product Start -->
                                                        <div class="product-list-item mb-40">
                                                            <div class="row align-items-center">
                                                                <div class="col-md-4 col-sm-6">
                                                                    <div class="single-product">
                                                                        <div class="product-img mb-0 mb-xs-25">
                                                                            <a href="single-product.html">
                                                                                <img src="./assets/images/product/product-17.jpg"
                                                                                    alt="">
                                                                            </a>
                                                                            <span class="descount-sticker">-10%</span>
                                                                            <span class="sticker">New</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8 col-sm-6">
                                                                    <div class="product-content-shop-list">
                                                                        <div class="product-content">
                                                                            <h3><a href="single-product.html">Aftershave
                                                                                    Lotion</a></h3>
                                                                            <h4 class="price"><span
                                                                                    class="new">€90.00</span><span
                                                                                    class="old">€150.00</span></h4>
                                                                            <div class="ratting">
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                            </div>
                                                                            <p>Pellentesque habitant morbi tristique
                                                                                senectus et
                                                                                netus et malesuada fames ac turpis
                                                                                egestas.
                                                                                Vestibulum tortor quam, feugiat vitae,
                                                                                ultricies
                                                                                eget, tempor sit amet, ante. Donec eu
                                                                                libero sit
                                                                                amet quam egestas semper. Aenean
                                                                                ultricies mi
                                                                                vitae est. Mauris placerat eleifend leo.
                                                                            </p>
                                                                            <div
                                                                                class="product-action d-flex justify-content-between">
                                                                                <a class="product-btn" href="#">Add to
                                                                                    Cart</a>
                                                                                <ul class="d-flex">
                                                                                    <li><a href="#quick-view-modal-container"
                                                                                            data-toggle="modal"
                                                                                            title="Quick View"><i
                                                                                                class="fa fa-eye"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#"><i
                                                                                                class="fa fa-heart-o"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#"><i
                                                                                                class="fa fa-exchange"></i></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single List Product Start -->
                                                        <!-- Single List Product Start -->
                                                        <div class="product-list-item mb-40">
                                                            <div class="row align-items-center">
                                                                <div class="col-md-4 col-sm-6">
                                                                    <div class="single-product">
                                                                        <div class="product-img mb-0 mb-xs-25">
                                                                            <a href="single-product.html">
                                                                                <img src="./assets/images/product/product-15.jpg"
                                                                                    alt="">
                                                                            </a>
                                                                            <span class="descount-sticker">-10%</span>
                                                                            <span class="sticker">New</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8 col-sm-6">
                                                                    <div class="product-content-shop-list">
                                                                        <div class="product-content">
                                                                            <h3><a href="single-product.html">White
                                                                                    Shave
                                                                                    Brush</a></h3>
                                                                            <h4 class="price"><span
                                                                                    class="new">€110.00</span><span
                                                                                    class="old">€130.00</span></h4>
                                                                            <div class="ratting">
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                            </div>
                                                                            <p>Pellentesque habitant morbi tristique
                                                                                senectus et
                                                                                netus et malesuada fames ac turpis
                                                                                egestas.
                                                                                Vestibulum tortor quam, feugiat vitae,
                                                                                ultricies
                                                                                eget, tempor sit amet, ante. Donec eu
                                                                                libero sit
                                                                                amet quam egestas semper. Aenean
                                                                                ultricies mi
                                                                                vitae est. Mauris placerat eleifend leo.
                                                                            </p>
                                                                            <div
                                                                                class="product-action d-flex justify-content-between">
                                                                                <a class="product-btn" href="#">Add to
                                                                                    Cart</a>
                                                                                <ul class="d-flex">
                                                                                    <li><a href="#quick-view-modal-container"
                                                                                            data-toggle="modal"
                                                                                            title="Quick View"><i
                                                                                                class="fa fa-eye"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#"><i
                                                                                                class="fa fa-heart-o"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#"><i
                                                                                                class="fa fa-exchange"></i></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single List Product Start -->
                                                        <!-- Single List Product Start -->
                                                        <div class="product-list-item mb-40">
                                                            <div class="row align-items-center">
                                                                <div class="col-md-4 col-sm-6">
                                                                    <div class="single-product">
                                                                        <div class="product-img mb-0 mb-xs-25">
                                                                            <a href="single-product.html">
                                                                                <img src="./assets/images/product/product-12.jpg"
                                                                                    alt="">
                                                                            </a>
                                                                            <span class="descount-sticker">-10%</span>
                                                                            <span class="sticker">New</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8 col-sm-6">
                                                                    <div class="product-content-shop-list">
                                                                        <div class="product-content">
                                                                            <h3><a href="single-product.html">White
                                                                                    Shave
                                                                                    Bruj</a></h3>
                                                                            <h4 class="price"><span
                                                                                    class="new">€80.00</span>
                                                                            </h4>
                                                                            <div class="ratting">
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                            </div>
                                                                            <p>Pellentesque habitant morbi tristique
                                                                                senectus et
                                                                                netus et malesuada fames ac turpis
                                                                                egestas.
                                                                                Vestibulum tortor quam, feugiat vitae,
                                                                                ultricies
                                                                                eget, tempor sit amet, ante. Donec eu
                                                                                libero sit
                                                                                amet quam egestas semper. Aenean
                                                                                ultricies mi
                                                                                vitae est. Mauris placerat eleifend leo.
                                                                            </p>
                                                                            <div
                                                                                class="product-action d-flex justify-content-between">
                                                                                <a class="product-btn" href="#">Add to
                                                                                    Cart</a>
                                                                                <ul class="d-flex">
                                                                                    <li><a href="#quick-view-modal-container"
                                                                                            data-toggle="modal"
                                                                                            title="Quick View"><i
                                                                                                class="fa fa-eye"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#"><i
                                                                                                class="fa fa-heart-o"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#"><i
                                                                                                class="fa fa-exchange"></i></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single List Product Start -->
                                                        <!-- Single List Product Start -->
                                                        <div class="product-list-item mb-40">
                                                            <div class="row align-items-center">
                                                                <div class="col-md-4 col-sm-6">
                                                                    <div class="single-product">
                                                                        <div class="product-img mb-0 mb-xs-25">
                                                                            <a href="single-product.html">
                                                                                <img src="./assets/images/product/product-13.jpg"
                                                                                    alt="">
                                                                            </a>
                                                                            <span class="descount-sticker">-10%</span>
                                                                            <span class="sticker">New</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8 col-sm-6">
                                                                    <div class="product-content-shop-list">
                                                                        <div class="product-content">
                                                                            <h3><a href="single-product.html">White
                                                                                    Shave
                                                                                    Bruk</a></h3>
                                                                            <h4 class="price"><span
                                                                                    class="new">€60.00</span>
                                                                            </h4>
                                                                            <div class="ratting">
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                            </div>
                                                                            <p>Pellentesque habitant morbi tristique
                                                                                senectus et
                                                                                netus et malesuada fames ac turpis
                                                                                egestas.
                                                                                Vestibulum tortor quam, feugiat vitae,
                                                                                ultricies
                                                                                eget, tempor sit amet, ante. Donec eu
                                                                                libero sit
                                                                                amet quam egestas semper. Aenean
                                                                                ultricies mi
                                                                                vitae est. Mauris placerat eleifend leo.
                                                                            </p>
                                                                            <div
                                                                                class="product-action d-flex justify-content-between">
                                                                                <a class="product-btn" href="#">Add to
                                                                                    Cart</a>
                                                                                <ul class="d-flex">
                                                                                    <li><a href="#quick-view-modal-container"
                                                                                            data-toggle="modal"
                                                                                            title="Quick View"><i
                                                                                                class="fa fa-eye"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#"><i
                                                                                                class="fa fa-heart-o"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#"><i
                                                                                                class="fa fa-exchange"></i></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single List Product Start -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-30 mb-sm-40 mb-xs-30">
                                    <div class="col">
                                        <ul class="page-pagination">
                                            <?php if ($currentPage > 1): ?>
                                                <li>
                                                    <a href="<?php if (isset($idDanhMuc)): ?>
                                                        ?act=san-pham-theo-danh-muc&id_danh_muc=<?= $idDanhMuc ?>&page=<?= $currentPage - 1 ?>
                                                    <?php else: ?>
                                                        ?act=san-pham-theo-gia&min_price=<?= $minPrice ?>&max_price=<?= $maxPrice ?>&page=<?= $currentPage - 1 ?>
                                                    <?php endif; ?>">
                                                        <i class="fa fa-angle-left"></i>
                                                    </a>
                                                </li>
                                            <?php endif; ?>

                                            <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                                                <li class="<?= $i == $currentPage ? 'active' : '' ?>">
                                                    <a href="<?php if (isset($idDanhMuc)): ?>
                                                        ?act=san-pham-theo-danh-muc&id_danh_muc=<?= $idDanhMuc ?>&page=<?= $i ?>
                                                    <?php else: ?>
                                                        ?act=san-pham-theo-gia&min_price=<?= $minPrice ?>&max_price=<?= $maxPrice ?>&page=<?= $i ?>
                                                    <?php endif; ?>">
                                                        <?= sprintf("%02d", $i) ?>
                                                    </a>
                                                </li>
                                            <?php endfor; ?>

                                            <?php if ($currentPage < $totalPages): ?>
                                                <li>
                                                    <a href="<?php if (isset($idDanhMuc)): ?>
                                                        ?act=san-pham-theo-danh-muc&id_danh_muc=<?= $idDanhMuc ?>&page=<?= $currentPage + 1 ?>
                                                    <?php else: ?>
                                                        ?act=san-pham-theo-gia&min_price=<?= $minPrice ?>&max_price=<?= $maxPrice ?>&page=<?= $currentPage + 1 ?>
                                                    <?php endif; ?>">
                                                        <i class="fa fa-angle-right"></i>
                                                    </a>
                                                </li>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Shop Section End -->

                <footer class="footer bg-dark text-white">
                    <div class="container py-4">
                        <div class="row align-items-center">
                            <!-- Logo và thông tin -->
                            <div class="col-md-4 text-center text-md-left mb-3 mb-md-0">
                                <img src="./assets/images/logofoo.png" alt="Logo" style="max-width: 120px;">
                                <p class="mt-2 small">
                                    Sản phẩm chất lượng, dịch vụ tận tâm. Luôn đồng hành cùng bạn.
                                </p>
                            </div>

                            <!-- Liên kết nhanh -->
                            <div class="col-md-4 text-center">
                                <h5 class="mb-3">Liên kết</h5>
                                <ul class="list-unstyled d-flex justify-content-center mb-0">
                                    <li class="mx-3"><a href="#about" class="text-white text-decoration-none small">Về
                                            chúng tôi</a></li>
                                    <li class="mx-3"><a href="#policy"
                                            class="text-white text-decoration-none small">Chính sách</a></li>
                                    <li class="mx-3"><a href="#contact"
                                            class="text-white text-decoration-none small">Liên hệ</a></li>
                                </ul>
                            </div>

                            <!-- Mạng xã hội -->
                            <div class="col-md-4 text-center text-md-right">
                                <h5 class="mb-3">Kết nối</h5>
                                <div class="d-flex justify-content-center justify-content-md-end">
                                    <a href="#" class="text-white mx-2"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#" class="text-white mx-2"><i class="fab fa-twitter"></i></a>
                                    <a href="#" class="text-white mx-2"><i class="fab fa-instagram"></i></a>
                                    <a href="#" class="text-white mx-2"><i class="fab fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Phần bản quyền -->
                    <div class="footer-bottom text-center py-3" style="border-top: 1px solid rgba(255, 255, 255, 0.1);">
                        <p class="mb-0 small">
                            &copy; 2024 <a href="#" class="text-white text-decoration-none">YourBrand</a>. Tất cả quyền
                            được bảo lưu.
                        </p>
                    </div>
                </footer>



            </div>

</body>

<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>
</body>

</html>
<style>
    /* Tổng thể footer */
.footer {
    background-color: #343a40;
    color: #ffffff;
    font-size: 16px;
    line-height: 1.6;
}

/* Phần mô tả logo */
.footer-description {
    font-size: 18px;
    margin-top: 10px;
}

/* Tiêu đề (Liên kết, Kết nối) */
.footer-title {
    font-size: 20px;
    font-weight: bold;
    color: #ffffff;
}

/* Liên kết nhanh */
.footer-links a {
    font-size: 18px;
    color: #ffffff; /* Màu chữ ban đầu */
    text-decoration: none;
    transition: color 0.3s ease; /* Màu thay đổi mượt mà khi hover */
}

.footer-links a:hover {
    color: #cea679; /* Màu chữ khi hover */
}

/* Mạng xã hội */
.footer-icons .social-link {
    font-size: 24px;
    color: #ffffff;
    transition: color 0.3s ease, transform 0.3s ease;
}

.footer-icons .social-link:hover {
    color: #cea679; /* Màu hover cho icon */
    transform: scale(1.2);
}

/* Bản quyền */
.footer-bottom {
    font-size: 16px;
    color: rgba(255, 255, 255, 0.8);
    border-top: 1px solid rgba(255, 255, 255, 0.1);
}

.footer-bottom a {
    color: #ffffff;
    text-decoration: none;
    transition: color 0.3s ease;
}

.footer-bottom a:hover {
    color: #cea679; /* Màu chữ khi hover */
}

</style>