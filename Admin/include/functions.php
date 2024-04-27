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
    return !preg_match("/^[a-z A-Z0-9]*$/",$email);
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
    $sql = "select * from taikhoangadmin where Ten = ?;";
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
function createAdmin($conn,$email,$pwd){
    $sql = "insert into taikhoangadmin (user_account,pwd)values(?,?)";
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
function loginAdmin($conn, $email, $pwd){
    $existingUser = email_exist($conn, $email);
    var_dump($existingUser);
    if(!$existingUser){
        // Không tìm thấy người dùng trong cơ sở dữ liệu
        header("location: ../login.php?error");
        exit();
    }
    $pwd_hashed = $existingUser["Pwd"];
    $pwd_checked = password_verify($pwd, $pwd_hashed);
    if($pwd_checked===true||$pwd==$pwd_hashed){
        // Mật khẩu không khớp
        session_start();
        $_SESSION["id"] = $existingUser["MaTK"];
        $_SESSION["admin_name"] = $existingUser["Ten"];
        $_SESSION["pwd"] = $existingUser["Pwd"];
        $_SESSION["HinhDaiDien"] = $existingUser["HinhDaiDien"];
        $_SESSION['allowed_access'] = true;
        header("location: ../index.php");
        exit();
    } else{
        header('location: ../login.php?error=wrong_user_or_password');
        exit();
    }
}

    function postFilter($post){//return an array of none empty string input name, the user didn't pick this input
        $nonEmptyArr=array();
        foreach($post as $key=>$value){
            // echo "key: $key <br>";
            // echo "value: $value <br>";
            if($value!="" && $key!="submit"){
                // echo "is chosen <br>";
                $nonEmptyArr[$key]=$value;
            }
        }
        return $nonEmptyArr;
    }

    function isShowAddToCart($sanpham){//transform Khang code to a 
        //function for better coding, check wheather that san pham should be add to cart or delete form cart

        $cart = isset($_COOKIE["cart"])?$_COOKIE["cart"]:"[]";
        $cart = json_decode($cart);
        $flag = false;
        foreach ($cart as $c)
        {
            if ($c->MaSP == $sanpham["MaSP"])//toi dung fetch_array :))
            {
                $flag = true;
                break;
            }
        }
        //if $flag=false => san pham khong co trong cart
        //if $flag=true => san pham co trong cart
        return $flag;

    }
    
    function getStringOfParaPOST($post){
        $stringOfParameters="";
        $nonEmptyPost=postFilter($post);
        $lastKey=array_key_last($nonEmptyPost);
        foreach($nonEmptyPost as $key=>$value){
            if($key=="page-nr"){
                continue;
            }
            $stringOfParameters.="$key=$value";

        }
        return $stringOfParameters;
    }
    
    function getStringOfParaGET($get){
        $stringOfParameters="";
        $nonEmptyGet=postFilter($get);
        $lastKey=array_key_last($nonEmptyGet);
        foreach($nonEmptyGet as $key=>$value){
            if($key=="page-nr"){
                continue;
            }
            $stringOfParameters.="$key=$value";

        }
        return $stringOfParameters;
    }

?>