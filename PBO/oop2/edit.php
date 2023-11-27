<?php
require 'classes/Database.php';
require 'classes/CRUD.php';

// Inisialisasi objek CRUD
$crud = new CRUD();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    if (isset($_POST['update'])) {
        $name = $_POST['Name'];
        $nim = $_POST['NIM'];
        $prodi = $_POST['Prodi'];
        $jurusan = $_POST['Jurusan'];
        $crud->update($id, $name, $nim, $prodi, $jurusan);
        header("Location: index.php");
    }

    $result = $crud->read();
    $data = $result->fetch_assoc();
} else {
    header("Location: index.php");
}
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
        
        form button:hover {
            background-color: #005bb5; /* Slightly darker blue on hover */
        }

    </style>
<title>Edit Data</title>
</head>
<body>
    <h1>Edit Data</h1>
    <form action="edit.php?id=<?php echo $id; ?>" method="POST">
        <input type="text" name="Name" placeholder="Name" value="<?php echo $data['name']; ?>">
        <input type="text" name="NIM" placeholder="NIM" value="<?php echo $data['nim']; ?>">
        <input type="text" name="Prodi" placeholder="Prodi" value="<?php echo $data['prodi']; ?>">
        <input type="text" name="Jurusan" placeholder="Jurusan" value="<?php echo $data['jurusan']; ?>">
        <button type="submit" name="update">Update</button>
    </form>
</body>
</html>
