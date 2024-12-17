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
    <link rel="stylesheet" href="../css/dokter.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,
    100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,
    400;1,500;1,600;1,700;1,800;1,900&family=Signika+Negative:wght@300..700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
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
            <div class="judul">
                <h3>KONSULTASI SEKARANG JUGA!!</h3>
                <H4>Temukan dokter sesuai kebutuhan mu</H4>
            </div>
            
                        
            <div class="slide-con">
                <div class="container swiper">
                    <div class="slider-wrapper">
                        <div class="card-list swiper-wrapper">


                            <div class="card-item swiper-slide">
                                <img src="https://registrasi.unsoed.ac.id/infomhs/foto/H1D023040" alt="" class="user-image">
                                <h2 class="user-nameee">dzaky</h2>
                                <p class="user-profession">Dokter Kelamin</p>
                                <a href="https://wa.me/6287864270595">
                                    <div class="message">Message</div>
                                </a>
                            </div>
                            
                            <div class="card-item swiper-slide">
                                <img src="https://registrasi.unsoed.ac.id/infomhs/foto/H1D023062" alt="" class="user-image">
                                <h2 class="user-namee">Hammas</h2>
                                <p class="user-profession">Dokter Kandungan</p>
                                <a href="https://wa.me/6287864270595">
                                    <div class="message">Message</div>
                                </a>
                            </div>
                            
                            <div class="card-item swiper-slide">
                                <img src="https://tse3.mm.bing.net/th?id=OIP.DPAHs4t0LwTMW2dO-mcgYgHaJQ&pid=Api&P=0&h=180" alt="" class="user-image">
                                <h2 class="user-namee">James</h2>
                                <p class="user-profession">Dokter Bedah</p>
                                <a href="https://wa.me/6287864270595">
                                    <div class="message">Message</div>
                                </a>
                            </div>  
                            
                            <div class="card-item swiper-slide">
                                <img src="https://tse2.mm.bing.net/th?id=OIP.S3HI3b4dT0TEYj7E7H3hoQHaDt&pid=Api&P=0&h=180" alt="" class="user-image">
                                <h2 class="user-namee">Adeline</h2>
                                <p class="user-profession">Dokter Kulit</p>
                                <a href="https://wa.me/6287864270595">
                                    <div class="message">Message</div>
                                </a>
                            </div>
                            
                            <div class="card-item swiper-slide">
                                <img src="https://tse3.mm.bing.net/th?id=OIP.MLHnGOl2b7jSQltJgXzRuAHaEc&pid=Api&P=0&h=180" alt="" class="user-image">
                                <h2 class="user-namee">Edy</h2>
                                <p class="user-profession">Dokter Saraf</p>
                                <a href="https://wa.me/6287864270595">
                                    <div class="message">Message</div>
                                </a>
                            </div>
                            
                            <div class="card-item swiper-slide">
                                <img src="https://tse4.mm.bing.net/th?id=OIP.cpy5bUgXnDLX01WrDb1WWwHaE8&pid=Api&P=0&h=180" alt="" class="user-image">
                                <h2 class="user-namee">Jesicha</h2>
                                <p class="user-profession">Dokter THT</p>
                                <a href="https://wa.me/6287864270595">
                                    <div class="message">Message</div>
                                </a>
                            </div>
                            
                            <div class="card-item swiper-slide">
                                <img src="https://s.kaskus.id/images/2018/07/08/9641104_20180708102041.jpg" alt="" class="user-image">
                                <h2 class="user-namee">Nisa</h2>
                                <p class="user-profession">Dokter Urologi</p>
                                <a href="https://wa.me/6287864270595">
                                    <div class="message">Message</div>
                                </a>
                            </div>
                            
                            <div class="card-item swiper-slide">
                                <img src="https://tse3.mm.bing.net/th?id=OIP.7zgnr6N-Dryt6s-nnYDGXAHaIS&pid=Api&P=0&h=180" alt="" class="user-image">
                                <h2 class="user-namee">Siti</h2>
                                <p class="user-profession">Dokter Penyakit dalam</p>
                                <a href="https://wa.me/6287864270595">
                                    <div class="message">Message</div>
                                </a>
                            </div>
                            
                            <div class="card-item swiper-slide">
                                <img src="https://tse1.mm.bing.net/th?id=OIP.cIi_-VsZg1zTM_bV0ivD-QHaFj&pid=Api&P=0&h=180" alt="" class="user-image">
                                <h2 class="user-namee">Rudy</h2>
                                <p class="user-profession">Dokter Patolgi</p>
                                <a href="https://wa.me/6287864270595">
                                    <div class="message">Message</div>
                                </a>
                            </div>
                            
                            <div class="card-item swiper-slide">
                                <img src="https://tse1.mm.bing.net/th?id=OIP.wdRFEnUS8juxs0_wVnPdMAAAAA&pid=Api&P=0&h=180" alt="" class="user-image">
                                <h2 class="user-namee">Alice</h2>
                                <p class="user-profession">Dokter anak</p>
                                <a href="https://wa.me/6287864270595">
                                    <div class="message">Message</div>
                                </a>
                            </div>

                         </div>
                        <div class="swiper-pagination"></div>
                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
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

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


<script>
   
   const swiper = new Swiper('.slider-wrapper', {
  loop: true,
  grabCursor: true,
  centeredSlides: true,
  spaceBetween: 20, 
  slidesPerView: 'auto',
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
    dynamicBullets: true,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    620: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});

</script>

</body>
</html>