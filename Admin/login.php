
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\layout_style.css">
<?php $server='localhost';
$user='root';
$pass='';
$database='webphpdatabase';
$conn=new mysqLi($server,$user,$pass,$database);
if(isset($_POST['dangnhap']))
{
    $username =$_POST['username'];
    $password =$_POST['password'];
    $sql = "SELECT * FROM taikhoangadmin WHERE Ten='$username' AND Pwd='$password'";
    $result =mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)==1){
        header("location:Emperor_admin.php");
    }
    else {
        echo"tai khoan hoac mat khau dang nhap sai";
    }
}
?>
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
        .box-login .username form input{
            width: 95%;
            height: 30px;
        }
        .box-login .password form input{
            width: 95%;
            height: 30px;
        }
        .box-login .submit form input{
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

    <div id="left_panel">
             
            <div class="left_panel_element" id="login" style="display: flex;">
                <a href="login.php">Đăng nhập</a>
            </div> 
             
</div>

        <div id="main_content">
        <div class="box-login">
    <div class="login-title">
        Đăng nhập
    </div>
    <form action="" method="post">
        <div class="username">
            <input type="text" id="username" name="username" placeholder="Tên đăng nhập">
        </div>
        <div class="password">
            <input type="password" id="password" name="password" placeholder="Mật khẩu">
        </div>
        <div class="submit">
            <input type="submit" id="submit" name="dangnhap" value="Đăng nhập">
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