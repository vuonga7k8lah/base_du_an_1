<?php

class AuthController
{
	public $model;
	public function __contructor(){
		$this->model= ConnectDB::makeConnection();
	}
	public function login(){
		require_once "views/auth/login.php";
	}
	public function handleLogin(){

		$username = $_POST['username'];
		$password = $_POST['password'];

		$conn = ConnectDB::makeConnection();

// Chuẩn bị câu truy vấn an toàn
		$stmt = $conn->prepare("SELECT * FROM nguoidung WHERE ten_dang_nhap = ?");
		$stmt->bind_param("s", $username); // 's' tương ứng với kiểu string

// Thực thi câu truy vấn
		$stmt->execute();
		$result = $stmt->get_result();

// Lấy dữ liệu
		$user = $result->fetch_assoc();

		if ($user && password_verify($password, $user['mat_khau'])&&$user['vai_tro']=='admin') {

			$_SESSION['is_admin'] = true;
			echo "<script>alert('Đăng nhập thành công!'); window.location.href = '".BASE_URL.'/admin'."';</script>";
			exit();
		}else{
			echo "<script>alert('Tên đăng nhập hoặc mật khẩu không đúng.');window.location.href = '".BASE_URL.'/admin'."';</script>";
		}

	}

	public function adminLogout(){
		$_SESSION['is_admin'] = false;
		echo "<script>alert('Đăng xuất thành công!'); window.location.href = '".BASE_URL.'/admin'."';</script>";
		exit();
	}
}