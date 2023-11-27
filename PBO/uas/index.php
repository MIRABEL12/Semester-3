<?php

include_once 'user.php';

use MyApp\User;

$user = new User();
$users = $user->getAllUsers();

// Form handling untuk tambah user
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];

    $user->addUser($nama);

    // Redirect untuk menghindari pengiriman ulang formulir
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD User</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>


    <!-- Form tambah user -->
    <h2>Tambah User</h2>
    <form action="" method="post">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>
        <button type="submit">Tambah</button>
    </form>

    <h2>Daftar User</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($users as $user) : ?>
            <tr>
                <td><?= $user['id'] ?></td>
                <td><?= $user['nama'] ?></td>
                <td>
                    <a href="edit.php?id=<?= $user['id'] ?>">Edit</a>
                    <a href="delete.php?id=<?= $user['id'] ?>" onclick="return confirm('Apakah Anda yakin?')">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>

</html>
