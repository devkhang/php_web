<?php 
include_once("../include/connectDB.php");
session_start();


if(isset($_POST['dangky'])){

    //lay anh tu <input> va chuyen anh ve folder upload
    $userFile=$_FILES["avatar-real-value"];
    $uploadDir= basename($userFile['name']);
    if(!move_uploaded_file($userFile["tmp_name"], "../upload/". $uploadDir)){
        $err_moveFile=true;
    }
    $uploadDir="./upload/".$uploadDir;

    //insert cac gia tri attribute cua taikhoan vao table taikhoan
    $userAvatar=$uploadDir;
    $userName=$_POST["UserName"];
    $userEmail=$_POST["Email"];
    $userAddress=$_POST["Adress"];
    $userPWd=$_POST["pwd"];
    $userPhone=$_POST["Phone"];

    if($userAvatar&& $userName && $userEmail && $userAddress && $userAddress
    && $userPWd && $userPhone){
        $conn=connectDB();
        $insertStatus=$conn->query(sprintf("INSERT INTO taikhoan (TinhTrang, user_account, HinhDaiDien, DiaChi, Email, pwd, SoDTH) 
        values
        ('m','%s','%s','%s','%s','%s','%s')",$userName, $userAvatar, $userAddress, $userEmail, $userPWd, $userPhone));
        $err_singup=true;
    }
    else{
        $err_emptyValue=true;
    }
    

    
    


}



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css\layout_style.css">
    <link rel="stylesheet" href="css\modify_layout.css">
    <?php 
        include_once('../include/commonStyles.php');
        include_once('../include/commonScript.php')
    ?>

    <style>
        #detail-info{
            margin-top: 10px;
        }
        #avatarFrom{
            box-sizing: border-box;
            height: 100%;
            width: 100%;
        }
        #avatarFrom #avatar-real-value{
            box-sizing: border-box;
            height: 90%;
            width: 100%;
            background-color:chartreuse;
        }
        #avatarFrom #avatar-real-value:hover{
            box-sizing: border-box;
            height: 90%;
            width: 100%;
            background-color:aqua;
            cursor: pointer;
        }
        
        #right_panel #add-all-button{
            background-color: green;
        }
        #right_panel #add-all-button:hover{
            background-color: red;
        }
    </style>

</head>
<body>
    <?php include_once("headerRegion.php"); ?>
    <div id="main_body">
        <?php include_once("leftPannelRegion.php"); ?>

        <div id="main_content">
            <div id="user-info_box">
                <form  action="UserManage.php" name="signupForm" method="POST" enctype="multipart/form-data">
                    <?php
                        if(isset($err_moveFile)){?>
                            <div class="alert alert-danger alert-dismissible">
                                
                                <strong>Thất bại!</strong> Đăng ký thất bại do không upload được file.
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            </div>
                    <?php
                        }
                        else if(isset($err_emptyValue)){?>
                            <div class="alert alert-danger alert-dismissible">
                                
                                <strong>Thất bại!</strong>Do thiếu thông tin nhập.
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            </div>
                    <?php
                        } else if(isset($err_singup)){?>
                            <div class="alert alert-success alert-dismissible">
                                
                                <strong>Thành công!</strong>Bạn đã đăng ký thành công.
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            </div>
                    <?php
                        }
                    ?>
                    


                    <div class="user-info-box-element" id="genernal-info">
                        <div id="avatar">
                            <div id="avatarFrom">
                                <label for="avatar-real-value">Chọn avatar</label>
                                <input id="avatar-real-value" name="avatar-real-value" type="file" required>
                            </div>
                        </div>
                
                    </div>
                    <div class="user-info-box-element" id="detail-info">
                        <div id="detail-info-form">
                            <div id="Account">
                                Account
                            </div>
                            <div id="UserName-title">
                                User name
                            </div>
                            <div id="UserName" class="real-value">
                                <input id="UserName" name="UserName" type="text" value="" required>
                            </div>
                            <div id="Email-title">
                                Email
                            </div>
                            <div id="Email" class="real-value">
                                <input id="Email" name="Email" type="text" value="" required>
                            </div>
                            <div id="Adress-title">
                                Địa chỉ
                            </div>
                            <div id="Adress" class="real-value">
                                <input id="Adress" name="Adress" type="text" value="" required>
                            </div>
                            <div id="Pwd-title">
                                Mật khẩu
                            </div>
                            <div id="Pwd" class="real-value">
                                <input id="Pwd" name="pwd" type="password" value="" required>
                            </div>
                            <div id="Phone-title">
                                Số điện thoại
                            </div>
                            <div id="Phone" class="real-value">
                                <input id="Phone" name="Phone" type="text" value="" required>
                            </div>
                        </div>
                    </div>
                    <input id="add-all-button" type="submit" name="dangky" value="Đăng ký">
                    <!-- <div id="add-all-button">
                        <button type="submit" onclick="AddUser(this)">Đăng ký</a>
                    </div> -->
                </form>
            </div>
            
        </div>
        
        <?php include_once("rightPannelRegion.php"); ?>
    </div>    

    <?php include_once("footerRegion.php"); ?>


</body>
</html>


        
