<?php
// Kết nối với cơ sở dữ liệu
include_once("include/db.inc.php");

// Kiểm tra xem dữ liệu từ form đã được gửi đi chưa
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ form
    $maHD = $_POST['maHD'];
    $trangThaiXuLy = $_POST['trangThaiXuLy'];

    // Tạo và thực thi truy vấn SQL để cập nhật trạng thái xử lý
    $sql = "UPDATE hoadon SET TrangThaiXuLy=? WHERE MaHD=?";
    $stmt = $conn->prepare($sql);
    
    if ($stmt) {
        $stmt->bind_param("si", $trangThaiXuLy, $maHD);
        $stmt->execute();
        
        // Kiểm tra xem truy vấn có thành công không
        if ($stmt->affected_rows > 0) {
            echo "Cập nhật thành công.";
            header("location: orderManage.php");
        } else {
            echo "Không có gì được cập nhật hoặc xảy ra lỗi.";
        }
        $stmt->close();
    } else {
        echo "Lỗi: " . $conn->error;
    }
    
    // Đóng kết nối
    $conn->close();
} else {
    // Nếu không phải POST request, trả về thông báo lỗi
    echo "Chỉ hỗ trợ POST request.";
}
?>
