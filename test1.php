<?php 
$host="localhost";
$username="root";
$pwd="";
$db="test";
$conn=mysqli_connect($host, $username, $pwd, $db);

if($conn->connect_errno){
        die($conn->connect_errno);
}

echo "connection succeed <br>";


$result=$conn->query("SELECT * FROM tb1;");

while($row=$result->fetch_array(MYSQLI_ASSOC)){
        echo $row["id"]." ".$row["str"]."<br>";
}

