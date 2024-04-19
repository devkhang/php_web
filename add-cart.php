<?php
    include_once('include\db.inc.php');
    
    $urlParameters=$_POST["urlParameters"];
    $file_position=$_POST["file_position"];
    // var_dump($file_position); echo "<br>";

    // var_dump($urlParameters); echo "<br>";

    $quantity = $_POST["quantity"];
    $id = $_POST["id"];

    $cart = isset($_COOKIE["cart"]) ? $_COOKIE["cart"] : "[]";
    $cart = json_decode($cart);

    $result = mysqli_query($conn, "SELECT * FROM sanpham WHERE MaSP = '" . $id . "'");
    $product = mysqli_fetch_assoc($result);

    array_push($cart, array(
        "MaSP" => $id,
        "quantity" => $quantity,
        "product" => $product["HinhAnhMH"],
        "hinhanh" => $product["Ten"],
        "Gia" => $product["Gia"],
        "Ten" =>$product["Ten"]
    ));
    setcookie("cart", json_encode($cart));
    header("Location: ". $file_position ."?".$urlParameters);
    // var_dump("Location: ". $file_position ."?".$urlParameters);
?>
