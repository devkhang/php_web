<?php
// kiểm tra signup
function emptyInputSignUp($email, $pwd, $rep_pwd) {
    return empty($email) || empty($pwd) || empty($rep_pwd);
}
//kiểm tra login
function emptyInputLoginIn($email, $pwd) {
    return empty($email) || empty($pwd) ;
}
// kiểm tra hợp lệ
function invalid_username($email){
    return !preg_match("/^[a-zA-Z0-9]*$/",$email);
}

function MatchPwd($pwd,$rep_pwd){
    $result=false;
    if($pwd !== $rep_pwd){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function email_exist($conn,$email){
    $sql = "select * from taikhoan where user_account = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!$stmt) {
        // Xử lý lỗi nếu khởi tạo thất bại
        die("Statement initialization failed: " . mysqli_error($conn));
    }
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header('location: ../singup.php?error=stmtfail');
    }
    mysqli_stmt_bind_param($stmt,'s',$email);
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
    $sql = "insert into taikhoan (user_account,pwd)values(?,?)";
    $stmt = mysqli_stmt_init($conn);
    if (!$stmt) {
        // Xử lý lỗi nếu khởi tạo thất bại
        die("Statement initialization failed: " . mysqli_error($conn));
    }
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header('location: ../singup.php?error=stmtfail');
    }
    $hash_pwd = password_hash($pwd,PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt,'ss',$email,$hash_pwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header('location: ../singup.php?error=none');
    exit();
}
function loginUser($conn, $email, $pwd){
    $existingUser = email_exist($conn, $email);
    
    if(!$existingUser){
        // Không tìm thấy người dùng trong cơ sở dữ liệu
        header("location: ../login.php?error");
        exit();
    }

    $pwd_hashed = $existingUser["pwd"];
    // echo $pwd_hashed;
    // exit();
    $pwd_checked = password_verify($pwd, $pwd_hashed);
    // echo $pwd_checked;
    // exit();
    if($pwd_checked===false){
        // Mật khẩu không khớp
        header('location: ../login.php?error=wrong_user_or_password');
        exit();
    } else if($pwd_checked===true) {
        // Đăng nhập thành công
        session_start();
        $_SESSION["id"] = $existingUser["id"];
        $_SESSION["username"] = $existingUser["user_account"];
        $_SESSION["pwd"] = $existingUser["pwd"];
        header("location: ../login.php");
        exit();
    }
}
