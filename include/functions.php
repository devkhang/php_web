<?php
function emptyInputSignUp($email, $pwd, $rep_pwd) {
    return empty($email) || empty($pwd) || empty($rep_pwd);
}

function invalid_username($email){
    $result;
    if(!preg_match("/^[a-zA-Z0-9]*$/",$email)||!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function MatchPwd($pwd,$rep_pwd){
    $result;
    if($pwd !== $rep_pwd){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function email_exit($conn,$email){
    $sql = "select * from Customer where user_account = ?";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_prepare($stmt,$sql)){
        header('location: ../singup.php?error=stmtfail');
    }
    mysqli_bind_param($stmt,'s',$email);
    mysqli_stmt_execute($stmt);

    $resultdata = mysqli_stmt_get_result($stmt);
    if($row = mysqli_fetch_assoc($resultdata)){
        return $row;
    }else{
        $row = false;
        return $row;
    }
    mysqli_stmt_close($stmt);
}

function createUser($conn,$email,$pwd){
    $sql = "insert into Customer (user_account,pwd)values(?,?)";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_prepare($stmt,$sql)){
        header('location: ../singup.php?error=stmtfail');
    }
    $hash_pwd = password_hash($pwd,PASSWORD_DEFAULT);
    mysqli_bind_param($stmt,'ss',$email,$hash_pwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header('location: ../singup.php?error=none');
    exit();
}