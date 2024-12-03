-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 03, 2024 at 06:49 AM
-- Server version: 5.7.39
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo1`
--

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `ma_binh_luan` int(11) NOT NULL,
  `ma_san_pham` int(11) NOT NULL,
  `ma_nguoi_dung` int(11) NOT NULL,
  `noi_dung` text NOT NULL,
  `danh_gia` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `ngay_tao` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`ma_binh_luan`, `ma_san_pham`, `ma_nguoi_dung`, `noi_dung`, `danh_gia`, `status`, `ngay_tao`) VALUES
(1, 32, 7, 'hay vkl', 5, 1, '2024-12-03 03:09:09'),
(2, 32, 4, 'rat hay', 2, 0, '2024-12-03 03:09:43'),
(3, 32, 7, 'xxxx', 3, 0, '2024-12-03 06:47:21');

-- --------------------------------------------------------

--
-- Table structure for table `binh_luans`
--

CREATE TABLE `binh_luans` (
  `id` int(11) NOT NULL,
  `san_pham_id` int(11) NOT NULL,
  `tai_khoan_id` int(11) NOT NULL,
  `noi_dung` text NOT NULL,
  `ngay_dang` date NOT NULL,
  `trang_thai` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `binh_luans`
--

INSERT INTO `binh_luans` (`id`, `san_pham_id`, `tai_khoan_id`, `noi_dung`, `ngay_dang`, `trang_thai`) VALUES
(1, 32, 3, 'sản phẩm này cong hàng không shop', '2024-11-26', 1),
(2, 32, 3, 'shop ơi rep ib em ', '2024-11-26', 1),
(3, 32, 3, 'ship hoả tốc không shop ơi', '2024-11-27', 1),
(4, 32, 3, 'hàng chất lượng oke đó shop sẽ ủng hộ tiếp', '2024-11-30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `ma_chi_tiet_don_hang` int(11) NOT NULL,
  `ma_don_hang` int(11) NOT NULL,
  `ma_san_pham` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `gia` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `chi_tiet_gio_hang`
--

CREATE TABLE `chi_tiet_gio_hang` (
  `id_chi_tiet_gio_hang` int(11) NOT NULL,
  `id_gio_hang` int(11) DEFAULT NULL,
  `id_san_pham` int(11) DEFAULT NULL,
  `so_luong` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chi_tiet_gio_hang`
--

INSERT INTO `chi_tiet_gio_hang` (`id_chi_tiet_gio_hang`, `id_gio_hang`, `id_san_pham`, `so_luong`) VALUES
(22, 4, NULL, NULL),
(23, 4, NULL, NULL),
(24, 4, NULL, NULL),
(25, 4, NULL, NULL),
(26, 4, NULL, NULL),
(27, 4, NULL, NULL),
(28, 4, NULL, NULL),
(34, 4, 45, 5),
(49, 4, 32, 1);

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id_danh_muc` int(11) NOT NULL,
  `ten_danh_muc` varchar(100) NOT NULL,
  `mo_ta` text,
  `trang_thai` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id_danh_muc`, `ten_danh_muc`, `mo_ta`, `trang_thai`) VALUES
