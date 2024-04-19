<?php
 
$productCode = $_POST["id"];
$quantity = $_POST["quantity"];
$cart = isset($_COOKIE["cart"]) ? $_COOKIE["cart"] : "[]";
$cart = json_decode($cart);
 
foreach ($cart as $c)
{
    if ($c->MaSP == $productCode)
    {
        $c->quantity = $quantity;
    }
}
 
setcookie("cart", json_encode($cart));
header("Location: cart.php");
?>