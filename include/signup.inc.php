<?php
if(isset($_POST['submit'])){
    $email = $_POST["username"];
    $pwd = $_POST["password"];
    $rep_pwd = $_POST["rep_password"];
    require_once ('db.inc.php');
    require_once ('functions.php');
    if(emptyInputSignUp($email,$pwd,$rep_pwd)!==false){
        header('location: ../singup.php?error=emptyInput');
        exit();
    }
    if(invalid_username($email)!==false){
        header('location: ../singup.php?error=invalid_username');
        exit();     
    }
    if(MatchPwd($pwd,$rep_pwd)!==false){
        header('location: ../singup.php?error=password do not matching');
        exit();       
    }
    if(email_exist($conn,$email)!==false){
        header('location: ../singup.php?error=email exit');
        exit();       
    }
    createUser($conn,$email,$pwd);
    // Ví dụ về cách đóng kết nối
    mysqli_close($conn);

}else{
    header('location: ../singup.php');
    exit();
}
?>