(1, 'Hỗ trợ tiêu hóa', NULL, 1),
(2, 'Hỗ trợ tim mạch', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `diachi`
--

CREATE TABLE `diachi` (
  `ma_dia_chi` int(11) NOT NULL,
  `ma_nguoi_dung` int(11) NOT NULL,
  `ten_nguoi_nhan` varchar(100) NOT NULL,
  `so_dien_thoai` varchar(15) NOT NULL,
  `dia_chi` text NOT NULL,
  `thanh_pho` varchar(50) NOT NULL,
  `quan_huyen` varchar(50) DEFAULT NULL,
  `phuong_xa` varchar(50) DEFAULT NULL,
  `ma_buu_chinh` varchar(10) DEFAULT NULL,
  `mac_dinh` tinyint(1) DEFAULT '0',
  `ngay_tao` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `ma_don_hang` int(11) NOT NULL,
  `ma_nguoi_dung` int(11) NOT NULL,
  `tong_gia_tri` decimal(10,2) NOT NULL,
  `trang_thai` varchar(20) NOT NULL,
  `ngay_tao` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `ma_dia_chi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `giohang`
--

CREATE TABLE `giohang` (
  `id_gio_hang` int(11) NOT NULL,
  `id_nguoi_dung` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `giohang`
--

INSERT INTO `giohang` (`id_gio_hang`, `id_nguoi_dung`) VALUES
(4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `hinh_anh_san_phams`
--

CREATE TABLE `hinh_anh_san_phams` (
  `id` int(11) NOT NULL,
  `id_san_pham` int(11) NOT NULL,
  `link_hinh_anh` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE `nguoidung` (
  `ma_nguoi_dung` int(11) NOT NULL,
  `ten_dang_nhap` varchar(50) NOT NULL,
  `mat_khau` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `vai_tro` varchar(10) NOT NULL,
  `ngay_tao` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`ma_nguoi_dung`, `ten_dang_nhap`, `mat_khau`, `email`, `vai_tro`, `ngay_tao`) VALUES
(1, 'doanh', '12345', 'doanhtino19@gmail.com', 'user', '2024-11-24 11:41:18'),
(3, 'admin123', '$2y$10$.JKZdq7FwJSvBEYa1cFl9uY7tGLPvFl64Rt18ITC6bgaBi4yOwj7S', 'admin123@gmail.com', 'user', '2024-11-26 02:30:00'),
(4, 'doanh123', '$2y$10$XEkO0FayL5z0K09duVJzju55GCcpxFBElMaVhLN.VhHMqPxfYUds2', 'admin123@gmail.com', 'user', '2024-11-26 03:04:28'),
(5, 'doanh123', '$2y$10$fXfSJXmNEabtZoz8My5SnOelX5YOY3rsuXYqPzLrsg7Xnhc7l69bK', 'admin123@gmail.com', 'user', '2024-11-26 03:05:32'),
(6, 'admin123', '$2y$10$2UaYySHFgtGg9MNAeUiFoOvxif6UHIr6SV1BfNxW0uoC20GKXGtBO', 'admin123@gmail.com', 'user', '2024-11-30 02:46:32'),
(7, 'demo', '$2y$10$h9xRSJODm1S5Ta0GkD0f/ewLW0WlhV.vvamoeWVnUwOHIcgvF8iIq', 'kalilinux4@gmail.com', 'user', '2024-12-03 02:12:05');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id_san_pham` int(11) NOT NULL,
  `id_danh_muc` int(11) NOT NULL,
  `ten_san_pham` varchar(100) NOT NULL,
  `mo_ta` text,
  `gia_san_pham` decimal(10,2) NOT NULL,
  `gia_khuyen_mai` decimal(10,2) DEFAULT NULL,
  `so_luong` int(11) NOT NULL,
  `ngay_tao` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `trang_thai` tinyint(1) NOT NULL,
  `hinh_anh` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id_san_pham`, `id_danh_muc`, `ten_san_pham`, `mo_ta`, `gia_san_pham`, `gia_khuyen_mai`, `so_luong`, `ngay_tao`, `trang_thai`, `hinh_anh`) VALUES
(32, 2, 'hoạt huyết dưỡng não ', 'tốt cho người bị huyết áp cao\r\n', '5.32', '4.32', 12, '2024-11-18 17:00:00', 1, './uploads/1732028689hoat_huyet_duong_nao.png');

-- --------------------------------------------------------

--
-- Table structure for table `tai_khoans`
--

CREATE TABLE `tai_khoans` (
  `id` int(11) NOT NULL,
  `ho_ten` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `anh_dai_dien` text CHARACTER SET utf8mb4 NOT NULL,
  `ngay_sinh` date NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `so_dien_thoai` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `gioi_tinh` tinyint(1) DEFAULT '1',
  `dia_chi` text CHARACTER SET utf8mb4 NOT NULL,
  `mau_khau` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `chuc_vu_id` int(11) NOT NULL,
  `trang_thai` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tai_khoans`
--

INSERT INTO `tai_khoans` (`id`, `ho_ten`, `anh_dai_dien`, `ngay_sinh`, `email`, `so_dien_thoai`, `gioi_tinh`, `dia_chi`, `mau_khau`, `chuc_vu_id`, `trang_thai`) VALUES
(1, 'doanh123', './uploads/avatar_6745428dc2e474.16899209.webp', '2005-03-19', 'hoangquocdoanh6686@gmail.com', '0879273804', 1, 'số 1 hà nội', '123456', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`ma_binh_luan`),
  ADD KEY `ma_san_pham` (`ma_san_pham`),
  ADD KEY `ma_nguoi_dung` (`ma_nguoi_dung`);

--
-- Indexes for table `binh_luans`
--
ALTER TABLE `binh_luans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`ma_chi_tiet_don_hang`),
  ADD KEY `ma_don_hang` (`ma_don_hang`),
  ADD KEY `ma_san_pham` (`ma_san_pham`);

--
-- Indexes for table `chi_tiet_gio_hang`
--
ALTER TABLE `chi_tiet_gio_hang`
  ADD PRIMARY KEY (`id_chi_tiet_gio_hang`),
  ADD UNIQUE KEY `id_gio_hang` (`id_gio_hang`,`id_san_pham`),
  ADD KEY `id_san_pham` (`id_san_pham`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id_danh_muc`);

--
-- Indexes for table `diachi`
--
ALTER TABLE `diachi`
  ADD PRIMARY KEY (`ma_dia_chi`),
  ADD KEY `fk_diachi_nguoidung` (`ma_nguoi_dung`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`ma_don_hang`),
  ADD KEY `ma_nguoi_dung` (`ma_nguoi_dung`),
  ADD KEY `fk_donhang_diachi` (`ma_dia_chi`);

--
-- Indexes for table `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`id_gio_hang`),
  ADD KEY `id_nguoi_dung` (`id_nguoi_dung`);

--
-- Indexes for table `hinh_anh_san_phams`
--
ALTER TABLE `hinh_anh_san_phams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_idsp_sanpham` (`id_san_pham`);

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`ma_nguoi_dung`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_san_pham`),
  ADD KEY `ma_danh_muc` (`id_danh_muc`);

