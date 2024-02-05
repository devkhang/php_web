<?php
if(isset($_POST['submit'])){
    $email = $_POST["username"];
    $pwd = $_POST["password"];
    $rep_pwd = $_POST["rep_password"];

    var_dump($email);
    echo "<br> <br>";
    var_dump($pwd);
    echo "<br> <br>";
    var_dump($rep_pwd);
    echo "<br> <br>";


    require_once 'db.inc.php';
    require_once 'functions.php';
    if(emptyInputSignUp($email,$pwd,$rep_pwd)!==false){
        header('location: ../singup.php?error=emptyInput');
        exit();
    }
    if(invalid_username($email)!==false){
        header('location: ../singup.php?error=invalid username');
        exit();     
    }
    if(MatchPwd($pwd,$rep_pwd)!==false){
        header('location: ../singup.php?error=password do not matching');
        exit();       
    }
    if(email_exit($conn,$email)!==false){
        header('location: ../singup.php?error=email exit');
        exit();       
    }
    createUser($conn,$email,$pwd);
}else{
    header('location: ../singup.php');
    exit();
}
?>