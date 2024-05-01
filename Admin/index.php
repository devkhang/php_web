
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\layout_style.css">
    <?php 
session_start();
$server='localhost';
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
    } else {
        echo "<script>
            sessionStorage.setItem('loginState', 'false');
            console.log('return to index');
            alert('Tên tài khoản hoặc mật khẩu sai');
            window.location='index.php'; 
        </script>";  
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
            font-size: 150%;
            font-weight:bolder;
            margin-top: 6px;
            text-align: center;

        }
        .box-login div{
            margin-bottom: 20px;
            width: 100%;
             
        }
        
        .box-login form input{
            width: 95%;
            height: 30px;
            padding:7px;
            font-size: 100%;
            border:none;

        }
        .box-login form .submit input {
    width: 50%;
    height: 30px;    
}
    </style>
</head>
<body> 
    <?php include_once("headerRegion.php"); ?>

    <div id="main_body">

    <div id="left_panel" style="background-color: white;"> 
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
        <div class="submit" >
            <input type="submit" id="submit" name="dangnhap" value="Đăng nhập">
        </div>
    </form>
</div>


             
        </div>
        <?php include_once("rightPannelRegion.php"); ?>

    </div>


    <?php include_once("footerRegion.php"); ?>

     
    
</body>
</html>