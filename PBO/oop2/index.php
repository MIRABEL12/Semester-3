<?php
require 'classes/Database.php';
require 'classes/CRUD.php';

// Inisialisasi objek CRUD
$crud = new CRUD();

// Handle Create
if (isset($_POST['create'])) {
    $name = $_POST['name'];
    $nim = $_POST['nim'];
    $prodi = $_POST['prodi'];
    $jurusan = $_POST['jurusan'];
    $crud->create($name, $nim, $prodi, $jurusan);
}

// Tampilkan data dari database
$result = $crud->read();
?>

<!DOCTYPE html>
<html>
<head>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff; /* Light blue */
            margin: 0;
            padding: 20px;
        }

        h1 {
            color: #0066cc; /* Darker blue */
        }

        form {
            width: 300px;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        form input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #0066cc; /* Darker blue */
            border-radius: 5px;
        }

        form button {
            width: 100%;
            padding: 10px;
            background-color: #0066cc; /* Darker blue */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        table {
            width: 80%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #dddddd;
        }

        th {
            background-color: #0066cc; /* Darker blue */
            color: white;
        }

        tr:hover {
            background-color: #e0f7fa; /* Lighter blue on hover */
        }

        a {
            color: #0066cc; /* Darker blue */
            text-decoration: none;
        }

        a:hover {
            color: #003366; /* Slightly darker blue on hover */
            text-decoration: underline;
        }
    </style>
    <title>CRUD Application</title>
</head>
<body>
    <h1>CRUD Application</h1>

    <form action="index.php" method="POST">
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="nim" placeholder="NIM">
        <input type="text" name="prodi" placeholder="Prodi">
        <input type="text" name="jurusan" placeholder="Jurusan">
        <button type="submit" name="create">Create</button>
    </form>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>NIM</th>
            <th>Prodi</th>
            <th>Jurusan</th>
            <th>Action</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['nim'] . "</td>";
                echo "<td>" . $row['prodi'] . "</td>";
                echo "<td>" . $row['jurusan'] . "</td>";
                echo "<td><a href='edit.php?id=" . $row['id'] . "'>Edit</a> | <a href='delete.php?id=" . $row['id'] . "'>Delete</a></td>";
                echo "</tr>";
            }
        } else {
            echo "Tidak ada data yang ditampilkan";
        }
        ?>
    </table>
</body>
</html>