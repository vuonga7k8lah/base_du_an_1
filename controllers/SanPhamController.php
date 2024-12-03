<?php

class SanPhamController
{
    public $modelSanPham;
    public $modelDanhMuc;
    public $modelGioHang;
    public function __construct()
    {
        $this->modelSanPham = new SanPhamModel();
        $this->modelDanhMuc = new DanhMucModel();
        $this->modelGioHang = new GioHangModel();
    }

    public function sanPhamTheoDanhMuc($idDanhMuc = null)
    {
        // Lấy tất cả danh mục từ database
        $danhMucs = $this->modelDanhMuc->getAllDanhMuc();

        // Kiểm tra và lấy danh mục đầu tiên nếu không có $idDanhMuc
        if ($idDanhMuc === null && !empty($danhMucs)) {
            $idDanhMuc = $danhMucs[0]['id_danh_muc']; // ID của danh mục đầu tiên
        }

        // Nếu không tìm thấy danh mục
        if ($idDanhMuc === null) {
            die("Không tìm thấy danh mục phù hợp.");
        }

        $productsPerPage = 8;
        $totalProducts = $this->modelSanPham->countSanPhamByDanhMuc($idDanhMuc);
        $totalPages = ceil($totalProducts / $productsPerPage);
        $currentPage = isset($_GET['page']) ? (int) $_GET['page'] : 1;
        $startIndex = ($currentPage - 1) * $productsPerPage;

        $currentProducts = $this->modelSanPham->getSanPhamByDanhMucWithPagination($idDanhMuc, $productsPerPage, $startIndex);
        $danhMuc = $this->modelDanhMuc->getDanhMucById($idDanhMuc);
       


        
        

        // Gửi dữ liệu sang view
        require_once 'views/shop.php';
    }
    public function sanPhamTheoGia()
    {
        $minPrice = isset($_GET['min_price']) ? (int)$_GET['min_price'] : 0;
        $maxPrice = isset($_GET['max_price']) ? (int)$_GET['max_price'] : PHP_INT_MAX;

        $productsPerPage = 8;
        $totalProducts = $this->modelSanPham->countSanPhamByPriceRange($minPrice, $maxPrice);
        $totalPages = ceil($totalProducts / $productsPerPage);
        $currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $startIndex = ($currentPage - 1) * $productsPerPage;

        $currentProducts = $this->modelSanPham->getSanPhamByPriceRangeWithPagination($minPrice, $maxPrice, $productsPerPage, $startIndex);

        $danhMucs = $this->modelDanhMuc->getAllDanhMuc();

        require_once 'views/shop.php';
    }
    public function sanPhamChiTiet($idSanPham = null)
    {
        $sanPham = $this->modelSanPham->getSanPhamById($idSanPham);
        $sanPhamLienQuan = $this->modelSanPham->getSanPhamLienQuan($sanPham['id_danh_muc'], $idSanPham);
        $danhMuc = $this->modelDanhMuc->getDanhMucById($sanPham['id_danh_muc']);
        require_once 'views/single-product.php';
    }




}