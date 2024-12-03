<?php
class TaiKhoanController
{
    public $modelTaiKhoan;

    public function __construct()
    {
        $this->modelTaiKhoan = new TaiKhoan();
    }

    // Hiển thị danh sách tài khoản quản trị
    public function danhsachQuanTri()
    {
        $listQuanTri = $this->modelTaiKhoan->getAllTaiKhoan(1);
        require_once './views/taikhoan/listQuanTri.php';
    }
    public function danhsachKhachHang()
    {
        $khachhangs = $this->modelTaiKhoan->getAllCustomer();
        require_once './views/taikhoan/khachhang/listKhachHang.php';
    }
    // Hiển thị form thêm tài khoản quản trị
    public function formAddQuanTri()
    {
        require_once './views/taikhoan/addQuanTri.php';
    }

    // Xử lý thêm tài khoản quản trị
    public function postAddQuanTri()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $ho_ten = $_POST['ho_ten'];
            $email = $_POST['email'];
            $ngay_sinh = $_POST['ngay_sinh'];
            $so_dien_thoai = $_POST['so_dien_thoai'];
            $gioi_tinh = $_POST['gioi_tinh'];
            $dia_chi = $_POST['dia_chi'];
            $chuc_vu_id = $_POST['chuc_vu_id'];
            $trang_thai = $_POST['trang_thai'];
            $mau_khau = $_POST['mau_khau'];

            $errors = [];
            if (empty($ho_ten)) {
                $errors['ho_ten'] = 'Tên không được để trống';
            }
            if (empty($email)) {
                $errors['email'] = 'Email không được để trống';
            }
            // Xử lý upload ảnh đại diện (nếu có)
            $anh_dai_dien = null;
            if (!empty($_FILES['anh_dai_dien'] ?? 0) && $_FILES['anh_dai_dien']['error'] == 0) {
                // Nếu có ảnh tải lên, thì xử lý upload ảnh
                $anh_dai_dien = $this->uploadImage('anh_dai_dien', $errors);
            } else {
                // Nếu không có ảnh tải lên, có thể gán giá trị mặc định
                $anh_dai_dien = ''; // Hoặc có thể là một đường dẫn tới ảnh mặc định
            }

