<?php 
session_start();
/* --------------------------------- COMMON --------------------------------- */
require_once './commons/env.php'; // Khai báo biến môi trường
require_once './commons/function.php'; // Hàm hỗ trợ
require_once './helper/ConnectDB.php';
/* --------------------------------- COMMON --------------------------------- */

/* ------------------------------- CONTROLLER ------------------------------- */
require_once './controllers/HomeController.php';
require_once './controllers/UserController.php';
/* ------------------------------- CONTROLLER ------------------------------- */

/* ---------------------------------- MODEL --------------------------------- */
require_once './models/User.php';
/* ---------------------------------- MODEL --------------------------------- */

// Require toàn bộ file Controllers
require_once './controllers/HomeController.php';
require_once './controllers/SanPhamController.php';
require_once './controllers/GioHangController.php';

// Require toàn bộ file Models
require_once './models/HomeModel.php';
require_once './models/SanPhamModel.php';
require_once './models/DanhMucModel.php';
require_once './models/GioHangModel.php';

//goi model,controller comment
require_once 'admin/controllers/CommentController.php';
require_once 'admin/models/CommentModel.php';



/* --------------------------------- ROUTER --------------------------------- */
$act = $_GET['act'] ?? '/';
/* --------------------------------- ROUTER --------------------------------- */

// Để bảo bảo tính chất chỉ gọi 1 hàm Controller để xử lý request thì mình sử dụng match

match ($act) {
    // Trang chủ
    '/'                 => (new HomeController())->index(),
    'trang-chu'                 => (new HomeController())->index(),
    'tai-khoan'           => (new UserController())->account(),
    'dang-xuat'         => (new UserController())->logout(),
    'san-pham-theo-danh-muc' => (new SanPhamController())->sanPhamTheoDanhMuc($_GET['id_danh_muc'] ?? null),
    'san-pham-theo-gia' => (new SanPhamController())->sanPhamTheoGia($_GET['min_price'] ?? null, $_GET['max_price'] ?? null),
    'san-pham-chi-tiet' => (new SanPhamController())->sanPhamChiTiet($_GET['id_san_pham'] ?? null),
    'gio-hang' => (new GioHangController())->index(),
    'add-to-cart' => (new GioHangController())->add(),
    'remove' => (new GioHangController())->remove(),
    'update-cart' => (new GioHangController())->updateCartQuantity(),
    'thanh-toan' =>(new HomeController())->thanhtoan(),
    'create-comment' =>(new CommentController())->create(),
};