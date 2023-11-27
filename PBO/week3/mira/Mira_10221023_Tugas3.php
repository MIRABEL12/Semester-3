<?php 
$data = include'Mira_10221023_Data.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Mira's CV</title>

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
      <h1 class='logo me-auto me-lg-0'><a >Mira's Curriculum Vitae</a></h1>
      <div class='header-social-links'>
        <a href='https://www.twitter.com/in/@rapyunzet' class='twitter'><i class='bi bi-twitter'></i></a>
        <a href='https://instagram.com/andimrbel?igshid=MjEwN2IyYWYwYw==' class='instagram'><i class='bi bi-instagram'></i></a>
        <a href='https://www.linkedin.com/in/andi-mira-detavia-0b9a30236' class='linkedin'><i class='bi bi-linkedin'></i></i></a>
      </div>
    </div>
  </header>

    <!-- ======= About Section ======= -->
    <section id='about' class='about'>
      <div class='container' data-aos='fade-up'>

        <div class='section-title'>
          <h2>About Mira</h2>
          <p class='fst-italic'>
            <?php echo $data['tentang']?>
          </p>
        </div>
        <div class='row'>
          <div class='col-lg-4'>
            <img src='assets/img/Mira foto.jpg' class='img-fluid' alt=''>
          </div>
          <div class='col-lg-8 pt-4 pt-lg-0 content'>
            <h3>Biodata Diri</h3>
              <div class='col-lg-6'>
                <ul>
                  <li><i class='Times Newt'></i> <strong>Nama :</strong> <?php echo $data['nama']?></li>
                  <li><i class='bi bi-rounded-right'></i> <strong>Tempat, Tanggal Lahir :</strong><?php echo $data['ttl']?></li>
                  <li><i class='bi bi-rounded-right'></i> <strong>Jenis Kelamin :</strong> <?php echo $data['kelamin']?></li>
                  <li><i class='bi bi-rounded-right'></i> <strong>Agama :</strong><?php echo $data['agama']?></li>
                  <li><i class='bi bi-rounded-right'></i> <strong>Zodiak :</strong><?php echo $data['zodiak']?></li>                  
                  <li><i class='bi bi-rounded-right'></i> <strong>Golongan Darah :</strong> <?php echo $data['gd']?></li>
                  <li><i class='bi bi-rounded-right'></i> <strong>Alamat :</strong><?php echo $data['alamat']?></li>
                  <li><i class='bi bi-rounded-right'></i> <strong>Phone :</strong><?php echo $data['phone']?></li>
                  <li><i class='bi bi-rounded-right'></i> <strong>Email Pribadi :</strong> <?php echo $data['email']?></li>
                  <li><i class='bi bi-rounded-right'></i> <strong>Kesukaan :</strong><?php echo $data['suka']?></li>
                  <li><i class='bi bi-rounded-right'></i> <strong>Warna Kesukaan :</strong><?php echo $data['warna']?></li>
                </ul>
                <p class='fst-italic'><?php echo $data['kata']?></p>
              </div>
      </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Pendidikan Section ======= -->
        <section id='Pendidikan' class='Pendidikan'>
          <div class='container' data-aos='fade-up'>
    
            <div class='section-title'>
              <h2>Pendidikan</h2>
            </div>
                <div class='Pendidikan-item'>
                  <h5><?php echo $data['sd']?></h5>
                  <h6><?php echo $data['tsd']?></h6>
                </div>
                <div class='Pendidikan-item'>
                  <h5><?php echo $data['smp']?></h5>
                  <h6><?php echo $data['tsmp']?></h6>
                </div>
                <div class='Pendidikan-item'>
                  <h5><?php echo $data['sma']?></h5>
                  <h6><?php echo $data['tsma']?></h6>
                </div>
                <div class='Pendidikan-item'>
                  <h5><?php echo $data['kuliah']?></h5>
                  <h6><?php echo $data['tkuliah']?></h6>
                </div>
          </div>
        </section>
    <!-- Pendidikan Section --> 

<!-- ======= Hobi/Kemampuan lainnya Section ======= -->
<section id='Hobi/Kemampuan lainnya' class='Pendidikan'>
  <div class='container' data-aos='fade-up'>

    <div class='section-title'>
      <h2>Hobi/Kemampuan lainnya</h2>
    </div>
    <div class='row'>
      <div class='col-lg-6'>
        <h3 class='resume-title'>Hobi :</h3>
          <ul>
            <li>Membaca Quora</li>
            <li>Menggambar 2D</li>
            <li>Berfoto</li> 
            <li>Vlogging</li> 
            <li>Mendesign</li> 
            <li>mendengarkan Music</li> 
            <li>Menonton Film/Series</li>
          </ul>
    </div>
    <div class='row'>
      <div class='col-lg-6'>
        <h3 class='resume-title'>Kemampuan dalam bidang teknologi :</h3>
          <ul>
            <li>Menggambar yang berbentuk 2D</li>
            <li>Mampu mengoperasikan Canva Design (Presentation, Video) atau Platform Design lainnya</li>
            <li>Menguasai Google Work Space (Google Forms, Google Calendar, Docs, Sheets)</li>
            <li>Menguasai Microsoft Office (Word, Power Point)</li> 
          </ul>
      </div>
      <div class='row'>
        <div class='col-lg-6'>
          <h3 class='resume-title'>Kemampuan Bahasa :</h3>
            <ul>
              <li>Indonesia - Aktif</li>
              <li>Inggris - Pasif</li>
            </ul>
        </div>
    </section>
<!-- Hobi/Kemampuan lainnya Section -->                

<!-- ======= Pengalaman Section ======= -->
<section id='Pengalaman' class='Pendidikan'>
  <div class='container' data-aos='fade-up'>

    <div class='section-title'>
      <h2>Pengalaman</h2>
    </div>

    <div class='row'>
      <div class='col-lg-6'>
          <ul>
            <li>Peserta LKMW TD VI Institut Teknologi Kalimantan 2022</li>
            <li>Peserta LKMM PRA-TD VIII Institut Teknologi Kalimantan 2022</li>
            <li>Staf Divisi Dekor ITK EXPO Dies Natalis Sistem Informasi 2022</li>
            <li>Volunteer SPIRIT ITK 2023 Kota Balikpapan</li>
            <li>Staf Divisi Edukasi VPAJ Balikpapan</li>
            <li>Staf Divisi Public Relation Pekan Olahraga Sistem Informasi (PORSI) 2022</li>
            <li>Staf Divisi Public Relation Festival Seni Mahasiswa Sistem Informasi (FENMASI) 2022</li>
          </ul>
      </div>
    </section>
<!-- End Pengalaman Section -->  

  <!-- ======= Header ======= -->
  <header id='header' class='fixed-top'>
    <div class='container-fluid d-flex justify-content-between align-items-center'>
      <h1 class='logo me-auto me-lg-0'><a >Mira's Curriculum Vitae</a></h1>
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
  <script src='assets/js/main.js'></script>";
  ?>

</body>

</html>