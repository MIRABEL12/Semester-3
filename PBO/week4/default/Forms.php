<!DOCTYPE html>
<html lang="en">

<head>
    <title>Talk Forms</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

    <!-- Favicon icon -->
    <link rel="ico" href="..\assets\images\favicon.ico" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="../assets/fonts/fontawesome/css/fontawesome-all.min.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <div class="auth-wrapper">
        <div class="auth-content container">
            <div class="card">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="card-body">
                            <img src="..\assets\images\logo-dark.png" alt="" class="img-fluid mb-4">
                            <h3 class="mb-3 f-w-400">Let's Talk!</h3>
                            <form action="data.php" method="post">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                        <img src="..\assets\images\avatar-35.jpg" alt="">
                                        </span>
                                    </div>
                                    <input type="Name" class="form-control" placeholder="Your Name" name="nama">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="feather icon-Address"></i></span>
                                    </div>
                                    <input type="Email" class="form-control" placeholder="Your Email Address (Example@gmail.com)" name="email">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="feather icon-Phone"></i></span>
                                    </div>
                                    <input type="Phone" class="form-control" placeholder="Your Phone (+62 8)" name="phone">
                                </div>
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="feather icon-Text"></i></span>
                                    </div>
                                    <textarea rows="5" cols="40" placeholder="Your Message" name="pesan" class="form-control"> </textarea>
                                </div>

                                <button class="btn btn-primary shadow-2 mb-4" name="submit" type="submit">Submit</button>
                                <p class="mb-2 text-muted">Want to send again? <a href="Forms.php" class="f-w-400">Yes!</a></p>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6 d-none d-md-block">
                        <img src="..\assets\images\auth-bg.jpeg" alt="" class="img-fluid">
                    </div>
                    <!-- Modal to display data -->
                    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Data yang Anda Isi</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <h6>Nama: <span id="modalNama"></span></h6>
                                    <h6>Email: <span id="modalEmail"></span></h6>
                                    <h6>Phone: <span id="modalPhone"></span></h6>
                                    <p>Pesan: <span id="modalPesan"></span></p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer mt-5">
                <p class="text-center">Made with by <a href="https://instagram.com/andimrbel?igshid=MjEwN2IyYWYwYw==" target="_blank">Mirabel</a></p>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            <?php
            if (isset($_GET['nama']) && isset($_GET['email']) && isset($_GET['phone'])&& isset($_GET['pesan'])) {
                $nama = htmlspecialchars($_GET['nama']);
                $email = htmlspecialchars($_GET['email']);
                $phone = htmlspecialchars($_GET['phone']);
                $pesan = htmlspecialchars($_GET['pesan']);
                echo "document.getElementById('modalNama').textContent = '$nama';";
                echo "document.getElementById('modalEmail').textContent = '$email';";
                echo "document.getElementById('modalPhone').textContent = '$phone';";
                echo "document.getElementById('modalPesan').textContent = '$pesan';";
                echo "$('#myModal').modal('show');";
            }
            ?>
        });
    </script>
</body>
</html>