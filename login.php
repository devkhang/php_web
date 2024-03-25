<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\layout_style.css">

<style>
    #main_content1 { 
    margin:40px;
    padding-left :100px; 
    align-items: center; 
    width: 70%;
}
.box-login {
    width: 60%;
    text-align: center; 
    border-style: solid;
    border-width: 5px;
    box-sizing: border-box;
    padding:5px;
}

.login-title{ 
margin:9px 0 25px;
    font-size: 30px;
    text-align: center;
}

#username{
    
    display: block;
    box-sizing: border-box;
    width: 100%;
    height: 45px;
    padding: 15px 30px 15px 20px;
    color: #000;
    font-size: 14px;
    line-height: 15px;
    border: 1px solid #e4e4e4;
    border-radius: 0;
    outline: none;
    transition: border-color .35s ease, padding .35s ease;
    resize: none;
}
#password{
    
    display: block;
    box-sizing: border-box;
    width: 100%;
    height: 45px;
    padding: 15px 30px 15px 20px;
    color: #000;
    font-size: 14px;
    line-height: 15px;
    border: 1px solid #e4e4e4;
    border-radius: 0;
    outline: none;
    transition: border-color .35s ease, padding .35s ease;
    resize: none;
}
#submit{
    background:#e4e4e4;
        color:black;
        border: none;
        font-size: 15px;
        font-weight: bold;
        text-align: center;
        text-transform: uppercase;
        padding: 19px 30px;
        position: relative;
        width: 100%; 
        margin-top: 10px;
        margin-bottom: 25px;
}
#submit:active {
    background: #b3b3b3; /* Màu nền mới */
    color: white; /* Màu chữ mới */
}   
</style>

</head>
<body>
    <?php include_once("headerRegion.php"); ?>
    <div id="main_body"> 
        <?php include_once("leftPannelRegion.php"); ?>
        <div id="main_content1">
             
            <div class="box-login">
                <div class="login-title">
                    Đăng nhập
                </div>
                <div class="username">
                    <form action="" method="get">
                        <input type="text" id="username" name="username" placeholder="Email/Số điện thoại/Tên đăng nhập">
                    </form>
                </div>
                <div class="password" >
                    <form action="" method="get">
                        <input type="password" id="password" name="password" placeholder="Mật khẩu">
                    </form>
                </div>

                <div class="submit">
                    <form action="" method="get" onsubmit="setisLoginTrue(this)" target="_blank">
                        <input type="submit" id="submit" name="submit" value="Đăng nhập" >
                    </form>
                </div>

            </div>

            
        </div>
        </div>
    
        <?php include_once("rightPannelRegion.php"); ?>


    </div>
    
    <?php include_once("footerRegion.php"); ?>
    
</body>
</html>