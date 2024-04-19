<?php
$name="cookie";
$cookie=(isset($_COOKIE[$name])? $_COOKIE[$name]: json_encode([]));

$cookie=json_decode($cookie);


array_push($cookie, 1);


setcookie("cookie", json_encode($cookie));


var_dump(strlen($_COOKIE[$name])); echo "<br>";




// setcookie("asdf","sdfa");

?>