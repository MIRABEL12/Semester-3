<?php
include 'conn.php';

$id = $_GET['id'];

$sql = mysqli_query($conn, "DELETE from users WHERE id=$id;");

if (!$sql){
    echo "<script>alert('user gagal dihapus');window.location='index.php';</script>";
}else{
    echo "<script>alert('user berhasil dihapus');window.location='index.php';</script>";
}


?>