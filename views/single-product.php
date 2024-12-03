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
    <title>Chi tiết sản phẩm</title>
    <style>
        .rating .fa {
            font-size: 24px;
            cursor: pointer;
            color: #ccc; /* Màu mặc định của sao chưa chọn */
        }

        .rating .fa.selected {
            color: #ffc107; /* Màu vàng */
        }

    </style>
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
        <div class="page-banner-section section bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="page-banner text-center">
                            <h1 style="margin: 0 !important;">Sản phẩm</h1>
                            <ul class="page-breadcrumb">
                                <li><a href="index.html">Home</a></li>
                                <li>Sản phẩm</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Single Product Section Start -->
        <div class="single-product-section section pt-30 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-100 pb-lg-80 pb-md-70 pb-sm-30 pb-xs-20">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <!-- Product Details Left -->
                        <div class="product-details-left">
                            <div class="product-details-images">
                                <div class="lg-image">
                                    <img src="<?= $sanPham['hinh_anh'] ?>" alt="">
                                    <a href="<?= $sanPham['hinh_anh'] ?>" class="popup-img venobox" data-gall="myGallery"><i class="fa fa-expand"></i></a>
                                </div>
                            </div>
                        </div>
                        <!--Product Details Left -->
                    </div>
                    <div class="col-md-7">
                        <!--Product Details Content Start-->
                        <div class="product-details-content">
                            <div class="product-details-content-top">
                                <h3 style="color: #FFD700;">Danh mục : <?= $danhMuc['ten_danh_muc'] ?></h3>
                            </div>
                            
                            <h2><?= $sanPham['ten_san_pham'] ?></h2>
                            <div class="single-product-reviews">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <a class="review-link" href="#">(1 customer review)</a>
                            </div>
                            <div class="single-product-price">
                                <?php if ($sanPham['gia_khuyen_mai'] > 0): ?>
                                <span class="price new-price"><?= $sanPham['gia_khuyen_mai']?>$</span>
                                <span class="regular-price"><?= $sanPham['gia_san_pham']?>$</span>
                                <?php else: ?>
                                <span class="price new-price"><?= $sanPham['gia_san_pham']?>$</span>
                                <?php endif; ?>
                            </div>
                          
                            <div class="single-product-quantity">
                                <form class="add-quantity" action="?act=add-to-cart" method="POST">
                                    <div class="product-quantity">
                                        <input name="quantity" value="1" type="number">
                                    </div>
                                    <input type="hidden" name="product_id" value="<?= $sanPham['id_san_pham'] ?>">
                                    <div class="add-to-link">
                                        <button type="submit" class="product-add-btn" data-text="add to cart">Thêm vào giỏ hàng</button>
                                    </div>
                                </form>
                            </div>
                            
                        
                           
                            </div>
                        </div>
                        <!--Product Details Content End-->
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Product Section End -->

        <!--Product Description Review Section Start-->
        <div class="product-description-review-section section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="product-review-tab">
                            <!--Review And Description Tab Menu Start-->
                            <ul class="nav dec-and-review-menu">
                                <li>
                                    <a class="active" data-toggle="tab" href="#description">Description</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#reviews">Reviews (1)</a>
                                </li>
                            </ul>
                            <!--Review And Description Tab Menu End-->
                            <!--Review And Description Tab Content Start-->
                            <div class="tab-content product-review-content-tab" id="myTabContent-4">
                                <div class="tab-pane fade active show" id="description">
                                    <div class="single-product-description">
                                       <p><?= $sanPham['mo_ta']?></p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="reviews">
                                    <div class="review-page-comment">
                                        <h2>1 review for Sit voluptatem</h2>
                                        <ul>
                                            <?php $aComments = CommentModel::getAllByProductID
                                            ($sanPham['id_san_pham']);
                                            if(!empty($aComments)):
                                                foreach ($aComments as $comment):
                                            ?>
                                            <li>
                                                <div class="product-comment">
                                                    <img src="./assets/images/icons/author.jpg" alt="">
                                                    <div class="product-comment-content">
                                                        <div class="product-reviews">
                                                            <?php for($i=0;$i < 5;$i++ ):?>
                                                            <i class="fa fa-star<?= $i<$comment['danh_gia']?'':'-o'?>"></i>
                                                            <?php endfor;?>

                                                        </div>
                                                        <p class="meta">
                                                            <strong><?=$comment['ten_dang_nhap']?></strong> - <span><?=$comment['ngay_tao']?></span>
                                                        <div class="description">
                                                            <p><?=$comment['noi_dung_binh_luan']?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <?php
                                            endforeach;
                                            endif;?>
                                        </ul>
	                                    <?php
                                        if(isset($_SESSION['user'])):?>
                                        <div class="review-form-wrapper">
                                            <div class="review-form">
                                                <span class="comment-reply-title">Add a review </span>

                                                <form action="<?=BASE_URL?>?act=create-comment" id="commentForm">
                                                    <p class="comment-notes">
                                                        <span id="email-notes">Your email address will not be published.</span>
                                                        Required fields are marked
                                                        <span class="required">*</span>
                                                    </p>
                                                    <div class="comment-form-rating">
                                                        <label>Your rating</label>
                                                        <div class="rating">
                                                            <i class="fa fa-star-o" data-value="1"></i>
                                                            <i class="fa fa-star-o" data-value="2"></i>
                                                            <i class="fa fa-star-o" data-value="3"></i>
                                                            <i class="fa fa-star-o" data-value="4"></i>
                                                            <i class="fa fa-star-o" data-value="5"></i>
                                                        </div>
                                                    </div>
                                                    <div class="input-element">
                                                        <div class="comment-form-comment">
                                                            <label>Comment</label>
                                                            <textarea name="message" cols="40" rows="8"></textarea>
                                                        </div>
