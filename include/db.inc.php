<?php
$host = 'localhost';
$user = 'root';
$pwd = '';
$db = 'webdb';

$conn = mysqli_connect($host,$user,$pwd,$db);

if(!$conn){
    die('error'.mysqli_connect_error);
}