            if (empty($errors)) {
                // Không mã hóa mật khẩu
                $this->modelTaiKhoan->insertTaiKhoan($ho_ten, $email, $ngay_sinh, $so_dien_thoai, $gioi_tinh, $dia_chi, $anh_dai_dien, $mau_khau, $chuc_vu_id, $trang_thai);

                header("Location: ?act=list-tai-khoan-quan-tri");
                exit();
            } else {
                $_SESSION['errors'] = $errors;
                header("Location: ?act=form-them-quan-tri");
                exit();
            }
        }
    }

    // Hiển thị form sửa tài khoản quản trị
    public function formEditQuanTri()
    {
        $id = $_GET['id_quan_tri'] ?? null;

        if (!$id || !is_numeric($id)) {
            header("Location: ?act=list-tai-khoan-quan-tri");
            exit();
        }

        $taiKhoan = $this->modelTaiKhoan->getTaiKhoanById($id);
        if (!$taiKhoan) {
            header("Location: ?act=list-tai-khoan-quan-tri");
            exit();
        }

        require_once './views/taikhoan/editQuanTri.php';
    }

    // Xử lý sửa tài khoản quản trị
    public function postEditQuanTri()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $id = $_POST['id'];
            $ho_ten = $_POST['ho_ten'];
            $email = $_POST['email'];
            $ngay_sinh = $_POST['ngay_sinh'];
            $so_dien_thoai = $_POST['so_dien_thoai'];
            $gioi_tinh = $_POST['gioi_tinh'];
            $dia_chi = $_POST['dia_chi'];
            $chuc_vu_id = $_POST['chuc_vu_id'];
            $trang_thai = $_POST['trang_thai'];
            $mau_khau = $_POST['mau_khau'];
    
            $errors = [];
            if (empty($ho_ten)) {
                $errors['ho_ten'] = 'Họ tên không được để trống.';
            }
            if (empty($email)) {
                $errors['email'] = 'Email không được để trống.';
            }
    
            // Xử lý upload ảnh đại diện (nếu có)
            $anh_dai_dien = null;
            if (!empty($_FILES['anh_dai_dien'] ?? 0) && $_FILES['anh_dai_dien']['error'] == 0) {
                // Nếu có ảnh tải lên, thì xử lý upload ảnh
                $anh_dai_dien = $this->uploadImage('anh_dai_dien', $errors);
            } else {
                // Nếu không có ảnh tải lên, có thể gán giá trị mặc định
                $anh_dai_dien = ''; // Hoặc có thể là một đường dẫn tới ảnh mặc định
            }
    
            // Nếu không có lỗi, thực hiện cập nhật tài khoản
            if (empty($errors)) {
                // Nếu không thay đổi mật khẩu, không cập nhật trường mau_khau
                if (empty($mau_khau)) {
                    $mau_khau = null;
                }
                // Không mã hóa mật khẩu
                if($this->modelTaiKhoan->updateTaiKhoan($id, $ho_ten, $email, $ngay_sinh, $so_dien_thoai, $gioi_tinh, $dia_chi, $anh_dai_dien, $mau_khau, $chuc_vu_id, $trang_thai)){
                    header("Location: ?act=list-tai-khoan-quan-tri");
                }
                exit();
            } else {
                $_SESSION['errors'] = $errors;
                header("Location: ?act=form-sua-quan-tri&id_quan_tri=$id");
                exit();
            }
        }
    }
    

    // Xử lý xóa tài khoản quản trị
    public function deleteQuanTri()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['id_quan_tri'];
            if ($this->modelTaiKhoan->deleteTaiKhoan($id)) {
                header("Location: ?act=list-tai-khoan-quan-tri");
                exit();
            } else {
                $_SESSION['errors'] = ['delete' => 'Xóa không thành công!'];
                header("Location: ?act=list-tai-khoan-quan-tri");
                exit();
            }
        }
    }

    // Hàm xử lý upload ảnh
    private function uploadImage($inputName, &$errors)
    {
        $uploadFileDir = './uploads/';
    
        // Tạo thư mục nếu chưa tồn tại
        if (!is_dir($uploadFileDir)) {
            mkdir($uploadFileDir, 0755, true);
        }
    
        if (isset($_FILES[$inputName]) && $_FILES[$inputName]['error'] === 0) {
            $fileTmpPath = $_FILES[$inputName]['tmp_name'];
            $fileName = $_FILES[$inputName]['name'];
            $fileSize = $_FILES[$inputName]['size'];
            $fileNameCmps = explode(".", $fileName);
            $fileExtension = strtolower(end($fileNameCmps));
    
            // $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
    
            // Kiểm tra định dạng
            // if (!in_array($fileExtension, $allowedExtensions)) {
            //     $errors['anh_dai_dien'] = 'Chỉ chấp nhận định dạng JPG, JPEG, PNG, GIF.';
            //     return null;
            // }
    
            // Kiểm tra kích thước
            if ($fileSize >= 5000000) {
                $errors['anh_dai_dien'] = 'File quá lớn, vui lòng tải ảnh nhỏ hơn 5MB.';
                return null;
            }
    
            // Tạo tên file mới
            $dest_path = $uploadFileDir . uniqid('avatar_', true) . '.' . $fileExtension;
    
            // Di chuyển file
            if (!move_uploaded_file($fileTmpPath, $dest_path)) {
                $errors['anh_dai_dien'] = 'Không thể di chuyển file đến thư mục upload. Vui lòng kiểm tra quyền ghi.';
                return null;
            }
    
            return $dest_path; // Trả về đường dẫn file nếu thành công
        }
    
        // Lỗi khác (file không được upload)
        $errors['anh_dai_dien'] = 'File tải lên không hợp lệ hoặc không tồn tại.';
        return null;
    }
    
}
?>
