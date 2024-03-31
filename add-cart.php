<?php
    include_once('include\db.inc.php');
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
    header("Location: index.php");
?>
