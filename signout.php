<?php
    session_start();
    session_unset();
    session_destroy();

    unset($_COOKIE['cart']);
    setcookie('cart', '', 1); // 1 is just a sample time point in the past.
    header("location: index.php");
    exit();
?>