<?php 
include_once("./include/connectDB.php");


if(isset($_POST['dangky'])){

    //lay anh tu <input> va chuyen anh ve folder upload
    $userFile=$_FILES["avatar-real-value"];
    $uploadDir="./upload/". basename($userFile['name']);
    if(move_uploaded_file($userFile["tmp_name"], $uploadDir)){
        echo "upload succeed";
    }
    else{
        echo "fail";
    }

    //insert cac gia tri attribute cua taikhoan vao table taikhoan
    $userAvatar=$uploadDir;
    $userName=$_POST["UserName"];
    $userEmail=$_POST["Email"];
    $userAddress=$_POST["Adress"];
    $userPWd=$_POST["pwd"];
    $userPhone=$_POST["Phone"];

    $conn=connectDB();
    $insertStatus=$conn->query(sprintf("INSERT INTO taikhoan (user_account, HinhDaiDien, DiaChi, Email, pwd, SoDTH) 
    values
    ('%s','%s','%s','%s','%s','%s')",$userName, $userAvatar, $userAddress, $userEmail, $userPWd, $userPhone));
    


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

    <style>
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
                <form  action="signup.php" name="signupForm" method="POST" enctype="multipart/form-data">
                
                
                    <div class="user-info-box-element" id="genernal-info">
                        <div id="avatar">
                            <div id="avatarFrom">
                                <label for="avatar-real-value">Chọn avatar</label>
                                <input id="avatar-real-value" name="avatar-real-value" type="file">
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
                                <input id="UserName" name="UserName" type="text" value="">
                            </div>
                            <div id="Email-title">
                                Email
                            </div>
                            <div id="Email" class="real-value">
                                <input id="Email" name="Email" type="text" value="">
                            </div>
                            <div id="Adress-title">
                                Địa chỉ
                            </div>
                            <div id="Adress" class="real-value">
                                <input id="Adress" name="Adress" type="text" value="">
                            </div>
                            <div id="Pwd-title">
                                Mật khẩu
                            </div>
                            <div id="Pwd" class="real-value">
                                <input id="Adress" name="pwd" type="password" value="">
                            </div>
                            <div id="Phone-title">
                                Số điện thoại
                            </div>
                            <div id="Phone" class="real-value">
                                <input id="Phone" name="Phone" type="text" value="">
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


        
