<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5 shadow-sm">
                    <div class="card-body">
                        <h2 class="text-center">Đăng nhập</h2>
                        
                        <form method="POST" class="mt-4">
                            <div class="mb-3">
                                <label for="ten_dang_nhap" class="form-label">Tên đăng nhập:</label>
                                <input type="text" class="form-control" id="ten_dang_nhap" name="ten_dang_nhap" required placeholder="Nhập tên đăng nhập">
                            </div>
                            <div class="mb-3">
                                <label for="mat_khau" class="form-label">Mật khẩu:</label>
                                <input type="password" class="form-control" id="mat_khau" name="mat_khau" required placeholder="Nhập mật khẩu">
                            </div>
                            <div class="d-grid">
                                <button type="submit" name="login" class="btn btn-primary">Đăng nhập</button>
                            </div>
                        </form>
                        
                        <p class="text-center mt-3">Bạn chưa có tài khoản? 
                            <a href="?act=dang-ky" class="text-decoration-none">Đăng ký ngay</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Hiển thị SweetAlert nếu có thông báo -->
    <?php if (!empty($message)): ?>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: '<?= $message ?>'
            });
        </script>
    <?php endif; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
