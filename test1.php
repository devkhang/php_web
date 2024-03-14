<?php 
$host="localhost";
$username="root";
$pwd="";
$db="webphpdatabase";
$conn=mysqli_connect($host, $username, $pwd, $db);

if($conn->connect_errno){
        die($conn->connect_errno);
}

echo "connection succeed <br>";


$result=$conn->query("SELECT * FROM sanpham;");

$row=$result->fetch_array(MYSQLI_ASSOC);
echo "<img src=".$row["HinhAnhMH"].">";



