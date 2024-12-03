<?php
class GioHangModel{
    public $conn;
    public function __construct(){
        $this->conn = connectDB();
    }
    public function getGioHangByUserId($userId) {
        $sql = "SELECT sp.id_san_pham, sp.ten_san_pham, sp.gia_san_pham, sp.hinh_anh, ctgh.so_luong
                FROM chi_tiet_gio_hang ctgh
                JOIN sanpham sp ON ctgh.id_san_pham = sp.id_san_pham
                JOIN giohang gh ON ctgh.id_gio_hang = gh.id_gio_hang
                WHERE gh.id_nguoi_dung = :userId";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':userId', $userId, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function addToCart($userId, $idSanPham, $quantity) {
        // Kiểm tra giỏ hàng của người dùng
        $gioHangId = $this->getGioHangIdByUserId($userId);
        if (!$gioHangId) {
            $gioHangId = $this->createGioHang($userId);
        }

        // Thêm hoặc cập nhật sản phẩm trong chi tiết giỏ hàng
        $sql = "INSERT INTO chi_tiet_gio_hang (id_gio_hang, id_san_pham, so_luong)
                VALUES (:gioHangId, :idSanPham, :quantity)
                ON DUPLICATE KEY UPDATE so_luong = so_luong + :quantity";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':gioHangId', $gioHangId, PDO::PARAM_INT);
        $stmt->bindParam(':idSanPham', $idSanPham, PDO::PARAM_INT);
        $stmt->bindParam(':quantity', $quantity, PDO::PARAM_INT);
        $stmt->execute();
    }
    public function removeFromCart($userId, $idSanPham) {
        $gioHangId = $this->getGioHangIdByUserId($userId);
        if ($gioHangId) {
            $sql = "DELETE FROM chi_tiet_gio_hang WHERE id_gio_hang = :gioHangId AND id_san_pham = :idSanPham";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':gioHangId', $gioHangId, PDO::PARAM_INT);
            $stmt->bindParam(':idSanPham', $idSanPham, PDO::PARAM_INT);
            $stmt->execute();
        }
    }
    private function getGioHangIdByUserId($userId) {
        $sql = "SELECT id_gio_hang FROM giohang WHERE id_nguoi_dung = :userId";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':userId', $userId, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchColumn();
    }
    private function createGioHang($userId) {
        $sql = "INSERT INTO giohang (id_nguoi_dung) VALUES (:userId)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':userId', $userId, PDO::PARAM_INT);
        $stmt->execute();
        return $this->conn->lastInsertId();
    }
    public function getSoLuongTon($idSanPham) {
        $sql = "SELECT so_luong FROM sanpham WHERE id_san_pham = :idSanPham";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':idSanPham', $idSanPham, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
        return $result['so_luong'] ?? 0;
    }
    public function updateSoLuongSanPham($userId, $idSanPham, $soLuong) {
        $gioHangId = $this->getGioHangIdByUserId($userId);
    
        if ($gioHangId) {
            $sql = "UPDATE chi_tiet_gio_hang 
                    SET so_luong = :soLuong 
                    WHERE id_gio_hang = :gioHangId AND id_san_pham = :idSanPham";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':gioHangId', $gioHangId, PDO::PARAM_INT);
            $stmt->bindParam(':idSanPham', $idSanPham, PDO::PARAM_INT);
            $stmt->bindParam(':soLuong', $soLuong, PDO::PARAM_INT);
            $stmt->execute();
        }
    }
    
    
    
}
?>