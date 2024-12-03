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
                                    <li><a href="#"><i class="fa fa-envelope-open-o"></i>tungnxph51891@fpt.edu.vn</a>
                                    </li>
                                </ul>
                            </div>
                            <!--Links end-->
                        </div>
                        <div class="col-xl-6 col-lg-4">
                            <div class="ht-right d-flex justify-content-lg-end justify-content-center">
                                <ul class="ht-us-menu d-flex">
                                    <li>
                                        <?php if (isset($_SESSION['user'])): ?>
                                            <a href="#"><i class="fa fa-user-circle"></i>
                                                <?= $_SESSION['user']['ten_dang_nhap'] ?></a>
                                            <ul class="ht-dropdown right">
                                                <li><a href="my-account.html">My Account</a></li>
                                                <li><a href="?act=dang-xuat">Đăng xuất</a></li>
                                            </ul>
                                        <?php else: ?>
                                            <a href="?act=tai-khoan"><i class="fa fa-user-circle"></i>Tài khoản</a>
                                            <ul class="ht-dropdown right">
                                                <li><a href="?act=tai-khoan">My Account</a></li>
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
                                            chủ</a></li>



                                    <li><a style="display: inline-block; white-space: nowrap;"
                                            href="?act=san-pham-theo-danh-muc">Sản phẩm</a></li>


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

        <!--slider section start-->
        <div class="hero-section section position-relative">
            <div class="tf-element-carousel slider-nav" data-slick-options='{
                "slidesToShow": 1,
                "slidesToScroll": 1,
                "infinite": true,
                "arrows": true,
                "dots": true
            }' data-slick-responsive='[
                {"breakpoint":768, "settings": {
                "slidesToShow": 1
                }},
                {"breakpoint":575, "settings": {
                "slidesToShow": 1,
                "arrows": false,
                "autoplay": true
                }}
            ]'>
                <!--Hero Item start-->
                <div class="hero-item bg-image" data-bg="./assets/images/hero/hero-2.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <!--Hero Content start-->
                                <div class="hero-content-2 color-2">
                                    <h2>view our</h2>
                                    <h1>Women's hair</h1>
                                    <h3>Products now</h3>
                                    <a href="shop.html">shop now</a>
                                </div>
                                <!--Hero Content end-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--Hero Item end-->

                <!--Hero Item start-->
                <div class="hero-item bg-image" data-bg="./assets/images/hero/hero-9.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <!--Hero Content start-->
                                <div class="hero-content-2 color-2">
                                    <h2>view our</h2>
                                    <h1>Women's hair</h1>
                                    <h3>Products now</h3>
                                    <a href="shop.html">shop now</a>
                                </div>
                                <!--Hero Content end-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--Hero Item end-->
            </div>
        </div>
        <!--slider section end-->

        <!-- Feature Section Start -->
        <div class="feature-section section pt-100 pt-md-75 pt-sm-60 pt-xs-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <!-- Single Faeture Start -->
                        <div class="single-feature feature-style-2 mb-30">
                            <div class="icon">
                                <i class="fa-truck fa"></i>
                            </div>
                            <div class="content">
                                <h2>Miễn phí vận chuyển</h2>
                                <p>với đơn hàng trên 20$</p>
                            </div>
                        </div>
                        <!-- Single Faeture End -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <!-- Single Faeture Start -->
                        <div class="single-feature feature-style-2 mb-30">
                            <div class="icon">
                                <i class="fa fa-undo"></i>
                            </div>
                            <div class="content">
                                <h2>Miễn phí hoàn trả trong 30 ngày</h2>
                                <p>Đảm bảo hoàn tiền</p>
                            </div>
                        </div>
                        <!-- Single Faeture End -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <!-- Single Faeture Start -->
                        <div class="single-feature feature-style-2 mb-30 br-0">
                            <div class="icon">
                                <i class="fas fa-thumbs-up"></i>

                            </div>
                            <div class="content">
                                <h2>Thành viên mua hàng</h2>
                                <p>Đảm bảo mua sắm an toàn</p>
                            </div>
                        </div>
                        <!-- Single Faeture End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature Section End -->

        <!--Product section start-->
        <div class="product-section section pt-70 pt-lg-45 pt-md-40 pt-sm-30 pt-xs-15">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="product-tab-menu mb-40 mb-xs-20">
                            <ul class="nav">
                                <li><a class="active" data-toggle="tab" href="#products">Sản phẩm đang giảm giá </a>
                                </li>
                                <li><a data-toggle="tab" href="#onsale"> Sản phẩm niêm yết</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="products">
                                <div class="row">
                                    <?php foreach ($listSanPham as $sanPham): ?>
                                        <!-- Kiểm tra nếu sản phẩm có giá khuyến mãi và không phải NULL -->
                                        <?php if (isset($sanPham['gia_khuyen_mai']) && $sanPham['gia_khuyen_mai'] !== null && $sanPham['gia_khuyen_mai'] > 0): ?>
                                            <div class="col-lg-3 col-md-4 col-sm-6 mb-30">
                                                <!-- Sản phẩm đ��n lẻ Bắt đầu -->
                                                <div class="single-product"
                                                    style="border: 1px solid #ddd; padding: 10px; border-radius: 5px;">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="<?= BASE_URL . $sanPham['hinh_anh'] ?>"
                                                                alt="<?= $sanPham['ten_san_pham'] ?>">
                                                        </a>
                                                        <div class="product-action"
                                                            style="display: flex; align-items: center; justify-content: center; padding: 4px; background-color: #f8f8f8; border-radius: 5px;">
                                                            <form action="?act=add-to-cart" method="post">
                                                                <input type="hidden" name="product_id"
                                                                    value="<?= $sanPham['id_san_pham'] ?>">
                                                                <input type="hidden" name="quantity" value="1">
                                                                <button type="submit" class="product-btn"
                                                                    style="background-color: #ff6f61; color: white; padding: 5px 10px; border-radius: 5px; text-decoration: none; display: block; width: auto; text-align: center; font-size: 14px;">Thêm
                                                                    vào giỏ</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <p class="fw-bold text-center text-uppercase text-success"><a
                                                                href="?act=san-pham-chi-tiet&id_san_pham=<?= $sanPham['id_san_pham'] ?>"><?= $sanPham['ten_san_pham'] ?></a>
                                                        </p>
                                                        <h4 class="price">
                                                            <span class="new"
                                                                style="color: #cea679; font-weight: bold; text-decoration:none">
                                                                <?= $sanPham['gia_khuyen_mai'] ?>$
                                                            </span>
                                                            <span class="old"
                                                                style="text-decoration: line-through; color: #gray;">
                                                                <?= $sanPham['gia_san_pham'] ?>$
                                                            </span>
                                                        </h4>
                                                    </div>
                                                </div>
                                                <!-- Sản phẩm đơn lẻ Kết thúc -->
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="onsale">
                                <div class="row">
                                    <?php foreach ($listSanPham as $sanPham): ?>
                                        <!-- Kiểm tra nếu sản phẩm không có giá khuyến mãi hoặc giá khuyến mãi là NULL hoặc <= 0 -->
                                        <?php if (empty($sanPham['gia_khuyen_mai']) || $sanPham['gia_khuyen_mai'] <= 0): ?>
                                            <div class="col-lg-3 col-md-4 col-sm-6 mb-30">
                                                <!-- Sản phẩm đơn lẻ Bắt đầu -->
                                                <div class="single-product"
                                                    style="border: 1px solid #ddd; padding: 10px; border-radius: 5px;">
                                                    <div class="product-img">
                                                        <a
                                                            href="?act=san-pham-chi-tiet&id_san_pham=<?= $sanPham['id_san_pham'] ?>">
                                                            <img src="<?= BASE_URL . $sanPham['hinh_anh'] ?>"
                                                                alt="<?= $sanPham['ten_san_pham'] ?>">
                                                        </a>
                                                        <div class="product-action"
                                                            style="display: flex; align-items: center; justify-content: center; padding: 4px; background-color: #f8f8f8; border-radius: 5px;">
                                                            <form action="?act=add-to-cart" method="post">
                                                                <input type="hidden" name="product_id"
                                                                    value="<?= $sanPham['id_san_pham'] ?>">
                                                                <input type="hidden" name="quantity" value="1">
                                                                <button type="submit" class="product-btn"
                                                                    style="background-color: #ff6f61; color: white; padding: 5px 10px; border-radius: 5px; text-decoration: none; display: block; width: auto; text-align: center; font-size: 14px;">Thêm
                                                                    vào giỏ</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <p class="fw-bold text-center text-uppercase text-success"><a
                                                                href="?act=san-pham-chi-tiet&id_san_pham=<?= $sanPham['id_san_pham'] ?>"><?= $sanPham['ten_san_pham'] ?></a>
                                                        </p>
                                                        <h4 class="price">
                                                            <span class="new"
                                                                style="color: #cea679; font-weight: bold; text-decoration:none">
                                                                <?= $sanPham['gia_san_pham'] ?>$
                                                            </span>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>




                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--Product section end-->

    <!--Banner section start-->
    <div class="banner-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <!-- Single Banner Start -->
                    <div class="single-banner mb-30">
                        <a href="#">
                            <img src="assets/images/banner/h1-banner-1.png" alt="">
                        </a>
                    </div>
                    <!-- Single Banner End -->
                </div>
                <div class="col-lg-6 col-md-6">
                    <!-- Single Banner Start -->
                    <div class="single-banner mb-30">
                        <a href="#">
                            <img src="assets/images/banner/h1-banner-2.png" alt="">
                        </a>
                    </div>
                    <!-- Single Banner End -->
                </div>
                <div class="col-lg-3 col-md-3">
                    <!-- Single Banner Start -->
                    <div class="single-banner mb-30">
                        <a href="#">
                            <img src="assets/images/banner/h1-banner-3.png" alt="">
                        </a>
                    </div>
                    <!-- Single Banner End -->
                </div>
            </div>
        </div>
    </div>
    <!--Banner section end-->





    <footer class="footer-section section bg-dark">

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
                            <li class="mx-3"><a href="#policy" class="text-white text-decoration-none small">Chính
                                    sách</a></li>
                            <li class="mx-3"><a href="#contact" class="text-white text-decoration-none small">Liên
                                    hệ</a></li>
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
        <!--Footer bottom end-->
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