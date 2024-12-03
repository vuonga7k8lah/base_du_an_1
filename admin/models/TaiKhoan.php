<?php
class TaiKhoan
{
    public $conn;

    public function __construct()
    {
        $this->conn = connectDB();
    }

    // Lấy tất cả tài khoản theo chức vụ
    public function getAllTaiKhoan($chuc_vu_id)
    {
        try {
            $sql = 'SELECT * FROM tai_khoans WHERE chuc_vu_id = :chuc_vu_id';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([':chuc_vu_id' => $chuc_vu_id]);

            return $stmt->fetchAll();
        } catch (Exception $e) {
            echo "Lỗi: " . $e->getMessage();
        }
    }
    public function getAllCustomer()
    {
        try {
            $sql = 'SELECT * FROM nguoidung';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            
            // Lấy toàn bộ kết quả trả về và lưu vào $res
            $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            return $res; // Trả về danh sách khách hàng
        } catch (Exception $e) {
            echo "Lỗi: " . $e->getMessage();
            return false; // Trả về false nếu xảy ra lỗi
        }
    }
    // Lấy tài khoản theo ID
    public function getTaiKhoanById($id)
    {
        try {
            $sql = 'SELECT * FROM tai_khoans WHERE id = :id';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([':id' => $id]);

            return $stmt->fetch();
        } catch (Exception $e) {
            echo "Lỗi: " . $e->getMessage();
        }
    }

    // Thêm tài khoản mới
    public function insertTaiKhoan($ho_ten, $email, $ngay_sinh, $so_dien_thoai, $gioi_tinh, $dia_chi, $anh_dai_dien, $password, $chuc_vu_id, $trang_thai)
    {
        try {
            $sql = 'INSERT INTO tai_khoans (ho_ten, email, ngay_sinh, so_dien_thoai, gioi_tinh, dia_chi, anh_dai_dien, mau_khau, chuc_vu_id, trang_thai) 
                    VALUES (:ho_ten, :email, :ngay_sinh, :so_dien_thoai, :gioi_tinh, :dia_chi, :anh_dai_dien, :password, :chuc_vu_id, :trang_thai)';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                ':ho_ten' => $ho_ten,
                ':email' => $email,
                ':ngay_sinh' => $ngay_sinh,
                ':so_dien_thoai' => $so_dien_thoai,
                ':gioi_tinh' => $gioi_tinh,
                ':dia_chi' => $dia_chi,
                ':anh_dai_dien' => $anh_dai_dien,
                ':password' => $password,
                ':chuc_vu_id' => $chuc_vu_id,
                ':trang_thai' => $trang_thai
            ]);
        } catch (Exception $e) {
            echo "Lỗi: " . $e->getMessage();
        }
    }

    // Cập nhật tài khoản
    public function updateTaiKhoan($id, $ho_ten, $email, $ngay_sinh, $so_dien_thoai, $gioi_tinh, $dia_chi, $anh_dai_dien, $password, $chuc_vu_id, $trang_thai)
    {
        try {
            $sql = 'UPDATE tai_khoans 
                    SET ho_ten = :ho_ten, email = :email, ngay_sinh = :ngay_sinh, so_dien_thoai = :so_dien_thoai, gioi_tinh = :gioi_tinh, dia_chi = :dia_chi, 
                        anh_dai_dien = :anh_dai_dien, mau_khau = :password, chuc_vu_id = :chuc_vu_id, trang_thai = :trang_thai 
                    WHERE id = :id';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                ':ho_ten' => $ho_ten,
                ':email' => $email,
                ':ngay_sinh' => $ngay_sinh,
                ':so_dien_thoai' => $so_dien_thoai,
                ':gioi_tinh' => $gioi_tinh,
                ':dia_chi' => $dia_chi,
                ':anh_dai_dien' => $anh_dai_dien,
                ':password' => $password,
                ':chuc_vu_id' => $chuc_vu_id,
                ':trang_thai' => $trang_thai,
                ':id' => $id
            ]);
            return true;
        } catch (Exception $e) {
            echo "Lỗi: " . $e->getMessage();
            return false;
        }
    }

    // Xóa tài khoản
    public function deleteTaiKhoan($id)
    {
        try {
            $sql = 'DELETE FROM tai_khoans WHERE id = :id';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([':id' => $id]);
        } catch (Exception $e) {
            echo "Lỗi: " . $e->getMessage();
        }
    }
}
?>
