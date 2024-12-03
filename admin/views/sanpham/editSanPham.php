<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">


<!-- Mirrored from themesbrand.com/velzon/html/master/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Oct 2024 07:29:52 GMT -->

<head>

    <meta charset="utf-8" />
    <title>Sửa sản phẩm | Thực phẩm chức năng</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />

    <!-- CSS -->
    <?php
    require_once "views/layouts/libs_css.php";
    ?>

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <!-- HEADER -->
        <?php
        require_once "views/layouts/header.php";

        require_once "views/layouts/siderbar.php";
        ?>

        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div
                                class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                                <h4 class="mb-sm-0">Sửa sản phẩm</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                        <li class="breadcrumb-item active">Danh sách sản phẩm</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <div class="row">
                        <div class="col">

                            <div class="h-100">
                                <div class="card">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Sửa sản phẩm</h4>

                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <div class="live-preview">
                                            <form action="?act=sua-san-pham" method="post"  enctype="multipart/form-data" >
                                                <input type="hidden" name="san_pham_id" value="<?= $sanPham['id_san_pham'] ?>">
                                                <input type="hidden" name="current_hinh_anh" value="<?= $sanPham['hinh_anh'] ?>">
                                                <div class="row g-3">
                                                    <div class="col-md-6">
                                                        <label for="ten_san_pham" class="form-label">Tên sản
                                                            phẩm</label>
                                                        <input type="text" class="form-control" name="ten_san_pham" value="<?= $sanPham['ten_san_pham'] ?>">
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label for="gia_san_pham" class="form-label">Giá sản
                                                            phẩm</label>
                                                        <input type="text" class="form-control" name="gia_san_pham" value="<?= $sanPham['gia_san_pham'] ?>">
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label for="gia_khuyen_mai" class="form-label">Giá khuyến
                                                            mãi</label>
                                                        <input type="text" class="form-control" name="gia_khuyen_mai" value="<?= $sanPham['gia_khuyen_mai'] ?>">
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label for="so_luong" class="form-label">Số lượng</label>
                                                        <input type="number" class="form-control" name="so_luong" value="<?= $sanPham['so_luong'] ?>">
                                                    </div>


                                                    <div class="col-md-6">
                                                        <label for="id_danh_muc" class="form-label">Danh mục</label>
                                                        <select class="form-control" name="id_danh_muc">
                                                            <?php foreach ($listDanhMuc as $danhMuc): ?>
                                                                <option value="<?= $danhMuc['id_danh_muc'] ?>" <?= $danhMuc['id_danh_muc'] == $sanPham['id_danh_muc'] ? 'selected' : '' ?>><?= $danhMuc['ten_danh_muc'] ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label for="mo_ta" class="form-label">Mô tả</label>
                                                        <textarea name="mo_ta" class="form-control"><?= $sanPham['mo_ta'] ?></textarea>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label for="trang_thai" class="form-label">Trạng thái</label>
                                                        <select class="form-control" name="trang_thai">
                                                            <option value="1" <?= $sanPham['trang_thai'] == 1 ? 'selected' : '' ?>>Hiển thị</option>
                                                            <option value="2" <?= $sanPham['trang_thai'] == 2 ? 'selected' : '' ?>>Không hiển thị</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label for="hinh_anh" class="form-label">Hình ảnh sản phẩm</label>
                                                        <input type="file" class="form-control" name="hinh_anh">
                                                        <img src="<?= BASE_URL . $sanPham['hinh_anh'] ?>" alt="Hình ảnh hiện tại" style="max-width: 100px; margin-top: 10px;">
                                                    </div>
                                                    

                                                    <div class="col-12 text-end">
                                                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </div>

                            </div> <!-- end .h-100-->

                        </div> <!-- end col -->
                    </div>

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © Velzon.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Develop by Themesbrand
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!--preloader-->
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>

    <div class="customizer-setting d-none d-md-block">
        <div class="btn-info rounded-pill shadow-lg btn btn-icon btn-lg p-2" data-bs-toggle="offcanvas"
            data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
            <i class='mdi mdi-spin mdi-cog-outline fs-22'></i>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <?php
    require_once "views/layouts/libs_js.php";
    ?>

</body>

</html>