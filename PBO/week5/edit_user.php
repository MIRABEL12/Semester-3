<?php
session_start();
require_once('config.php');

if (!isset($_SESSION['username'])) {
    header('Location: mira/index.php');
    exit();
}

if (isset($_GET['id'])) {
    $userId = $_GET['id'];

    // Query untuk mengambil data pengguna berdasarkan ID
    $sql = "SELECT * FROM user WHERE nim = ?";
    $stmt = $mysqli->prepare($sql);

    if ($stmt === false) {
        die("Error dalam persiapan statement: " . $mysqli->error);
    }

    // Bind parameter
    $stmt->bind_param("i", $userId);

    // Eksekusi statement SQL
    if ($stmt->execute()) {
        $result = $stmt->get_result();
        if ($result->num_rows === 1) {
            $userData = $result->fetch_assoc();

            // Form untuk mengedit data pengguna
            ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Edit User</title>
                <!-- Include Bootstrap CSS -->
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
            </head>
            <body>
                <div class="container mt-5">
                    <h2>Edit User</h2>
                    <form method="post" action="update_user.php">
                        <input type="hidden" name="id" value="<?php echo $userData['nim']; ?>">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username:</label>
                            <input type="text" name="username" class="form-control" value="<?php echo $userData['username']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" name="email" class="form-control" value="<?php echo $userData['email']; ?>" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </form>
                    <br>
                    <a href="dashboard.php" class="btn btn-secondary">Kembali ke Dashboard</a>
                </div>
                <!-- Include Bootstrap JS (optional) -->
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
            </body>
            </html>
            <?php
        } else {
            echo "User tidak ditemukan.";
        }
    } else {
        echo "Gagal mengambil data user: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "ID user tidak diberikan.";
}
?>