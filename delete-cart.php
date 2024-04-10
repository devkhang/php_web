<?php
 
$productCode = $_POST["id"];
 
$cart = isset($_COOKIE["cart"]) ? $_COOKIE["cart"] : "[]";
$cart = json_decode($cart);
 
$new_cart = array();
foreach ($cart as $c)
{
    if ($c->MaSP != $productCode)
    {
        array_push($new_cart, $c);
    }
}
setcookie("cart", json_encode($new_cart));
header("Location: index.php");

?>