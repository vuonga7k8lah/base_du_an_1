<?php
class SanPhamModel
{
    private $conn;

    public function __construct()
    {
        $this->conn = connectDB();
    }

    public function getSanPhamByDanhMuc($idDanhMuc)
    {
        try {
            $sql = "SELECT sanpham.*, danhmuc.ten_danh_muc 
                    FROM sanpham 
                    INNER JOIN danhmuc 
                    ON sanpham.id_danh_muc = danhmuc.id_danh_muc 
                    WHERE sanpham.id_danh_muc = :idDanhMuc";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':idDanhMuc', $idDanhMuc, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $th) {
            echo "Lỗi: " . $th->getMessage();
        }
    }

    public function countSanPhamByDanhMuc($idDanhMuc)
    {
        try {
            $sql = "SELECT COUNT(*) FROM sanpham WHERE id_danh_muc = :idDanhMuc";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':idDanhMuc', $idDanhMuc, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetchColumn();
        } catch (PDOException $th) {
            echo "Lỗi: " . $th->getMessage();
        }
    }

    public function getSanPhamByDanhMucWithPagination($idDanhMuc, $limit, $offset)
    {
        try {
            $sql = "SELECT sanpham.*, danhmuc.ten_danh_muc 
                    FROM sanpham 
                    INNER JOIN danhmuc 
                    ON sanpham.id_danh_muc = danhmuc.id_danh_muc 
                    WHERE sanpham.id_danh_muc = :idDanhMuc
                    LIMIT :limit OFFSET :offset";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':idDanhMuc', $idDanhMuc, PDO::PARAM_INT);
            $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
            $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $th) {
            echo "Lỗi: " . $th->getMessage();
        }
    }
    public function getSanPhamByPriceRange($minPrice, $maxPrice)
{
    $sql = "
        SELECT * 
        FROM sanpham
        WHERE 
            (IFNULL(gia_khuyen_mai, 0) BETWEEN :minPrice AND :maxPrice 
            OR gia_san_pham BETWEEN :minPrice AND :maxPrice)
    ";
    $stmt = $this->conn->prepare($sql);
    $stmt->bindParam(':minPrice', $minPrice, PDO::PARAM_INT);
    $stmt->bindParam(':maxPrice', $maxPrice, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

public function countSanPhamByPriceRange($minPrice, $maxPrice)
{
    try {
        $sql = "
            SELECT COUNT(*) 
            FROM sanpham
            WHERE 
                (IFNULL(gia_khuyen_mai, gia_san_pham) BETWEEN :minPrice AND :maxPrice)
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':minPrice', $minPrice, PDO::PARAM_INT);
        $stmt->bindParam(':maxPrice', $maxPrice, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchColumn();
    } catch (PDOException $th) {
        echo "Lỗi: " . $th->getMessage();
    }
}

public function getSanPhamByPriceRangeWithPagination($minPrice, $maxPrice, $limit, $offset)
{
    try {
        $sql = "
            SELECT * 
            FROM sanpham
            WHERE 
                (IFNULL(gia_khuyen_mai, gia_san_pham) BETWEEN :minPrice AND :maxPrice)
            LIMIT :limit OFFSET :offset
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':minPrice', $minPrice, PDO::PARAM_INT);
        $stmt->bindParam(':maxPrice', $maxPrice, PDO::PARAM_INT);
        $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
        $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $th) {
        echo "Lỗi: " . $th->getMessage();
    }
}
public function getSanPhamById($idSanPham){
    $sql = "Select * from sanpham where id_san_pham=:idSanPham";
    $stmt = $this->conn->prepare($sql);
    $stmt->bindParam(':idSanPham', $idSanPham, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch();
}

public function getSanPhamLienQuan($idDanhMuc, $idSanPham)
{
    try {
        $sql = "SELECT * FROM sanpham 
                WHERE id_danh_muc = :idDanhMuc AND id_san_pham != :idSanPham 
                LIMIT 4";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':idDanhMuc', $idDanhMuc, PDO::PARAM_INT);
        $stmt->bindParam(':idSanPham', $idSanPham, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $th) {
        echo "Lỗi: " . $th->getMessage();
    }
}

}

?>