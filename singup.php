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
       .box-signup{
        width: 50%;
        text-align: center;

        background-color: rgba(255,255,255,255);
        border-style: solid;
        border-width: 1px;

        box-sizing: border-box;

        
    }
    .box-signup #singup-title{
        font-size: 20px;
        font-weight:bolder;
        margin-bottom: 30px;

        
    }
    .box-signup div{
        margin-bottom: 20px;
        width: 100%;
    }
    .box-signup .box-itme form input{
        width: 95%;
        height: 30px;
        margin: 3px;
    }

    /* .box-signup #submit form input{

        width: 100%;
        height: 30px;
        background-color: rgba(243,130,108,255);
        cursor: pointer;
    } */
    #div_form_signup{
        margin:0px;
        height:auto;
    }
    .box-signup .box-itme form #submit{
        margin-bottom:auto;
        height:auto;
    }
    #form_signup{
        height:auto;
    }
    .box-signup .box-itme form #submit-input{
        width: 100%;
        box-sizing:border-box;
        height: 30px;
        background-color: rgba(243,130,108,255);
        cursor: pointer;
        margin:0px;
        margin-bottom:auto;
        border-style:none;
    }


    </style>


</head>
<body>
    <?php include_once("headerRegion.php"); ?>
    <div id="main_body">
        <?php include_once("leftPannelRegion.php"); ?>

        <div id="main_content1">
            <div class="box-signup">
                <div class="box-itme" id="singup-title">
                    Đăng kí
                </div>
                <div class="box-itme" id="div_form_signup">
                    <form action="include/signup.inc.php" method="post" id="form_signup">
                        <input type="text" id="username" name="username" placeholder="Email/Số điện thoại/Tên đăng nhập">
                        <div class="box-itme" id="password">
                            <input type="password" id="password" name="password" placeholder="Mật khẩu">
                        </div>
                        <div class="box-itme" id="repassword">
                            <input type="password" id="password1" name="rep_password" placeholder="Nhập lại mật khẩu">
                        </div>
                        <div class="box-itme" id="submit">
                            <input type="submit" id="submit-input" name="submit" value="Đăng ký">
                        </div>
                    </form>
                </div>
                <?php
                        if(isset($_GET["error"])){
                            if($_GET["error"]=="emptyInput"){
                                echo "<p style='color:red'> fill all the field !</P>";
                            }
                            else if($_GET["error"]=="invalid_username"){
                                echo "<p 'color:red'> choose the proper username !</P>";
                            }
                            else if($_GET["error"]=="password do not matching"){
                                echo "<p 'color:red'> the repeat paword does not matching !</P>";
                            }
                            else if($_GET["error"]=="email exist"){
                                echo "<p 'color:red'>Choose another username !</P>";
                            }
                            else if($_GET["error"]=="stmtfail"){
                                echo "<p 'color:red'>something went wrong! try again</P>";
                            }
                        }
                    ?>
            </div>
        </div>
        
        <?php include_once("rightPannelRegion.php"); ?>
    </div>    

    <?php include_once("footerRegion.php"); ?>


</body>
</html>


        
