<?php
session_start();
include_once("../include/connectDB.php");

$maSP=$_GET["MaSP"];
$originalParameters=$_GET["originalParameters"];
$luachon=$_GET["luachon"];


$conn=connectDB();
// $sanPham=$conn->query("select * from sanpham where MaSP=$maSP")->fetch_array(MYSQLI_ASSOC);
$daBan=$conn->query("SELECT * FROM `sanpham` inner join chitietdonhang on sanpham.MaSP=chitietdonhang.MaSP where sanpham.MaSP=$maSP");
$daBan=$daBan->num_rows;

// echo "daBan:";
// var_dump($daBan); echo "<br>";

if($daBan!=0 && $luachon=="xoa"){
    $conn->query("UPDATE sanpham SET An='a' where MaSP=$maSP;");
    header("Location: search_product_result.php?".$originalParameters."&submit=1");
}
else if($luachon=="hetAn"){
    $conn->query("UPDATE sanpham SET An='ka' where MaSP=$maSP;");
    header("Location: search_product_result.php?".$originalParameters."&submit=1");
}
else if($daBan==0 && $luachon=="xoa" ){
    header("Location: search_product_result.php?".$originalParameters."&MaSP=$maSP&"."&daBan=0&"."&submit=1");
}
else if($luachon="chonXoa"){
    $conn->query("DELETE from sanpham WHERE MaSP=$maSP;");
    header("Location: search_product_result.php?".$originalParameters."&submit=1");
}


?>