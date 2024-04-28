<?php 
session_start();
include_once("../include/connectDB.php");
include_once("../include/functions.php");


if($_POST["submit"]){
    $conn=connectDB();
    $masp=$_GET['MaSP'];
    $unemptyPost=postFilter($_POST);
    $query="UPDATE sanpham SET ";
    $lastKey=array_key_last($unemptyPost);

    echo $lastKey."<br>";

    if($_FILES["product-detailPicture"]["size"]!=0){
        echo "run:"."<br>";
        var_dump($_FILES["product-detailPicture"]);
        echo "<br>";

        // $query.="HinhDaiDien='$value'";
        $product_detailPicture=$_FILES["product-detailPicture"];
        $uploadir=basename($product_detailPicture["name"]);
        if(!move_uploaded_file($product_detailPicture["tmp_name"], "../upload/".$uploadir));
        $uploadir="./upload/".$uploadir;
        
        $query.="HinhAnhChiTiet='$uploadir',";
    }

    if($_FILES["product-illustration"]["size"]!=0){
        echo "run:"."<br>";
        var_dump($_FILES["product-illustration"]);
        echo "<br>";

        // $query.="HinhDaiDien='$value'";
        $product_illustration=$_FILES["product-illustration"];
        $uploadir=basename($product_illustration["name"]);
        if(!move_uploaded_file($product_illustration["tmp_name"], "../upload/".$uploadir));
        $uploadir="./upload/".$uploadir;
        
        $query.="HinhAnhMH='$uploadir',";
    }

    foreach($unemptyPost as $key=>$value){
        // $query.="$key=$value";
        // if($key=="user_account"|| $key=="HinhDaiDien"|| $key=="DiaChi"|| $key==""|| $key==""){
        //     $query.="$key='$value'";
        // }
        // $query.="$key='$value'";
        echo $key."<br>";
        
        if($key=="product-brand"){
            
            $query.="HangDTH='$value'";
        }
        else if($key=="product-name"){
            $query.="Ten='$value'";
            
        }
        else if($key=="product-promotion"){
            $query.="KhuyeMai='$value'";
            
        }
        else if($key=="product-remaining"){
            $query.="SoLuongTonKho='$value'";
            
        }
        else if($key=="product-price"){
            $query.="Gia='$value'";
            
        }
        else if($key=="MieuTa"){
            $query.="MieuTa='$value'";
            
        }
        else if($key=="An"){
            $query.="An='$value'";
            
        }

        if($key!==$lastKey){
            $query.=",";
        }

    }
    $query.=" where MaSP=$masp;";

    var_dump($query);

    $result=$conn->query($query);
    $isSucceed=false;
    if($result!=null){
        $isSucceed=true;
    }

    header("Location: modifyProductLayout.php?isSucceed=".$isSucceed."&MaSP=".$masp);
    // var_dump("Location: modifyUserLayout.php?isSucceed=".$isSucceed."&MaTK=".$matk);

}





?>