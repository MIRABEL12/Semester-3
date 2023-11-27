<?php
session_start();
require_once('config.php');

if (!isset($_SESSION['username'])) {
    header('Location: index.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Mendapatkan data dari formulir
    $userId = $_POST['nim'];
    $newUsername = $_POST['username'];
    $newEmail = $_POST['email'];
    

    // Query untuk memeriksa ketersediaan username dan email
    $checkUsernameQuery = "SELECT nim FROM user WHERE username = ? AND nim <> ?";
    $checkUsernameStmt = $mysqli->prepare($checkUsernameQuery);

    if ($checkUsernameStmt === false) {
        die("Error dalam persiapan statement: " . $mysqli->error);
    }

    // Bind parameter untuk cek username
    $checkUsernameStmt->bind_param("si", $newUsername, $userId);

    // Eksekusi statement SQL untuk memeriksa ketersediaan username
    $checkUsernameStmt->execute();
    $checkUsernameStmt->store_result();

    // Cek apakah username sudah ada di database
    if ($checkUsernameStmt->num_rows > 0) {
    echo "Username '$newUsername' sudah ada dalam database. Silakan pilih yang lain.";
    exit();
    }
    
    // Persiapkan ulang statement untuk memeriksa email
    $checkUsernameStmt->close();
    $checkEmailQuery = "SELECT nim FROM user WHERE email = ? AND nim <> ?";
    $checkEmailStmt = $mysqli->prepare($checkEmailQuery);

    if ($checkEmailStmt === false) {
        die("Error dalam persiapan statement: " . $mysqli->error);
        }
        
    // Bind parameter untuk cek email
     $checkEmailStmt->bind_param("si", $newEmail, $userId);

     // Eksekusi statement SQL untuk memeriksa ketersediaan email
    $checkEmailStmt->execute();
    $checkEmailStmt->store_result();
    
    // Cek apakah email sudah ada di database
    if ($checkEmailStmt->num_rows > 0) {
    echo "Email '$newEmail' sudah ada dalam database. Silakan pilih yang lain.";
    exit();
    }

    // Jika tidak ada kesalahan, lanjutkan dengan update data
    $checkEmailStmt->close();

    // Query untuk mengupdate data pengguna
    $updateQuery = "UPDATE user SET username = ?, email = ? WHERE nim = ?";
    $updateStmt = $mysqli->prepare($updateQuery);
    if ($updateStmt === false) {
    die("Error dalam persiapan statement: " . $mysqli->error);
    }

    // Bind parameter untuk update data
    $updateStmt->bind_param("ssi", $newUsername, $newEmail, $userId);

    // Eksekusi statement SQL untuk mengupdate data
  
    if ($updateStmt->execute()) {
        header('Location: dashboard.php');
        exit();
    } else {
        echo "Gagal mengupdate data pengguna: " . $updateStmt->error;
    }
    $updateStmt->close();
    } else {
        echo "Permintaan tidak valid.";
    }
    ?>