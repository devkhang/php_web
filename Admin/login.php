
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\layout_style.css">

    <style>
        #main_content{
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url("assets/login.jpg");
            margin-top: 0px;
        }
        .box-login{
            width: 70%;
            height: 300px;
            text-align: center;

            background-color: lightblue;
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
        .box-login .username input{
            width: 95%;
            height: 30px;
        }
        .box-login .password input{
            width: 95%;
            height: 30px;
        }
        .box-login .submit input{
            margin-top: 6%;
            width: 100%;
            height: 40px;
            background-color: rgba(243,130,108,255);
            cursor:pointer;
        }
    </style>
</head>
<body>
    <?php include_once("headerRegion.php"); ?>

    <div id="main_body">

        <?php include_once("leftPannelRegion.php"); ?>

        <div id="main_content">
            <div class="box-login">
                <div class="login-title">
                    Đăng nhập
                </div>
                <form action="#" method="post">
                    <div class="username">
                            <input type="text" id="username" name="username" placeholder="Tên đăng nhập">
                    </div>

                    <div class="password">
                        <input type="password" id="password" name="password" placeholder="Mật khẩu">
                    </div>

                    <div class="submit">
                        <input type="submit" id="submit" name="submit" value="Đăng nhập">
                    </div>

                </form>
                
                

                

            </div>

            
        </div>
        <?php include_once("rightPannelRegion.php"); ?>

    </div>


    <?php include_once("footerRegion.php"); ?>

    <script src="layout_skeketon_js.js"></script>
    
</body>
</html>