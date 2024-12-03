<?php 

class HomeController
{
  public  $modelDanhMuc;
  public  $modelHome;
  
  public function __construct(){
    $this->modelHome = new HomeModel();
    
  }
  public function index() {
    $listSanPham = $this->modelHome->getAllSanPham();
  
    require_once 'views/home.php';
  }

public function thanhtoan(){

        // if (isset($_SESSION['user_client'])){
        //   $user = $this->modelUser->getTaiKhoanFormEmail['user_client'];
        //   // lấy dữ liệu giỏ hàng người dùng
        //   $gioHang = $this->modelGioHangModel->getGioHangFormUser($user['id']);
        //   if(!$gioHang) {
        //     $gioHangId = $this->modelGioHangModel->addGioHang($user['id']);
        //     $gioHang = ['id'=>$gioHangId];
        //     $chiTietGioHang = $this->modelGioHangModel->getDetailGioHangModel($gioHang['id']);
        //   }else{
        //     $chiTietGioHang = $this->modelGioHangModel->getDetailGioHangModel($gioHang['id']);
        //   }
        //   require_once(__DIR__ . '/../views/cart.php');
        // }else{
        //   var_dump('chưa đăng nhập');die;
        // }

  require_once(__DIR__ . '/../views/thanhtoan.php');

}

}