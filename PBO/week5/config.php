<?php

    $databaseHost = 'localhost';
    $databaseName = 'mirabel';
    $databaseUsername = 'root';
    $databasePassword = '';

    $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

    // if (!$mysqli) {
    //     die("Koneksi gagal; " . mysqli_connect_error());
    // } else {
    //     echo "Koneksi ke Database Berhasil!";
    // }
?>