<?php

require 'vendor/Autoload.php';

use MyClass\MyClass;

$nama = $nim = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $myclass = new MyClass();
    
    try {
        $myclass->setNama($_POST['nama']);
        $myclass->setNim($_POST['nim']);
        
        $nama = $myclass->getNama();
        $nim = $myclass->getNim();
    } catch (Exception $e) {
        $error = "Error: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<style>
    /* style.css */

    /* Gaya untuk body (halaman) */
    body {
        font-family: Times New Roman, sans-serif;
        background-color: #f2f2f2;
        margin: 0;
        padding: 0;
    }

    /* Gaya untuk kontainer utama */
    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    /* Gaya untuk judul */
    h1 {
        color: #333;
    }

    /* Gaya untuk formulir input */
    form {
        background-color: #f9f9f9;
        padding: 20px;
        border: 2px solid #ccc;
        border-radius: 5px;
    }

    input[type="text"] {
        width: 96%;
        padding: 10px;
        margin: 5px 0;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    input[type="submit"] {
        background-color: #007BFF;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 3px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }

    /* Gaya untuk pesan kesalahan */
    .error-message {
        color: #ff0000;
    }

    /* Gaya untuk tabel */
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th, td {
        border: 1px solid #ccc;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #007BFF;
        color: #fff;
    }

    /* Gaya untuk tautan (link) */
    a {
        color: #007BFF;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }
    </style>
    <title>Form Input Mahasiswa</title>
</head>
<body>
    <h1>Form Input Mahasiswa</h1>
    <form method="POST" action="">
        Nama <input type="text" name="nama" required><br>
        NIM <input type="text" name="nim" required><br>
        <input type="submit" value="Submit">
    </form>

    <?php if (!empty($error)): ?>
    <p><?php echo $error; ?></p>
    <?php endif; ?>

    <?php if (!empty($nama) && !empty($nim)): ?>
    <h2>Hasil Input:</h2>
    <p>Nama <?php echo $nama; ?></p>
    <p>NIM <?php echo $nim; ?></p>
    <?php endif; ?>
</body>
</html>