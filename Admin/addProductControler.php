<?php
session_start();
include_once("../include/connectDB.php");

$querySucceed=false;

if(isset($_POST['them'])){
    $queryActivate=true;

    //lay anh tu <input> va chuyen anh ve folder upload
    $detailPicture=$_FILES["product-detailPicture"];
    
    $uploadDir_detailPicture=basename($detailPicture['name']);
    if(!move_uploaded_file($detailPicture["tmp_name"], "../upload/" .$uploadDir_detailPicture)){
        $err_moveFile=true;
    }

    var_dump($uploadDir_detailPicture);

    $illustration=$_FILES["product-illustration"];
    $uploadDir_illustration=basename($illustration['name']);
    if(!move_uploaded_file($illustration["tmp_name"],"../upload/" . $uploadDir_illustration)){
        $err_moveFile=true;
    }

    echo "<br>";

    var_dump($uploadDir_illustration);
    //insert cac gia tri attribute cua taikhoan vao table taikhoan
   

    $product_brand=$_POST["product-brand"];
    $product_name=$_POST["product-name"];
    // $product_color=$_POST["product-color"];
    $product_promotion=(int)$_POST["product-promotion"];
    $product_remaining=(int)$_POST["product-remaining"];
    $product_price=(int)$_POST["product-price"];
    $MieuTa=$_POST["MieuTa"];

    $uploadDir_detailPicture="./upload/".$uploadDir_detailPicture;
    $uploadDir_illustration="./upload/".$uploadDir_illustration;

    // ./Admin/


    $conn=connectDB();
    $insertStatus=$conn->query(sprintf("INSERT INTO sanpham (HangDTH, Ten, KhuyeMai, SoLuongTonKho, Gia, MieuTa, HinhAnhMH, HinhAnhChiTiet, An)
    VALUES
    ('%s','%s',%d, %d, %d, '%s','%s','%s', 'ka');", $product_brand, $product_name, $product_promotion, $product_remaining, 
    $product_price, $MieuTa, $uploadDir_illustration, $uploadDir_detailPicture));

    // echo "succeed? <br>";
    // var_dump($conn->affected_rows);

    if($conn->affected_rows!=0){
        $querySucceed=true;
        
    }

    // unset($_POST);

    // var_dump($_POST);

    header("Location: addProduct.php?querySucceed=$querySucceed");
    

    

}




?>