<?php
if(isset($_POST['submit'])){
    $email = $_POST["admin_name"];
    $pwd = $_POST["password"];
    require_once("db.inc.php");
    require_once("functions.php");
    // echo $email;
    // exit();

    if(emptyInputLoginIn($email,$pwd)!==false){
        // echo var_dump(emptyInputLoginIn($email,$pwd));
        // exit();
        header('location: ../login.php?error=emptyInput');
        exit();
    }
    loginAdmin($conn,$email,$pwd);
}
else{
    header("location: ../login.php?error=error");
    exit();
}