<?php 
include_once("./include/connectDB.php");
include_once("./include/common.php");
$conn=connectDB();
$result=$conn->query(sprintf('SELECT * FROM taikhoan WHERE MaTK=%d;',$_SESSION["MaTK"]));
$taikhoan=$result->fetch_assoc();



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
        include_once('./include/commonStyles.php');
        include_once('./include/commonScript.php')
    ?>

    <style>
        #genernal-info {
            width: auto;
            height: 30%;
        }
        #avatar-real-value{
            object-fit: scale-down;
        }
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
        #avatar-real-value{
            max-width:100%; height:auto
        }    
        </style>

</head>
<body>
    <?php include_once("headerRegion.php"); ?>
    <div id="main_body">
        <?php include_once("leftPannelRegion.php"); ?>

        <div id="main_content">
            <div id="user-info_box">
                
                <div class="user-detail-info">

                    <div class="user-info-box-element" id="genernal-info">
                        <div id="avatar">
                            <div id="avatarFrom">
                                <img id="avatar-real-value" <?php echo sprintf("src='%s'",$taikhoan["HinhDaiDien"]); ?>>

                                
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
                                <p id="UserName"><?php echo $taikhoan["user_account"] ?></p>
                            </div>
                            <div id="Email-title">
                                Email
                            </div>
                            <div id="Email" class="real-value">
                                <p id="Email"><?php echo $taikhoan["Email"] ?></p>
                            </div>
                            <div id="Adress-title">
                                Địa chỉ
                            </div>
                            <div id="Adress" class="real-value">
                                <p id="Adress"><?php echo $taikhoan["DiaChi"]; ?></p>
                            </div>
                            <div id="Pwd-title">
                                Mật khẩu
                            </div>
                            <div id="Pwd" class="real-value">
                                <p id="Pwd"><?php echo $taikhoan["pwd"]; ?></p>
                            </div>
                            <div id="Phone-title">
                                Số điện thoại
                            </div>
                            <div id="Phone" class="real-value">
                                <p id="Phone"><?php echo $taikhoan["SoDTH"]; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        
        <?php include_once("rightPannelRegion.php"); ?>
    </div>    

    <?php include_once("footerRegion.php"); ?>


</body>
</html>


        
