<?php

class CommentModel
{
	public static function getAll()
	{
		return ConnectDB::makeConnection()->query("SELECT 
							    binhluan.ma_binh_luan,
							    binhluan.noi_dung AS noi_dung_binh_luan,
							    binhluan.danh_gia,
							    binhluan.status,
							    binhluan.ngay_tao,
							    nguoidung.ten_dang_nhap,
							    sanpham.ten_san_pham,
							    sanpham.hinh_anh
							FROM binhluan
							JOIN nguoidung ON binhluan.ma_nguoi_dung = nguoidung.ma_nguoi_dung
							JOIN sanpham ON binhluan.ma_san_pham = sanpham.id_san_pham;
							")->fetch_all(MYSQLI_ASSOC);
	}

	public static function getById($id)
	{
		return ConnectDB::makeConnection()->query("SELECT * FROM binhluan where ma_binh_luan=" . $id)->fetch_assoc();
	}

	public static function update($id, $data)
	{
		return ConnectDB::makeConnection()->query("UPDATE `binhluan` SET `noi_dung`='" . $data['noi_dung'] .
			"',`danh_gia`='"
			. $data['danh_gia'] . "',`status`='" . $data['status'] . "' WHERE ma_binh_luan="
			. $id);
	}

	public static function delete($id)
	{
		return ConnectDB::makeConnection()->query("DELETE FROM `binhluan` WHERE ma_binh_luan=" . $id);
	}
	public static function getAllByProductID($id){
		return ConnectDB::makeConnection()->query("SELECT binhluan.ma_binh_luan,
							    binhluan.noi_dung AS noi_dung_binh_luan,
							    binhluan.danh_gia,
							    binhluan.ngay_tao,
							    nguoidung.ten_dang_nhap FROM binhluan JOIN nguoidung ON binhluan.ma_nguoi_dung = nguoidung.ma_nguoi_dung where status=1 and ma_san_pham=" . $id)
			->fetch_all
		(MYSQLI_ASSOC);
	}
	public static function create($data){
		return ConnectDB::makeConnection()->query("INSERT INTO `binhluan`(`ma_binh_luan`, `ma_san_pham`, `ma_nguoi_dung`, `noi_dung`, `danh_gia`) VALUES (null,'" . $data['ma_san_pham'] . "','" . $data['ma_nguoi_dung'] . "','" . $data['noi_dung'] . "','" . $data['danh_gia'] . "')");
	}
}