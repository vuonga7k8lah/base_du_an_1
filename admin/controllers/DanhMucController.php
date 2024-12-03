<?php
class DanhMucController{
    // kết nối đến model
    public $modelDanhmuc;
    public function __construct(){
        $this->modelDanhmuc=new DanhMucModel();
    }
    public function index(){
        // lấy ra dữ liệu danh mục
        $danhMucs=$this->modelDanhmuc->getAll();
        // đưa dữ liệu ra view
        require_once "views/danhmuc/list_danh_muc.php";
    }
    public function create(){
        if(!isset($_SESSION['form_submitted'])) {
            unset($_SESSION['errors']);
        } else {
            unset($_SESSION['form_submitted']);
        }
        
        require_once "views/danhmuc/create_danh_muc.php";
    }
    public function store(){
        if($_SERVER['REQUEST_METHOD'] == "POST"  ){
            // lấy ra dữ liệu
            
            $ten_danh_muc = $_POST['ten_danh_muc'];
            $trang_thai = $_POST['trang_thai'];
        //   validate
        $errors = [];
        if (empty($ten_danh_muc)) {
            $errors['ten_danh_muc']="tên danh mục là bắt buộc";
        }
        if(empty($trang_thai)){
            $errors['trang_thai']="trạng thái là bắt buộc";
           }
        // thêm dữ liệu
        if(empty($errors)){
            // không có lỗi thì thêm dữ liệu
         $this->modelDanhmuc->postData($ten_danh_muc,$trang_thai);
         unset($_SESSION['errors']);
         header("location:?act=danh-mucs");
         exit();
        }
        else{
            $_SESSION['errors'] = $errors;
            $_SESSION['form_submitted'] = true;
            header("location:?act=form-add-danh-muc");
            exit();
        }
        
    }

    }
    public function edit(){
        // lấy id
        $id = $_GET['danh_muc_id'];
        // lấy thông tin chi tiết của danh mục
        $danhmuc = $this->modelDanhmuc->getDetailData($id);
        require_once "views/danhmuc/edit_danh_muc.php";

    }
    public function update(){
        if($_SERVER['REQUEST_METHOD'] == "POST"  ){
            // lấy ra dữ liệu
            $id=$_POST['id_danh_muc'];
            $ten_danh_muc = $_POST['ten_danh_muc'];
            $trang_thai = $_POST['trang_thai'];
        //   validate
        $errors = [];
        if (empty($ten_danh_muc)) {
            $errors['ten_danh_muc']="tên danh mục là bắt buộc";
        }
        if(empty($trang_thai)){
            $errors['trang_thai']="trạng thái là bắt buộc";
           }
        // thêm dữ liệu
        if(empty($errors)){
            // không có lỗi thì thêm dữ liệu
         $this->modelDanhmuc->updateData($id,$ten_danh_muc,$trang_thai);
        
         unset($_SESSION['errors']);
         echo "<script>alert('bạn đã cập nhật thành công')
                       window.location.href='?act=danh-mucs'
                </script>             
         ";
        
         
         exit();
        }
        else{
            $_SESSION['errors'] = $errors;
            
            header("location:?act=form-sua-danh-muc");
            exit();
        }
    }
}
    public function destroy(){
        if($_SERVER['REQUEST_METHOD'] == "POST"  ){
            $id=$_POST['danh_muc_id'];
            // xóa danh mục
            $this->modelDanhmuc->deleteData($id);
            header("location:?act=danh-mucs");
            exit();
        }
        
    }
    
    

}


?>