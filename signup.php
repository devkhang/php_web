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
                <form  action="signup.php" name="signupForm">
                
                
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
                                <input id="Adress" name="Adress" type="password" value="">
                            </div>
                            <div id="Phone-title">
                                Số điện thoại
                            </div>
                            <div id="Phone" class="real-value">
                                <input id="Phone" name="Phone" type="text" value="">
                            </div>
                        </div>
                    </div>
                    <div id="add-all-button">
                        <button type="submit" onclick="AddUser(this)">Thêm</a>
                    </div>
                </form>
            </div>
            
        </div>
        
        <?php include_once("rightPannelRegion.php"); ?>
    </div>    

    <?php include_once("footerRegion.php"); ?>


</body>
</html>


        
