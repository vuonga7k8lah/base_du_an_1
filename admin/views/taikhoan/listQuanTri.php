<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">

<head>
    <meta charset="utf-8" />
    <title>Quản lý tài khoản quản trị</title>
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
                                <h4 class="mb-sm-0">Quản lý tài khoản quản trị</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Admin</a></li>
                                        <li class="breadcrumb-item active">Danh sách tài khoản quản trị</li>
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
                                    <h4 class="card-title mb-0 flex-grow-1">Danh sách tài khoản quản trị</h4>
                                    <a href="?act=form-them-quan-tri" class="btn btn-primary"><i class="ri-add-circle-line align-middle me-1"></i>Thêm Tài Khoản</a>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-nowrap align-middle mb-0">
                                            <thead>
                                                <tr>
                                                    <th scope="col">STT</th>
                                                    <th scope="col">Họ Tên</th>
                                                    <th scope="col">Ảnh đại diện</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Số Điện Thoại</th>
                                                    <th scope="col">Trạng Thái</th>
                                                    <th scope="col">Hành Động</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach($listQuanTri as $index => $quantri) :?>
                                                <tr>
                                                    <td class="fw-medium"><?= $index+1 ?></td>
                                                    <td><?= htmlspecialchars($quantri['ho_ten']) ?></td>
                                                    <td>
                                                      <img src="<?= htmlspecialchars($quantri['anh_dai_dien']) ?>" alt="Ảnh đại diện" class="rounded-circle" style="width: 50px; height: 50px; object-fit: cover;">
                                                        </td>
                                                    <td><?= htmlspecialchars($quantri['email']) ?></td>
                                                    <td><?= htmlspecialchars($quantri['so_dien_thoai']) ?></td>
                                                    <td>
                                                        <?php if($quantri['trang_thai'] == 1): ?>
                                                        <span class="badge bg-success">Hiển Thị</span>
                                                        <?php else: ?>
                                                        <span class="badge bg-danger">Không Hiển Thị</span>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex gap-2">
                                                        <a href="?act=form-sua-quan-tri&id_quan_tri=<?=$quantri["id"]?>" class="btn btn-primary ">Sửa</a>
                                                            <form method="post" onsubmit="return confirm('Bạn có muốn xóa không?')" action="?act=xoa-quan-tri">
                                                                <input type="hidden" name="id_quan_tri" value="<?=$quantri["id"]?>">
                                                                <button type="submit" class="btn btn-danger ">Xóa</button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <?php endforeach; ?>
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