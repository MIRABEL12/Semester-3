<?php
include 'conn.php';

$id = $_GET['id'];
$read = mysqli_query($conn,"SELECT * FROM users WHERE id=$id ");
$r = mysqli_fetch_array($read);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>
<body>
    <div class="container">
        <h2>Edit User</h2>
        <form method="post" action="proses_edit.php">
            <input type="text" name="id" value="<?php echo $id ?>" required  hidden><br>
            <label for="nama">Nama:</label>
            <input type="text" name="nama" value="<?php echo $r['nama']; ?>" required><br>
            
            <label for="email">Email:</label>
            <input type="email" name="email" value="<?php echo $r['email']; ?>" required><br>
            
            <label for="no_telp">Phone:</label>
            <input type="text" name="no_telp" value="<?php echo $r['no_telp']; ?>" required><br>
            
            <input type="submit" name="update" value="Update">
        </form>
    </div>
</body>
</html>