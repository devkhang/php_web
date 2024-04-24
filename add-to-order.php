<?php
session_start();
include_once('include\db.inc.php');
$total = $_GET["total"];
$cart = isset($_COOKIE["cart"]) ? $_COOKIE["cart"] : "[]";
$cart = json_decode($cart);

$option = $_GET["address_option"];
if ($option == 1) {
    // Sử dụng prepared statement để bảo mật truy vấn SQL
    $query = "SELECT * FROM taikhoan WHERE user_account = ?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $query)) {
        // Xử lý lỗi khi chuẩn bị truy vấn
        die("SQL error: " . mysqli_error($conn));
    }
    mysqli_stmt_bind_param($stmt, "s", $_SESSION['username']);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    // Lấy dòng dữ liệu từ kết quả truy vấn
    $row = mysqli_fetch_assoc($result);
    if ($row) {
        // In địa chỉ từ kết quả truy vấn
        $t=time();
        // Thêm hóa đơn mới vào cơ sở dữ liệu
        $query1 = "INSERT INTO hoadon (ThoiGianDat, TrangThaiXuLy, MaTK, Tongtien, diachi) VALUES ('".date("Y-m-d",$t)."', 0, ".$_SESSION["id"].", ".$total.", '".$row["DiaChi"]."')";
        mysqli_query($conn, $query1);

        // Lấy mã hóa đơn vừa được thêm vào
        $maHD = mysqli_insert_id($conn);
        foreach($cart as $c){
            $query2 = "select * from sanpham where MaSP = ".$c->MaSP;
            $result1 = mysqli_query($conn,$query2);
            $row = mysqli_fetch_assoc($result1);
            $quantity = $row['SoLuongTonKho'];
            $query3 = "update sanpham set SoLuongTonKho = ".($quantity - $c->quantity)." where MaSP = ".$c->MaSP;
            mysqli_query($conn,$query3);
            // Thêm vào bảng chi tiết đơn hàng
            $query4 = "INSERT INTO chitietdonhang (MaSP, MaHD, SoLuong) VALUES (".$c->MaSP.", ".$maHD.", ".$c->quantity.")";
            mysqli_query($conn, $query4);
        }
        $new_cart = array();
        setcookie("cart",json_encode($new_cart));
        header("Location: index.php");
    } else {
        // Xử lý trường hợp không có dữ liệu
        echo "Không tìm thấy địa chỉ cho tài khoản " . $_SESSION['username'];
    }
    // Đóng statement
    mysqli_stmt_close($stmt);
} else if($option == 2){
    $address = $_GET["address"];
    $t=time();
    $query = "Insert into hoadon (ThoiGianDat,TrangThaiXuLy,MaTK,Tongtien,diachi) VALUES ('".date("Y-m-d",$t)."',0,".$_SESSION["id"].",".$total.",'".$address."')";
    mysqli_query($conn,$query);
    // Lấy mã hóa đơn vừa được thêm vào
    $maHD = mysqli_insert_id($conn);
    foreach($cart as $c){
        $query2 = "select * from sanpham where MaSP = ".$c->MaSP;
        $result1 = mysqli_query($conn,$query2);
        $row = mysqli_fetch_assoc($result1);
        $quantity = $row['SoLuongTonkho'];
        $query3 = "update sanpham set SoLuongTonKho = ".($quantity - $c->quantity)." where MaSP = ".$c->MaSP;
        mysqli_query($conn,$query3);
        // Thêm vào bảng chi tiết đơn hàng
        $query4 = "INSERT INTO chitietdonhang (MaSP, MaHD, SoLuong) VALUES (".$c->MaSP.", ".$maHD.", ".$c->quantity.")";
        mysqli_query($conn, $query4);
    }
    $new_cart = array();
    setcookie("cart",json_encode($new_cart));
    header("Location: index.php");
}
?>
