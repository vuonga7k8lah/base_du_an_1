<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">

<head>
    <meta charset="utf-8" />
    <title>Quản lý khách hàng</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Quản lý khách hàng" name="description" />
    <meta content="Your Company" name="author" />

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
                                <h4 class="mb-sm-0">Quản lý khách hàng</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Admin</a></li>
                                        <li class="breadcrumb-item active">Danh sách khách hàng</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Table Start -->
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Danh sách khách hàng</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-nowrap align-middle mb-0">
                                            <thead>
                                                <tr>
                                                    <th scope="col">STT</th>
                                                    <th scope="col">Tên đăng nhập</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Ngày tạo</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if (!empty($khachhangs)): ?>
                                                    <?php foreach ($khachhangs as $index => $khachhang): ?>
                                                        <tr>
                                                            <td class="fw-medium"><?= $index + 1 ?></td>
                                                            <td><?= htmlspecialchars($khachhang['ten_dang_nhap']) ?></td>
                                                            <td><?= htmlspecialchars($khachhang['email']) ?></td>
                                                            <td><?= htmlspecialchars($khachhang['ngay_tao']) ?></td>
                                                            
                                                        </tr>
                                                    <?php endforeach; ?>
                                                <?php else: ?>
                                                    <tr>
                                                        <td colspan="5" class="text-center">Không có khách hàng nào.</td>
                                                    </tr>
                                                <?php endif; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Table End -->
                </div>
            </div>

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>document.write(new Date().getFullYear())</script> © Your Company.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">Design & Develop by Your Company</div>
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
