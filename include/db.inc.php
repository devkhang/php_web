<?php
$host = 'localhost';
$user = 'root';
$pwd1 = '';
$db = 'webdb';

$conn = mysqli_connect($host,$user,$pwd1,$db);

if(!$conn){
    die('error'.mysqli_connect_error);
}