--
-- Indexes for table `tai_khoans`
--
ALTER TABLE `tai_khoans`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `ma_binh_luan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `binh_luans`
--
ALTER TABLE `binh_luans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `ma_chi_tiet_don_hang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chi_tiet_gio_hang`
--
ALTER TABLE `chi_tiet_gio_hang`
  MODIFY `id_chi_tiet_gio_hang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id_danh_muc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `diachi`
--
ALTER TABLE `diachi`
  MODIFY `ma_dia_chi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `ma_don_hang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `giohang`
--
ALTER TABLE `giohang`
  MODIFY `id_gio_hang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hinh_anh_san_phams`
--
ALTER TABLE `hinh_anh_san_phams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `ma_nguoi_dung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_san_pham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tai_khoans`
--
ALTER TABLE `tai_khoans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`ma_san_pham`) REFERENCES `sanpham` (`id_san_pham`),
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`ma_nguoi_dung`) REFERENCES `nguoidung` (`ma_nguoi_dung`);

--
-- Constraints for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chitietdonhang_ibfk_1` FOREIGN KEY (`ma_don_hang`) REFERENCES `donhang` (`ma_don_hang`),
  ADD CONSTRAINT `chitietdonhang_ibfk_2` FOREIGN KEY (`ma_san_pham`) REFERENCES `sanpham` (`id_san_pham`);

--
-- Constraints for table `diachi`
--
ALTER TABLE `diachi`
  ADD CONSTRAINT `fk_diachi_nguoidung` FOREIGN KEY (`ma_nguoi_dung`) REFERENCES `nguoidung` (`ma_nguoi_dung`);

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`ma_nguoi_dung`) REFERENCES `nguoidung` (`ma_nguoi_dung`),
  ADD CONSTRAINT `fk_donhang_diachi` FOREIGN KEY (`ma_dia_chi`) REFERENCES `diachi` (`ma_dia_chi`);

--
-- Constraints for table `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `giohang_ibfk_1` FOREIGN KEY (`id_nguoi_dung`) REFERENCES `nguoidung` (`ma_nguoi_dung`);

--
-- Constraints for table `hinh_anh_san_phams`
--
ALTER TABLE `hinh_anh_san_phams`
  ADD CONSTRAINT `lk_idsp_sanpham` FOREIGN KEY (`id_san_pham`) REFERENCES `sanpham` (`id_san_pham`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`id_danh_muc`) REFERENCES `danhmuc` (`id_danh_muc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
