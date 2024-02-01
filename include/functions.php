<?php
function emptyInputSignUp($email,$pwd,$rep_pwd){
    if(empty($email)||empty($pwd)||empty($rep_pwd)){
        return true;
    }else{
        return false;
    }
    return false;
}