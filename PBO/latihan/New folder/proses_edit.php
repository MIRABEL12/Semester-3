<?php
include "conn.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$no_telp = $_POST['no_telp'];

$sql = mysqli_query($conn, "UPDATE users SET nama='$nama', email='$email', no_telp='$no_telp' WHERE id=$id ");

if ($sql){
    echo "<script>alert('user berhasil diperbaharui');window.location='index.php';</script>";
}else{
    echo "<script>alert('user gagal diperbaharui');window.location='addform.php';</script>";
}
?>