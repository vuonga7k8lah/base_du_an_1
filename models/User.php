<?php 
class User {
    private $conn;

    public function __construct() {
        $this->conn = connectDB();
    }

    // Thêm người dùng mới
    public function addNewUser($ten_dang_nhap, $mat_khau, $email, $vai_tro = 'user') {
        $sql = "INSERT INTO nguoidung (ten_dang_nhap, mat_khau, email, vai_tro, ngay_tao) 
                VALUES (:ten_dang_nhap, :mat_khau, :email, :vai_tro, NOW())";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':ten_dang_nhap', $ten_dang_nhap);
        $passwordHash = password_hash($mat_khau, PASSWORD_BCRYPT);
        $stmt->bindParam(':mat_khau', $passwordHash); // Mã hóa mật khẩu
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':vai_tro', $vai_tro);
        return $stmt->execute();
    }

    // Kiểm tra thông tin đăng nhập
    public function checkUser($ten_dang_nhap, $mat_khau) {
        $sql = "SELECT * FROM nguoidung WHERE ten_dang_nhap = :ten_dang_nhap";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':ten_dang_nhap', $ten_dang_nhap);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($mat_khau, $user['mat_khau'])) {
            return $user; // Đăng nhập thành công
        }
        return false; // Sai thông tin
    }
}
