<?php
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $pesan = $_POST['pesan'];

        header("Location: Forms.php?nama=$nama&email=$email&phone=$phone&pesan=$pesan");
        exit;
    }
    ?>