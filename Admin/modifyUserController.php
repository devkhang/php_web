<?php 

session_start();
include_once("../include/connectDB.php");
include_once("../include/functions.php");

$conn=connectDB();

if($_POST["submit"]){
    $matk=$_GET['MaTK'];
    $unemptyPost=postFilter($_POST);
    $query="UPDATE taikhoan SET ";
    $lastKey=array_key_last($unemptyPost);
    if(isset($_FILES["avatar-real-value"])){
        // $query.="HinhDaiDien='$value'";
        $hinhDaiDien=$_FILES["avatar-real-value"];
        $uploadir="./upload/". basename($hinhDaiDien["name"]);
        if(!move_uploaded_file($hinhDaiDien["tmp_name"], $uploadir));
        
        $query.="HinhDaiDien='$uploadir',";
    }
    foreach($unemptyPost as $key=>$value){
        // $query.="$key=$value";
        // if($key=="user_account"|| $key=="HinhDaiDien"|| $key=="DiaChi"|| $key==""|| $key==""){
        //     $query.="$key='$value'";
        // }
        // $query.="$key='$value'";
        echo $key."<br>";
        
        if($key=="Email"){
            
            $query.="Email='$value'";
        }
        else if($key=="Adress"){
            $query.="DiaChi='$value'";
            
        }
        else if($key=="pwd"){
            $query.="pwd='$value'";
            
        }
        else if($key=="Phone"){
            $query.="SoDTH='$value'";
            
        }
        else if($key=="UserName"){
            $query.="user_account='$value'";
            
        }
        else if($key=="TinhTrang"){
            $query.="TinhTrang='$value'";
            
        }

        if($key!==$lastKey){
            $query.=",";
        }

    }
    $query.=" where MaTK=$matk;";

    var_dump($query);

    $result=$conn->query($query);
    $isSucceed=false;
    if($result!=null){
        $isSucceed=true;
    }

    header("Location: modifyUserLayout.php?isSucceed=".$isSucceed."&MaTK=".$matk);
    // var_dump("Location: modifyUserLayout.php?isSucceed=".$isSucceed."&MaTK=".$matk);

}


?>