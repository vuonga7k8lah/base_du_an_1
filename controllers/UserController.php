<?php 
class UserController {
    private $userModel;

    public function __construct() {
        $this->userModel = new User();
    }

    // Đăng ký
    public function account() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $action = $_POST['action'] ?? ''; // `login` hoặc `register`
            $ten_dang_nhap = $_POST['ten_dang_nhap'] ?? '';
            $mat_khau = $_POST['mat_khau'] ?? '';
    
            if ($action === 'login') {
                // Xử lý đăng nhập
                $user = $this->userModel->checkUser($ten_dang_nhap, $mat_khau);
                if ($user) {
                    $_SESSION['user'] = $user;
                    echo "<script>alert('Đăng nhập thành công!'); window.location.href = '?act=trang-chu';</script>";
                    exit();
                } else {
                    echo "<script>alert('Tên đăng nhập hoặc mật khẩu không đúng.');</script>";
                }
            } elseif ($action === 'register') {
                // Xử lý đăng ký
                $email = $_POST['email'] ?? '';
                $re_mat_khau = $_POST['re_mat_khau'] ?? '';
    
                if (empty($ten_dang_nhap) || empty($mat_khau) || empty($email) || empty($re_mat_khau)) {
                    echo "<script>alert('Vui lòng điền đầy đủ thông tin.');</script>";
                } elseif ($mat_khau !== $re_mat_khau) {
                    echo "<script>alert('Mật khẩu và xác nhận mật khẩu không khớp.');</script>";
                } else {
                    if ($this->userModel->addNewUser($ten_dang_nhap, $mat_khau, $email)) {
                        echo "<script>alert('Đăng ký thành công! Hãy đăng nhập.'); window.location.href = '?act=tai-khoan';</script>";
                        exit();
                    } else {
                        echo "<script>alert('Tên đăng nhập đã tồn tại hoặc lỗi xảy ra.');</script>";
                    }
                }
            }
        }
    
        include './views/account.php'; // Hiển thị lại giao diện
    }
    
    
    public function logout(){
        session_destroy();
        header('Location: ?act=trang-chu');
    }
}

