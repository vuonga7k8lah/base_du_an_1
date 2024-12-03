<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">

<head>
    <meta charset="utf-8" />
    <title>Thêm Tài Khoản Quản Trị</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />

    <!-- CSS -->
    <?php require_once "views/layouts/libs_css.php"; ?>
</head>

<body>
    <!-- Begin page -->
    <div id="layout-wrapper">
        <!-- HEADER -->
        <?php require_once "views/layouts/header.php"; ?>
        <?php require_once "views/layouts/siderbar.php"; ?>

        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <!-- Page Title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Thêm Tài Khoản Quản Trị</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Admin</a></li>
                                        <li class="breadcrumb-item active">Thêm Tài Khoản Quản Trị</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Form Start -->
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Thông tin tài khoản</h4>
                                </div>
                                <div class="card-body">
                                    <form action="?act=them-quan-tri" method="POST" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <label for="ho_ten" class="form-label">Họ Tên</label>
                                            <input type="text" class="form-control" id="ho_ten" name="ho_ten" required>
                                            <?php if (isset($_SESSION['errors']['ho_ten'])): ?>
                                                <div class="text-danger"><?= $_SESSION['errors']['ho_ten'] ?></div>
                                            <?php endif; ?>
                                        </div>

                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="email" name="email" required>
                                            <?php if (isset($_SESSION['errors']['email'])): ?>
                                                <div class="text-danger"><?= $_SESSION['errors']['email'] ?></div>
                                            <?php endif; ?>
                                        </div>

                                        <div class="mb-3">
                                            <label for="ngay_sinh" class="form-label">Ngày Sinh</label>
                                            <input type="date" class="form-control" id="ngay_sinh" name="ngay_sinh" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="so_dien_thoai" class="form-label">Số Điện Thoại</label>
                                            <input type="text" class="form-control" id="so_dien_thoai" name="so_dien_thoai" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="gioi_tinh" class="form-label">Giới Tính</label>
                                            <select id="gioi_tinh" name="gioi_tinh" class="form-control" required>
                                                <option value="1">Nam</option>
                                                <option value="0">Nữ</option>
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label for="dia_chi" class="form-label">Địa Chỉ</label>
                                            <input type="text" class="form-control" id="dia_chi" name="dia_chi" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="anh_dai_dien" class="form-label">Ảnh Đại Diện</label>
                                            <input type="file" class="form-control" id="anh_dai_dien" name="anh_dai_dien" required>
                                            <?php if (isset($_SESSION['errors']['anh_dai_dien'])): ?>
                                                <div class="text-danger"><?= $_SESSION['errors']['anh_dai_dien'] ?></div>
                                            <?php endif; ?>
                                        </div>


                                        <div class="mb-3">
                                            <label for="mau_khau" class="form-label">Mật Khẩu</label>
                                            <input type="password" class="form-control" id="mau_khau" name="mau_khau" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="chuc_vu_id" class="form-label">Chức Vụ</label>
                                            <select id="chuc_vu_id" name="chuc_vu_id" class="form-control" required>
                                                <option value="1">Quản Trị Viên</option>
                                                <!-- <option value="2">Nhân Viên</option> -->
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label for="trang_thai" class="form-label">Trạng Thái</label>
                                            <select id="trang_thai" name="trang_thai" class="form-control" required>
                                                <option value="1">Hiển Thị</option>
                                                <option value="0">Không Hiển Thị</option>
                                            </select>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Thêm Tài Khoản</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Form End -->
                </div>
            </div>

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>document.write(new Date().getFullYear())</script> © Velzon.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">Design & Develop by Themesbrand</div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <?php require_once "views/layouts/libs_js.php"; ?>
</body>
</html>
