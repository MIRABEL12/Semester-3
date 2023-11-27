<?php
$server = "localhost";
$username = "root";
$pass = "";
$db = "pt";

$conn = mysqli_connect($server,$username,$pass,$db);

if(!$conn){
    die("Gagal maning".mysqli_connect_error());
};


?>