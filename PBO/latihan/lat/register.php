<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
<style>
    body {
    background-color: blue;
    text-align: center;
    margin-top: 200px;
}
</style>
</head>
<body>
    <form action="create.php" method="post"></form>
    <label for="username">username:</label>
    <input type="text" name = username id = username required> <br><br>

    <label for="password">password:</label>
    <input type="password" name = password id = password required> <br><br>

    <input type="submit" value = register>
</body>
</html>