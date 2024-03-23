<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css\layout_style.css">
    <style>
        #main_content1{
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url("assets/login_bg.jpg");
            width: 100%;
        }
        .box-login{
            width: 60%;
            text-align: center;

            background-color: #FFC0CB;
            border-style: solid;
            border-width: 5px;
            
            box-sizing: border-box;

            
        }
        .box-login .login-title{
            font-size: 20px;
            font-weight:bolder;
            margin-bottom: 30px;

            
        }
        .box-login div{
            margin-bottom: 20px;
            width: 100%;
        }
        .box-login form{
            box-sizing: border-box;
        }
        .box-login form .username input{
            width: 95%;
            height: 30px;
        }
        .box-login form .password input{
            width: 95%;
            height: 30px;
        }
        .box-login form .submit input{

            width: 100%;
            height: 30px;
            background-color: rgba(243,130,108,255);
            cursor:pointer;
            border-style: none;
        }

    </style>

</head>
<body>
    <?php include_once("headerRegion.php") ?>
    
    <div id="main_body">
        <?php include_once("leftPannelRegion.php") ?>


        <div id="main_content1">
            <div class="box-login">
                <div class="login-title">
                    Đăng nhập
                </div>
    
                <form action="include/login.inc.php" method="post">
                    <div class="username">
<<<<<<< HEAD
                            <input type="text" id="username" name="username" placeholder="Email">
                    </div>
                   
                    <div class="password" >
                            <input type="password" id="password" name="password" placeholder="Mật khẩu">
=======
                            <input type="text" id="username" name="username" placeholder="Email/Số điện thoại/Tên đăng nhập">
                    </div>
                    <div class="username">               
                        <input type="password" id="password" name="password" placeholder="mật khẩu">
>>>>>>> khang
                    </div>
                    <div class="submit">
                            <input type="submit" id="submit" name="submit" value="Đăng nhập" >
                    </div>
                </form>
                <?php
                if(isset($_GET["error"])){
                    if($_GET["error"]=="emptyInput"){
                            echo "<p style='color:red'> fill all the field !</P>";
                    }
                    else if($_GET["error"]=="wrong_user_or_password"){
                        echo "<p 'color:red'>incorrent login information !</P>";
                    }
                }
            ?>
            </div>
            
        </div>
        
        <?php include_once("rightPannelRegion.php") ?>
        
    </div>
    
    <?php include_once("footerRegion.php") ?>
    
    <script src="js\layout_skeletion_js.js"></script>

</body>
</html>