<?php

$urlParameters=$_POST["urlParameters"];
$file_position=$_POST["file_position"];
// var_dump($file_position); echo "<br>";

// var_dump($urlParameters); echo "<br>";

 
$productCode = $_POST["id"];
// $file_position=$_POST["file_position"];
// echo "file pos:".$file_position. "<br>";
 
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
// header("Location: $file_position");

header("Location: ". $file_position ."?".$urlParameters);
var_dump("Location: ". $file_position ."?".$urlParameters); echo "<br>";
 
?>