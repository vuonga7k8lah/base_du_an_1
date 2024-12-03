<?php
class SanPhamModel
{
    public $conn;
    public function __construct()
    {
        $this->conn = connectDB();
    }
    public function getAllSanPham()
    {
        try {
            $sql = "SELECT sanpham.*, danhmuc.ten_danh_muc FROM sanpham INNER JOIN danhmuc ON sanpham.id_danh_muc = danhmuc.id_danh_muc";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $th) {
            echo "Lỗi: " . $th->getMessage();
        }
    }
    public function getSanPhamById($san_pham_id)
    {
        try {
            $sql = "SELECT * FROM sanpham WHERE id_san_pham = :id_san_pham";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id_san_pham', $san_pham_id, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch();
        } catch (PDOException $th) {
            echo "Lỗi: " . $th->getMessage();
        }
    }
    public function updateSanPham($san_pham_id, $ten_san_pham, $gia_san_pham, $gia_khuyen_mai, $so_luong, $id_danh_muc, $trang_thai, $mo_ta, $hinh_anh)
    {
        try {
            $gia_khuyen_mai = empty($gia_khuyen_mai) ? null : $gia_khuyen_mai;
            $sql = "UPDATE sanpham SET ten_san_pham = :ten_san_pham, gia_san_pham = :gia_san_pham, gia_khuyen_mai = :gia_khuyen_mai, so_luong = :so_luong, id_danh_muc = :id_danh_muc, trang_thai = :trang_thai, mo_ta = :mo_ta, hinh_anh = :hinh_anh WHERE id_san_pham = :id_san_pham";
            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':ten_san_pham', $ten_san_pham);
            $stmt->bindParam(':gia_san_pham', $gia_san_pham);
            $stmt->bindParam(':gia_khuyen_mai', $gia_khuyen_mai);
            $stmt->bindParam(':so_luong', $so_luong);
            $stmt->bindParam(':id_danh_muc', $id_danh_muc);
            $stmt->bindParam(':trang_thai', $trang_thai);
            $stmt->bindParam(':mo_ta', $mo_ta);
            $stmt->bindParam(':hinh_anh', $hinh_anh);
            $stmt->bindParam(':id_san_pham', $san_pham_id, PDO::PARAM_INT);

            $stmt->execute();
        } catch (PDOException $th) {
            echo "Lỗi: " . $th->getMessage();
        }
    }
    public function insertSanPham($ten_san_pham, $gia_san_pham, $gia_khuyen_mai, $so_luong, $ngay_nhap, $id_danh_muc, $trang_thai, $mo_ta, $hinh_anh)
    {
        try {
            $gia_khuyen_mai = empty($gia_khuyen_mai) ? null : $gia_khuyen_mai;
            $sql = "INSERT INTO  sanpham (ten_san_pham,gia_san_pham,gia_khuyen_mai,so_luong,ngay_tao,id_danh_muc,trang_thai,mo_ta,hinh_anh)
                    values (:ten_san_pham ,:gia_san_pham ,:gia_khuyen_mai ,:so_luong ,:ngay_nhap ,:id_danh_muc ,:trang_thai ,:mo_ta ,:hinh_anh)";
            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':ten_san_pham', $ten_san_pham);
            $stmt->bindParam(':gia_san_pham', $gia_san_pham);
            $stmt->bindParam(':gia_khuyen_mai', $gia_khuyen_mai);
            $stmt->bindParam(':so_luong', $so_luong);
            $stmt->bindParam(':ngay_nhap', $ngay_nhap);
            $stmt->bindParam(':id_danh_muc', $id_danh_muc);
            $stmt->bindParam(':mo_ta', $mo_ta);
            $stmt->bindParam(':trang_thai', $trang_thai);
            $stmt->bindParam(':hinh_anh', $hinh_anh);

            $stmt->execute();
            // lấy id vừa thêm
            return $this->conn->lastInsertId();
            
        } catch (PDOException $th) {
            echo "lỗi" . $th->getMessage();
        }
    }
    public function insertAlbumAnhSanPham($san_pham_id, $link_hinh_anh) {
        try {
          
            $sql = "INSERT INTO hinh_anh_san_phams (id_san_pham, link_hinh_anh)
                    VALUES (:id_san_pham, :link_hinh_anh)";
            $stmt = $this->conn->prepare($sql);
         
            $stmt->bindParam(':id_san_pham', $san_pham_id, PDO::PARAM_INT);
            $stmt->bindParam(':link_hinh_anh', $link_hinh_anh, PDO::PARAM_STR);
          
            $stmt->execute();
            return true;
          
        } catch (PDOException $th) {
            echo "Lỗi khi thêm hình ảnh sản phẩm: " . $th->getMessage();
            return false;
        }
    }
    public function deleteSanPham($san_pham_id)
    {
        try {
            $sql = "DELETE FROM sanpham WHERE id_san_pham = :id_san_pham";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id_san_pham', $san_pham_id, PDO::PARAM_INT);
            $stmt->execute();
        } catch (PDOException $th) {
            echo "Lỗi: " . $th->getMessage();
        }
    }
   
}


?>