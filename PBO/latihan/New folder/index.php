<?php
include "conn.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <a class="tombol" href="addform.php">+ Tambah Data Baru</a>
        <div class="table-body">
            <?php
                $result = mysqli_query($conn, "SELECT * from users");
            ?>
            <table border="1">
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Aksi</th>
                </tr>
                <?php
                    $no = 1;
                    
                    while ($data = mysqli_fetch_array($result)) {
                        
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data['nama'] ?></td>
                    <td><?php echo $data['email'] ?></</td>
                    <td><?php echo $data['no_telp'] ?></</td>
                    <td>    <a href="editform.php?id=<?php echo $data['id']; ?>">Edit</a>
                            <a href="deleteuser.php?id=<?php echo $data['id']; ?>">Hapus</a>
                    </td>
                </tr>
                <?php
                }

                ?>
            </table>
        </div>
    </div>
</body>
</html>