<?php 

    require_once('config.php');

    $sql = "CREATE TABLE IF NOT EXISTS user (
        nim INT(8) PRIMARY KEY,
        username VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        password VARCHAR(255) NOT NULL

        )";

        if (mysqli_query($mysqli, $sql)) {
            echo "<br /> Tabel berhasil dibuat.";
        } else {
            echo "Error: " . mysqli_error($mysqli);
        }
?>