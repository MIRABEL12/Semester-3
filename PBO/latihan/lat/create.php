<?php
include 'config.php';

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO user (username, password) VALUES ($username, $password)";

    $result = mysqli_query ($mysql, $sql);

    if (result) {
        echo "regis berhasil";

        header ('location:login.php');
    }
}
?>