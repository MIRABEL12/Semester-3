<?php
include "conn.php";

$nama = $_POST['nama'];
$email = $_POST['email'];
$no_telp = $_POST['no_telp'];

$sql = mysqli_query($conn, "INSERT into users (nama, email, no_telp) value ('$nama','$email','$no_telp')");

if ($sql) {
    echo "<script>alert('user berhasil ditambahkan');window.location='index.php';</script>";
}else
    echo "<script>alert('user gagal ditambahkan');window.location='addform.php';</script>";
?>