<!--                                                        <div class="review-comment-form-author">-->
<!--                                                            <label>Name </label>-->
<!--                                                            <input required="required" type="text">-->
<!--                                                        </div>-->
<!--                                                        <div class="review-comment-form-email">-->
<!--                                                            <label>Email </label>-->
<!--                                                            <input required="required" type="text">-->
<!--                                                        </div>-->
                                                        <div class="comment-submit">
                                                            <button type="submit" class="form-button">Submit</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <script>
                                                    document.addEventListener('DOMContentLoaded', function () {
                                                        const stars = document.querySelectorAll('.rating .fa');
                                                        let selectedRating = 0; // Lưu trữ giá trị sao được chọn

                                                        // Lặp qua tất cả các sao
                                                        stars.forEach((star, index) => {
                                                            // Sự kiện khi click vào sao
                                                            star.addEventListener('click', function () {
                                                                selectedRating = index + 1; // Lưu giá trị sao được chọn (bắt đầu từ 1)
                                                                updateSelectedStars(index); // Cập nhật trạng thái sao
                                                            });
                                                        });

                                                        // Cập nhật trạng thái sao khi người dùng click
                                                        function updateSelectedStars(index) {
                                                            stars.forEach((star, i) => {
                                                                if (i <= index) {
                                                                    star.classList.add('selected'); // Thêm màu vàng
                                                                } else {
                                                                    star.classList.remove('selected'); // Bỏ màu vàng
                                                                }
                                                            });
                                                        }

                                                        // Xử lý khi submit form
                                                        const form = document.getElementById('commentForm');
                                                        form.addEventListener('submit', function (e) {
                                                            e.preventDefault();

                                                            const message = form.querySelector('textarea[name="message"]').value;

                                                            if (selectedRating === 0) {
                                                                alert('Please select a rating!');
                                                                return;
                                                            }

                                                            // Hiển thị thông tin rating và message (hoặc gửi AJAX)

                                                            let formData = {
                                                                "rating":selectedRating,
                                                                "content":message,
                                                                "ma_sp":"<?=$sanPham['id_san_pham']?>",
                                                                "ma_user":"<?=$_SESSION['user']['ma_nguoi_dung']?>"
                                                            }

                                                            $.ajax({
                                                                url: $(this).attr('action'), // Lấy URL từ thuộc tính action của form
                                                                type: 'POST', // Phương thức gửi
                                                                data: formData, // Dữ liệu form
                                                                dataType: 'json', // Loại dữ liệu trả về (JSON)
                                                                success: function (response) {
                                                                    // Xử lý kết quả trả về
                                                                    if (response.success) {
                                                                        alert('Thank you for your comment!');
                                                                        form.reset(); // Reset form
                                                                        selectedRating = 0; // Reset rating
                                                                        stars.forEach(star => star.classList.remove('selected'));
                                                                    }
                                                                },
                                                                error: function (xhr, status, error) {
                                                                    // Xử lý lỗi
                                                                    $('#commentResponse').html('<p class="error-message">An error occurred. Please try again later.</p>');
                                                                    console.error('Error:', error);
                                                                }
                                                            });

                                                        });
                                                    });

                                                </script>
                                            </div>
                                        </div>
	                                    <?php endif;?>
                                    </div>
                                </div>
                            </div>
                            <!--Review And Description Tab Content End-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Product Description Review Section Start-->

        <!-- Related Products Section Start -->
        <div class="related-products-section section pt-30 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-100 pb-lg-80 pb-md-70 pb-sm-30 pb-xs-20">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section-title text-center mb-30">
                            <h2>Sản phẩm cùng danh mục</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php foreach ($sanPhamLienQuan as $sp): ?>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="?act=san-pham-chi-tiet&id_san_pham=<?= $sanPham['id_san_pham'] ?>">
                                    <img src="<?= $sp['hinh_anh'] ?>" alt="<?= $sp['ten_san_pham'] ?>">
                                </a>
                            </div>
                            <div class="product-content">
                                <h3><a href="?act=san-pham-chi-tiet&id_san_pham=<?= $sanPham['id_san_pham'] ?>"><?= $sp['ten_san_pham'] ?></a></h3>
                                <div class="product-price">
                                    <?php if ($sp['gia_khuyen_mai'] > 0): ?>
                                    <span class="new-price"  style="color: #cea679; font-weight: bold; text-decoration: none;" ><?= $sp['gia_khuyen_mai'] ?>$</span>
                                    <span class="old-price"  style="text-decoration: line-through; color: #gray; ; font-weight: bold;" ><?= $sp['gia_san_pham'] ?>$</span>
                                    <?php else: ?>
                                    <span class="new-price" style="color:#cea679; font-weight: bold;" ><?= $sp['gia_san_pham'] ?>$</span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <!-- Related Products Section End -->

        <footer class="footer-section section bg-dark">

            <!--Footer Top start-->
            <div
                class="footer-top section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-45 pb-lg-25 pb-md-15 pb-sm-5 pb-xs-0">
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
                    </div>div
            </div>
            <!--Footer Top end-->

            <!--Footer bottom start-->
            <div class="footer-bottom section">
                <div class="container ft-border pt-40 pb-40 pt-xs-20 pb-xs-20">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-6 col-md-6 col-sm-8">
                            <div class="copyright text-left">
                                <p>Copyright &copy;2019 <a href="#">Theface</a>. All rights reserved.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-4">
                            <div class="footer-logo text-right">
                                <a href="index.html"><img src="./assets/images/logofoo.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
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