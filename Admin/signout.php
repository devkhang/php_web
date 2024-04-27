<?php
    session_start();
    if (!isset($_SESSION['allowed_access']) || $_SESSION['allowed_access'] !== true) {
        // Nếu không có quyền truy cập, chuyển hướng người dùng về trang khác hoặc hiển thị thông báo lỗi
        header('Location: index.php'); // Chuyển hướng người dùng về trang chủ hoặc trang login
        exit();
    }
    session_unset();
    session_destroy();

    header("location: index.php");
    exit();
?>