<?php
$mysqli = new mysqli ('localhost', 'root', '', 'remed');

if ($mysqli) {
    echo "berhasil";
} else {
    die ("gagal" . mysqli_error($mysqli));
}
?>