<?php 
    include_once("include/connectDB.php");
    session_start();


    if(isset($_GET["submit"]) && isset($_GET["address_option"])){
        $address_option=$_GET["address_option"];
        $shippingAdress="";
        $maTK=$_SESSION["MaTK"];
        $conn=connectDB();
        $cart=$_COOKIE["cart"];
        
        date_default_timezone_set("Asia/Ho_Chi_Minh"); 
        $date = date('Y-m-d h:i:s', time());



        if($address_option=="fromTaiKhoan"){
            $query="SELECT * FROM `taikhoan` WHERE MaTK=$maTK;";
            $taikoan=$conn->query($query);
            $taikoan=$taikoan->fetch_assoc();
            $shippingAdress=$taikoan["DiaChi"];
            
            // echo "dia chi: ";
            // var_dump($shippingAdress); echo "<br>";

        }
        else if($address_option=="fromUserInput"){
            $shippingAdress=$_GET["new_address"];
        }

        //add hoadon and relation ship between hoadon and taikhoan
        $insertHoaDon="
        INSERT INTO hoadon (ThoiGianDat, TrangThaiXuLy, MaTK)
        VALUES
        ('$date', 0, $maTK);";

        echo "qeury: ";
        var_dump($insertHoaDon); echo "<br>";

        $tmpRes=$conn->query($insertHoaDon);

        // if($tmpRes==false){
        //     echo "fail <br>";
        // }
        // else{
        //     echo "success <br>";
        // }

        //add chitietdonhang
        
        $insertChitietHD="";
        foreach($cart as $sanpham){
            
        }



        setcookie("cart","",time() - 3600);


    }
    else{
        header("Location: index.php");
    }





?>