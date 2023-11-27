<?php
session_start();
require_once('config.php'); // Include your database connection script here.

if (isset($_SESSION['username'])) {
    // Retrieve all user data from the database
    $sql = "SELECT * FROM user";
    $result = mysqli_query($mysqli, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        // Store all user data in an array
        $userArray = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $userArray[] = $row;
        }
    } else {
        $userArray = []; // Set an empty array if no user data found
        echo 'No user data found.';
    }
} else {
    // Redirect to the login page if the user is not logged in
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Your custom styles here */
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2>Welcome, <?php echo $_SESSION['username']; ?></h2>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Student ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php // Check if $userArray is an array before using foreach
                if (is_array($userArray)) {
                foreach ($userArray as $user): 
                ?>
                    <tr>
                        <td><?php echo $user['nim']; ?></td>
                        <td><?php echo $user['username']; ?></td>
                        <td><?php echo $user['email']; ?></td>
                        <td>
                            <a class="btn btn-primary" href="edit_user.php?id=<?php echo $user['nim']; ?>">Edit</a>
                            <a class="btn btn-danger" href="delete_user.php?id=<?php echo $user['nim']; ?>">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; }?> 
            </tbody>
        </table>
        <br>
        <a href="logout.php" class="btn btn-secondary">Log Out</a>
    </div>

    <!-- Include Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>

<?php