<?php

class GioHangController {
    public $gioHangModel;

    public function __construct() {
        $this->gioHangModel = new GioHangModel();
    }

    public function index() {
        if (!isset($_SESSION['user'])) {
            header('Location: ?act=tai-khoan');
            exit();
        }
        $gioHang = $this->gioHangModel->getGioHangByUserId($_SESSION['user']);
        require_once './views/cart.php';
    }

    public function add() {
        if (!isset($_SESSION['user'])) {
            header('Location: ?act=tai-khoan');
            exit();
        }
        $idSanPham = $_POST['product_id'];
        $quantity = $_POST['quantity'];

        $this->gioHangModel->addToCart($_SESSION['user'], $idSanPham, $quantity);

        header('Location: ?act=gio-hang');
        exit();
    }

    public function remove() {
        if (!isset($_SESSION['user'])) {
            header('Location: ?act=tai-khoan');
            exit();
        }
        $idSanPham = $_GET['id'] ?? null;

        if ($idSanPham) {
            $this->gioHangModel->removeFromCart($_SESSION['user'], $idSanPham);
        }

        header('Location: ?act=gio-hang');
        exit();
    }
    public function updateCartQuantity() {
        if (!isset($_SESSION['user'])) {
            header('Location: ?act=tai-khoan');
            exit();
        }
    
        $userId = $_SESSION['user'];
        $idSanPham = $_POST['idSanPham'] ?? null;
        $soLuong = $_POST['soLuong'] ?? null;
    
        if ($idSanPham && $soLuong) {
            // Lấy số lượng tồn kho từ model
            $soLuongTon = $this->gioHangModel->getSoLuongTon($idSanPham);
    
            // Kiểm tra số lượng nhập vào
            if ($soLuong > $soLuongTon) {
                $_SESSION['error'] = 'Số lượng vượt quá tồn kho!';
                header('Location: ?act=gio-hang');
                exit();
            }
    
            // Cập nhật số lượng trong giỏ hàng
            $this->gioHangModel->updateSoLuongSanPham($userId, $idSanPham, $soLuong);
        }
    
        header('Location: ?act=gio-hang');
        exit();
    }
    
}
?>
