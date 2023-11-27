<?php
    require_once('config.php');

    $nim = $_POST["nim"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $check_nim_query = "SELECT * FROM user WHERE nim = '$nim'";
    $check_nim_result = mysqli_query($mysqli, $check_nim_query);
    $check_username_query = "SELECT * FROM user WHERE username = '$username'";
    $check_username_result = mysqli_query($mysqli, $check_username_query);
    $check_email_query = "SELECT * FROM user WHERE email = '$email'";
    $check_email_result = mysqli_query($mysqli, $check_email_query);
    if (mysqli_num_rows($check_nim_result) > 0) {
        echo "Error: NIM already exists. Please choose a different NIM. <a href='/week5/mira/register.php'>Back to register!</a>";
    } elseif (mysqli_num_rows($check_username_result) > 0) {
    echo "Error: Username already exists. Please choose a different username. <a href='/week5/mira/register.php'>Back to register!</a>";
    } elseif (mysqli_num_rows($check_email_result) > 0) {
    echo "Error: Email already exists. Please choose a different email. <a href='/week5/mira/register.php'>Back to register!</a>";
    } else {
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO user (nim, username, email, password) VALUES ('$nim', '$username', '$email', '$hashed_password')";

    if (mysqli_query ($mysqli, $sql)) {
        echo "Registration successful!: <a href='/week5/mira/index.php'>Back to login!</a>";
        echo "<script>window.location.href = '/week5/mira/index.php';</script>";
    } else {
        echo "Error; " . $sql . "<br>" . mysqli_error($mysqli);
    }
    }