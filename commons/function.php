<?php

// Kết nối CSDL qua PDO
function connectDB() {
    // Kết nối CSDL
    $host = "localhost";
    $port = "root";
    $dbname = DB_NAME;

    try {
        $conn = new PDO("mysql:host=$host;port=$port;dbname=$dbname", DB_USERNAME, DB_PASSWORD);

        // cài đặt chế độ báo lỗi là xử lý ngoại lệ
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // cài đặt chế độ trả dữ liệu
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
        return $conn;
    } catch (PDOException $e) {
        echo ("Connection failed: " . $e->getMessage());
    }
}
// thêm file
function uploadFile($file,$folderUpload){
    $patStorage = $folderUpload . time().$file['name'];
    $from = $file['tmp_name'];
    $to = PATH_ROOT . $patStorage;

    if (!is_dir(PATH_ROOT . $folderUpload)) {
        mkdir(PATH_ROOT . $folderUpload, 0777, true);
    }

    if(move_uploaded_file($from,$to)){
        return $patStorage;
    } else {
        // Thêm thông báo lỗi nếu không thể di chuyển file
        echo "Lỗi khi upload file.";
    }
    return null;
}
function deleteFile($file){
    $patDelete = PATH_ROOT.$file;
    if(file_exists($patDelete)){
        unlink($patDelete);
    }
}

