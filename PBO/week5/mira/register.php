<!DOCTYPE html>
<html lang="en">

<head>
  <title>Mira's</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
  <header id='header' class='fixed-top'>
    <div class='container-fluid d-flex justify-content-between align-items-center'>
      <h1 class='logo me-auto me-lg-1'><a >DATA MAHASISWA</a></h1>
      <div class='header-social-links'>
        <a href='https://www.twitter.com/in/@rapyunzet' class='twitter'><i class='bi bi-twitter'></i></a>
        <a href='https://instagram.com/andimrbel?igshid=MjEwN2IyYWYwYw==' class='instagram'><i class='bi bi-instagram'></i></a>
        <a href='https://www.linkedin.com/in/andi-mira-detavia-0b9a30236' class='linkedin'><i class='bi bi-linkedin'></i></i></a>
      </div>
    </div>
  </header>

      <!-- ======= DATA ======= -->
      <div class='section-title'>
          <h2>Register</h2>
          <p class='fst-italic'></p>
          <div class='container' data-aos='fade-up'>
          <form action="../create_user.php" method="post">
            <input name="nim" class="form-control form-control-lg" type="number" placeholder="Student ID" aria-label=".form-control-lg example"><br>
            <input name="username" class="form-control form-control-lg" type="text" placeholder="Username" aria-label=".form-control-lg example"><br>
            <input name="email" class="form-control form-control-lg" type="email" placeholder="Email" aria-label=".form-control-lg example"><br>
            <input name="password" class="form-control form-control-lg" type="password" placeholder="Password" aria-label=".form-control-lg example"><br>
            <div class="col-auto">
                <button type="submit" name="register" value="Register" class="btn btn-primary mb-3">Register <a href='register.php'></button> 
          </div>
        </section>

  <!-- ======= Header ======= -->
  <header id='header' class='fixed-top'>
    <div class='container-fluid d-flex justify-content-between align-items-center'>
      <h1 class='logo me-auto me-lg-0'><a >DATA MAHASISWA</a></h1>
      <div class='header-social-links'>
        <a href='https://www.twitter.com/in/@rapyunzet' class='twitter'><i class='bi bi-twitter'></i></a>
        <a href='https://instagram.com/andimrbel?igshid=MjEwN2IyYWYwYw==' class='instagram'><i class='bi bi-instagram'></i></a>
        <a href='https://www.linkedin.com/in/andi-mira-detavia-0b9a30236' class='linkedin'><i class='bi bi-linkedin'></i></i></a>
      </div>
    </div>
  </header>

<!-- ======= Footer ======= -->
  <footer id='footer'>
       Designed By <strong><span>Mira</span></strong>
  </footer>
  <!-- End  Footer -->

  <div id='preloader'></div>
  <a href='#' class='back-to-top d-flex align-items-center justify-content-center'><i class='bi bi-arrow-up-short'></i></a>

  <!-- Vendor JS Files -->
  <script src='assets/vendor/aos/aos.js'></script>
  <script src='assets/vendor/glightbox/js/glightbox.min.js'></script>
  <script src='assets/vendor/swiper/swiper-bundle.min.js'></script>

  <!-- Template Main JS File -->
  <script src='assets/js/main.js'></script>

</body>

</html>