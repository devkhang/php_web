<?php
if(isset($_POST['submit'])){
    $email = $_POST['username'];
    $pwd = $_POST['password'];
    $rep_pwd = $_POST['rep_password'];

    require_once 'db.inc.php';
    require_once '';
    if(emptyInputSignUp($email,$pwd,$rep_pwd)!==false){
        header('location: ../singup.php?error=emptyInput');
        exit();
    }
    if(invalid_username($email)!==false){
        header('location: ../singup.php?error=invalid username');
        exit();     
    }
    if(matchPwd($pwd,$rep_pwd)!==false){
        header('location: ../singup.php?error=password do not matching');
        exit();       
    }
    if(username_exit($conn,$email)!==false){
        header('location: ../singup.php?error=password do not matching');
        exit();       
    }
}else{
    header('location: ../singup.php');
    exit();
}