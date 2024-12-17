<?php
    session_start(); 
    require 'function.php';
    
    if (!isset($_SESSION['login'])) {
        header("Location: login.php");
        exit;
    }
    $username = $_SESSION['username'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/about.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,
    100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,
    400;1,500;1,600;1,700;1,800;1,900&family=Signika+Negative:wght@300..700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Signika+Negative:wght@300..700&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="header">
      <div class="navbar">
        <div class="navbar-left">
          <a href="index.php">
            <img src="../image/halodoc-logo.webp" alt="logo web" />
          </a>
        </div>

        <div class="navbar-right">
          <a href="index.php">
            <div class="navbar-button">
              <h3>home</h3>
            </div>
          </a>
          <a href="artikel.php">
            <div class="navbar-button">
              <h3>Artikel</h3>
            </div>
          </a>
          <a href="dokter.php">
            <div class="navbar-button">
              <h3>Doctor</h3>
            </div>
          </a>
          <a href="about.php">
            <div class="navbar-button">
              <h3>About</h3>
            </div>
          </a>
        
        <?php if (isset($_SESSION["login"]) && $_SESSION["login"]): ?>

          <div class="user-name">
            <h3>haiii, <?= $username?> !!</h3>
            <div class="dropdown-menu">
                <a href="logout.php">
                    <div class="btn-profile">
                        <h3>LOGOUT</h3>
                    </div>
                </a>
            </div>
          </div>

        <?php else: ?>
          
          <a href="login.php">
            <div class="login">
              <i data-feather="user"></i>&nbsp;
              <h3>Masuk</h3>
            </div>
          </a>
        <?php endif; ?>

        </div>
        <div class="hum-menu">
            <i data-feather="menu"></i>
        </div>
      </div>
    </nav>

    <div class="container">
        <div class="main">

            <div class="top">
                <h3>OUR TEAM</h3>
                <div class="card-con">
                    <div class="card">
                        <img src="../image/zaky.jpg" alt="">
                        <h3>Prima Dzaky Hibatulloh</h3>
                        <h4>H1D023040</h4>
                    </div>
                    <div class="card">
                        <img src="../image/nabil.jpg" alt="">
                        <h3>Muhammad Nabil Putra Monti</h3>
                        <h4>H1D023063</h4>
                    </div>
                </div>
            </div>
            
            <div class="bottom">
                <h3>OUR LOCATION</h3>
                <div class="maps">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d769.9525043108621!2d106.82378260178098!3d-6.170095975944037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f51beef3a83d%3A0xf33dc651dadbb47d!2sIstana%20Merdeka!5e0!3m2!1sid!2sid!4v1605115461925!5m2!1sid!2sid"
                        width="100%" 
                        height="450" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
                
            </div>
        </div>
    </div>

    


    <footer class="footer">
      <div class="footer-container">
        <div class="footer-section about">
          <h3>Tentang Kami</h3>
          <p>
            DokterQ hadir untuk memberikan solusi kesehatan terbaik dengan
            layanan lengkap seperti artikel kesehatan, konsultasi dokter, hingga
            kalkulator BMI. Kami berkomitmen untuk menjaga kesehatan Anda.
          </p>
        </div>
        <div class="footer-section links">
          <h3>Link Cepat</h3>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">Tentang</a></li>
            <li><a href="artikel.php">Artikel</a></li>
            <li><a href="dokter.php">Dokter</a></li>
            <li><a href="bmi.php">BMI</a></li>
          </ul>
        </div>
        <div class="footer-section contact">
          <h3>Hubungi Kami</h3>
          <p>Email: support@dokterq.com</p>
          <p>Telepon: +62 812-3456-7890</p>
          <p>Alamat: Jl. Sehat Bersama No. 10, Jakarta</p>
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; 2024 DokterQ. All rights reserved.</p>
      </div>
    </footer>
    


    <script>
        function initMap() {
            // Tentukan lokasi peta (latitude dan longitude)
            var lokasi = {lat: -6.2088, lng: 106.8456}; // Contoh: Jakarta

            // Membuat peta di elemen dengan ID 'map'
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15,
                center: lokasi
            });

            // Tambahkan marker di lokasi yang ditentukan
            var marker = new google.maps.Marker({
                position: lokasi,
                map: map
            });
        }
    </script>

    <!-- Memanggil Google Maps API dengan API Key Anda -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script>
</body>
</html>