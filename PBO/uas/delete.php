<?php

include_once 'user.php';

use MyApp\User;

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $user = new User();
    $user->deleteUser($id);

    header("Location: index.php");
    exit();
} else {
    // Handle case where id is not provided in the URL
    echo "ID tidak valid.";
}
?>