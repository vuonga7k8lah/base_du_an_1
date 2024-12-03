<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link href="./views/assets/images/favicon.ico" type="img/x-icon" rel="shortcut icon"> -->
    <script src="https://kit.fontawesome.com/8c204d0fdf.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./views/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./views/assets/css/iconfont.min.css">
    <link rel="stylesheet" href="./views/assets/css/plugins.css">
    <link rel="stylesheet" href="./views/assets/css/helper.css">
    <link rel="stylesheet" href="./views/assets/css/style.css">
    <script src="./views/assets/js/vendor/modernizr-2.8.3.min.js"></script>
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
                                            <a href="#"><i class="fas fa-user-circle"></i> <?= $_SESSION['user']['ten_dang_nhap'] ?></a>
                                            <ul class="ht-dropdown right">
                                                <li><a href="my-account.html">My Account</a></li>
                                                <li><a href="?act=dang-xuat">Đăng xuất</a></li>
                                            </ul>
                                        <?php else: ?>
                                            <a href="?act=tai-khoan"><i class="fa fa-user-circle"></i>Tài khoản</a>
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
                                <a href="?act=trang-chu"><img src="./views/assets/images/logo.png" alt="logo TG shop"></a>
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
                                <!--Mini Cart Dropdown Start-->

                                <!--Mini Cart Dropdown End-->
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
        <!-- Page Banner Section Start -->
        <div class="page-banner-section section bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <div class="page-banner text-center">
                            <h1>Login Register</h1>
                            <ul class="page-breadcrumb">
                                <li><a href="index.html">Home</a></li>
                                <li>Login Register</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Page Banner Section End -->

        <!--Login Register section start-->
        <div class="login-register-section section pt-30 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50  pb-70 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20">
        <div class="container">
            <div class="row">
                <!-- Login Form Start -->
                <div class="col-md-6 col-sm-6">
                    <div class="customer-login-register">
                        <div class="form-login-title">
                            <h2>Đăng nhập</h2>
                        </div>
                        <div class="login-form">
                            <form action="?act=tai-khoan" method="POST">
                                <div class="form-fild">
                                    <p><label>Tên đăng nhập<span class="required">*</span></label></p>
                                    <input name="ten_dang_nhap" value="" type="text">
                                </div>
                                <div class="form-fild">
                                    <p><label>Mật khẩu<span class="required">*</span></label></p>
                                    <input name="mat_khau" value="" type="password">
                                </div>
                                <div class="login-submit">
                                    <button type="submit" name="action" value="login" class="btn">Đăng nhập</button>
                                    <label>
                                        <input class="checkbox" name="rememberme" value="1" type="checkbox">
                                        <span>Lưu thông tin</span>
                                    </label>
                                </div>
                                <div class="lost-password">
                                    <a href="#">Quên mật khẩu?</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Login Form End -->

                <!-- Register Form Start -->
                <div class="col-md-6 col-sm-6">
                    <div class="customer-login-register register-pt-0">
                        <div class="form-register-title">
                            <h2>Đăng ký</h2>
                        </div>
                        <div class="register-form">
                            <form action="?act=tai-khoan" method="POST">
                                <div class="form-fild">
                                    <p><label>Tên đăng nhập<span class="required">*</span></label></p>
                                    <input name="ten_dang_nhap" value="" type="text">
                                </div>
                                <div class="form-fild">
                                    <p><label>Email<span class="required">*</span></label></p>
                                    <input name="email" value="" type="text">
                                </div>
                                <div class="form-fild">
                                    <p><label>Mật khẩu<span class="required">*</span></label></p>
                                    <input name="mat_khau" value="" type="password">
                                </div>
                                <div class="form-fild">
                                    <p><label>Nhập lại mật khẩu<span class="required">*</span></label></p>
                                    <input name="re_mat_khau" value="" type="password">
                                </div>
                                <div class="register-submit">
                                    <button type="submit" name="action" value="register" class="btn">Đăng ký</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Register Form End -->
            </div>
</div>

<script>
    // Hiển thị trường email nếu người dùng nhấn vào nút Đăng ký
    document.querySelector('button[value="register"]').addEventListener('click', function () {
        document.getElementById('register-email').style.display = 'block';
    });
</script>

        </div>
        <!--Login Register section end-->
      

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

<script src="./views/assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="./views/assets/js/popper.min.js"></script>
<script src="./views/assets/js/bootstrap.min.js"></script>
<script src="./views/assets/js/plugins.js"></script>
<script src="./views/assets/js/main.js"></script>
</body>

</html>