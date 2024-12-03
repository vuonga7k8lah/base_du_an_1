<?php

class CommentController
{
	public $model;

	public function __construct()
	{
		$this->model = new CommentModel();
	}

	public function index()
	{
		// lấy ra dữ liệu danh mục
		$aData = $this->model->getAll();
		// đưa dữ liệu ra view
		require_once "views/comment/list.php";
	}

	public function delete()
	{
		if ($_SERVER['REQUEST_METHOD'] == "POST") {
			$id = $_POST['id'];
			// xóa danh mục
			$this->model->delete($id);
			header("location:?act=list-binh-luan-quan-tri");
			exit();
		}

	}

	public function update()
	{

		if ($_SERVER['REQUEST_METHOD'] == "POST") {
			// lấy ra dữ liệu
			$id = $_POST['id'];

			//   validate
			$errors = [];

			// thêm dữ liệu
			if (empty($errors)) {
				// không có lỗi thì thêm dữ liệu
				$this->model->update($id, [
					'noi_dung' => $_POST['noi_dung'],
					'danh_gia' => $_POST['danh_gia'],
					'status'   => $_POST['status']
				]);

				unset($_SESSION['errors']);
				echo "<script>alert('bạn đã cập nhật thành công')
                       window.location.href='?act=list-binh-luan-quan-tri'
                </script>             
         ";


				exit();
			} else {
				$_SESSION['errors'] = $errors;

				header("location:?act=list-binh-luan-quan-tri");
				exit();
			}
		}

		$id = $_GET['ma_binh_luan'] ?? 0;
		$data = $this->model->getById($id);

		require_once "views/comment/edit.php";
	}
	public function create()
	{
		if ($_SERVER['REQUEST_METHOD'] == "POST") {

			//   validate
			$errors = [];

			// thêm dữ liệu
			if (empty($errors)) {
				// không có lỗi thì thêm dữ liệu
				$this->model->create([
					'ma_san_pham'=>$_POST['ma_sp']??0,
					'ma_nguoi_dung'=>$_POST['ma_user']??0,
					'noi_dung'=>$_POST['content']??'',
					'danh_gia'=>$_POST['rating']??0,
				]);
				echo json_encode(['success' => true]);
				die();
			}
		}
	}

}