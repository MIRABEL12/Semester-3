<?php

include_once 'user.php';

use MyApp\User;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nama = $_POST['nama'];

    $user = new User();
    $user->updateUser($id, $nama);

    header("Location: index.php");
    exit();
} else {
    $id = $_GET['id'];

    $user = new User();
    $userData = $user->getUserById($id);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>Edit User</h2>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $userData['id'] ?>">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" value="<?= $userData['nama'] ?>" required>
        <button type="submit">Simpan</button>
    </form>
</body>

</html>
