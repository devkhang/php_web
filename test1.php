<?php
    setcookie("cookie","cookie1");
    setcookie("cookie","cookie2");
    setcookie("cookie","cookie3");
    if(isset($_COOKIE['cookie'])){
        foreach( $_COOKIE['cookie'] as $name => $value){
            $name = htmlspecialchars($name);
            $value = htmlspecialchars($value);
            echo "$name : $value <br />\n";
        }
    }
    else{
        echo "nothing";
    }
