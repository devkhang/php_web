<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css\layout_style.css">
    <style>
        #main_content{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .box-login{
            width: 50%;
            height: 250px;
            text-align: center;

            background-color: rgba(255,255,255,255);
            border-style: solid;
            border-width: 1px;

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
        .box-login .username form input{
            width: 95%;
            height: 30px;
        }
        .box-login .password form input{
            width: 95%;
            height: 30px;
        }
        .box-login .submit form input{
       
            width: 100%;
            height: 30px;
            background-color: rgba(243,130,108,255);
            cursor:pointer;
        }
    </style>

</head>
<body>
    <?php include_once("headerRegion.php") ?>
    
    <div id="main_body">
        <?php include_once("leftPannelRegion.php") ?>

        <div id="main_content">
            <div class="box-login">
                <div class="login-title">
                    Đăng nhập
                </div>
                <div class="username">
                    <form action="" method="get">
                        <input type="text" id="username" name="username" placeholder="Email/Số điện thoại/Tên đăng nhập">
                    </form>
                </div>
                <div class="password">
                    <form action="" method="get">
                        <input type="password" id="password" name="password" placeholder="Mật khẩu">
                    </form>
                </div>

                <div class="submit">
                    <form action="" method="get" onsubmit="setisLoginTrue(this)" target="_blank">
                        <input type="submit" id="submit" name="submit" value="Đăng nhập">
                    </form>
                </div>

            </div>

            
        </div>

        <?php include_once("rightPannelRegion.php") ?>
        
    </div>

    <?php include_once("footerRegion.php") ?>
    
    <script src="js\layout_skeletion_js.js"></script>

</body>
</html>