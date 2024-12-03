<?php

class DanhMucModel {
	public $conn;
	function __construct(){
		$this->conn=connectDB();
	}

	// Danh sách danh mục
	public function getAll(){
		try {
			$sql = "SELECT * FROM danhmuc";
			$stmt = $this->conn->prepare($sql);
			$stmt->execute();
			return $stmt->fetchAll();
		} catch (PDOException $th) {
			echo "lỗi" .$th->getMessage();
		}
	}
	public function postData($ten_danh_muc,$trang_thai){
		try {
			$sql = "insert into danhmuc (ten_danh_muc,trang_thai)
                        values (:ten_danh_muc , :trang_thai)";
			$stmt = $this->conn->prepare($sql);
			$stmt->bindParam(':ten_danh_muc',$ten_danh_muc);
			$stmt->bindParam(':trang_thai',$trang_thai);
			$stmt->execute();
			return true;
		} catch (PDOException $th) {
			echo "lỗi" .$th->getMessage();
		}
	}
	public function deleteData($id){
		$sql="delete from danhmuc where id_danh_muc=:id";
		$stmt=$this->conn->prepare($sql);
		$stmt->bindParam(':id',$id);
		$stmt->execute();
		return true;

	}
	// lấy thông tin chi tiết
	public function getDetailData($id){
		try {
			$sql="  select * from danhmuc where id_danh_muc=:id";
			$stmt=$this->conn->prepare($sql);
			$stmt->bindParam(':id',$id);
			$stmt->execute();
			return $stmt->fetch();
		} catch (PDOException $th) {
			echo "lỗi" .$th->getMessage();
		}

	}

	public function updateData($id,$ten_danh_muc,$trang_thai){
		try {
			$sql = "UPDATE danhmuc set ten_danh_muc=:ten_danh_muc , trang_thai=:trang_thai where id_danh_muc=:id";
			$stmt = $this->conn->prepare($sql);
			$stmt->bindParam(':ten_danh_muc',$ten_danh_muc);
			$stmt->bindParam(':trang_thai',$trang_thai);
			$stmt->bindParam(':id',$id);
			$stmt->execute();
			return true;
		} catch (PDOException $th) {
			echo "lỗi" .$th->getMessage();
		}
	}
	// húy kết nối csdl
	function __destruct(){
		$this->conn=null;
	}
}
?>