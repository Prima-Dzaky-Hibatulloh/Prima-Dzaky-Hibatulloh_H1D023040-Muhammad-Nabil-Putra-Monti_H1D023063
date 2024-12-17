<?php

session_start(); 
require 'function.php';

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

$username = $_SESSION['username'];

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email']; 
    $ulasan = $_POST['ulasan'];
    $rating = $_POST['rating'];

    $sql = "INSERT INTO ulasan (nama, email, ulasan, rating) VALUES (?, ?, ?, ?)";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $nama, $email, $ulasan, $rating);

    if ($stmt->execute()) {
        echo "Ulasan berhasil dikirim! Terima kasih atas ulasan Anda.";
    } else {
        echo "Gagal mengirim ulasan: " . $conn->error;
    }

}

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../css/home.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,
    100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,
    400;1,500;1,600;1,700;1,800;1,900&family=Signika+Negative:wght@300..700&display=swap" rel="stylesheet"/>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Kanit&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Signika+Negative:wght@300..700&display=swap"
      rel="stylesheet"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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
      <div class="salam">
        <img src="../image/hero.jpg" alt="" />
      </div>

      <div class="main">
        <div class="konsul-con">
          <h3>Sehat bersama DokterQ</h3>
          <a href="dokter.php">
            <img src="../image/konsul.jpg" alt="" />
          </a>
        </div>

        <div class="baris">
          <h3 class="soms">Edukasi kesehatan terlengkap se galaxy</h3>
          <p>
            Chat dokter, kunjungi rumah sakit, beli obat, cek lab dan update
            informasi seputar kesehatan, semua bisa di DokterQ
          </p>

          <div class="fitur-con">
            <div class="fitur-container">

              <div class="fiturHidden a1">
                <a href="artikel.php">
                  <div class="fitur" data-aos="fade-up" data-aos-duration="1000">
                    <img src="../image/chat-dokter.webp" alt="" />
                    <p>Artikel Kesehatan</p>
                  </div>
                </a>
              </div>

              <div class="fiturHidden a2">
                <a href="https://www.halodoc.com/indexlab/packages">
                  <div class="fitur" data-aos="fade-up" data-aos-duration="1000">
                    <img src="../image/indexlab.webp" alt="" />
                    <p>index Lab & Vaksinasi</p>
                  </div>
                </a>
              </div>

              <div class="fiturHidden a3">
                <a href="https://www.halodoc.com/obat-dan-vitamin">
                  <div class="fitur" data-aos="fade-up" data-aos-duration="1000">
                    <img src="../image/toko_kes.webp" alt="" />
                    <p>Toko Kesehatan</p>
                  </div>
                </a>
              </div>

              <div class="fiturHidden a4">
                <a href="dokter.php">
                  <div class="fitur" data-aos="fade-up" data-aos-duration="1000">
                    <img src="../image/chat-dokter.webp" alt="" />
                    <p>Buat Janji Dokter</p>
                  </div>
                </a>
              </div>

              <div class="fiturHidden a5">
                <a href="bmi.php">
                  <div class="fitur" data-aos="fade-up" data-aos-duration="1000">
                    <img src="../image/bmi.webp" alt="" />
                    <p>Kalkulator BMI</p>
                  </div>
                </a>
              </div>

              <div class="fiturHidden a6">
                <a href="https://www.halodoc.com/artikel/kalender-kehamilan-di-aplikasi-halodoc">
                  <div class="fitur" data-aos="fade-up" data-aos-duration="1000">
                    <img src="../image/kalender-kehamilan.webp" alt="" />
                    <p>kalender-kehamilan</p>
                  </div>
                </a>
              </div>

            </div>
            <div class="fitur-buttons">
              <div id="chevronLeft" class="chevronLeft">
                <i data-feather="chevron-left"></i>
              </div>
              <div id="chevronRight" class="chevronRight">
                <i data-feather="chevron-right"></i>
              </div>
            </div>
          </div>
        </div>

        <div class="baris">
          <div class="artikel-judul">
            <h4>100 Artikel Kesehatan</h4>
            <a href="artikel.php"><p>lihat semua</p></a>
          </div>

          <div class="artikel-grid">
            <a href="artikel-demam.php">
              <div class="artikel-card" data-aos="fade-up" data-aos-duration="1000">
                <img src="../image/demam.jpeg" alt="demam" />
                <h5>kenapa kita demam?</h5>
                <p>
                  Demam adalah meningkatnya suhu tubuh hingga lebih dari 380C.
                  Kondisi ini bisa menandakan adanya penyakit atau kondisi
                  tertentu di......
                </p>
              </div>
            </a>

            <a href="artikel-minum-susu.php">
              <div class="artikel-card" data-aos="fade-up" data-aos-duration="1000">
                <img src="../image/susu.jpeg" alt="demam" />
                <h5>Biasakan minum susu!!</h5>
                <p>
                  Kamu pasti sudah tak asing dengan slogan "Empat Sehat Lima
                  Sempurna" yang sering digaungkan agar nutrisi tubuh selalu
                  ........
                </p>
              </div>
            </a>

            <a href="artikel-jogging.php">
              <div class="artikel-card" data-aos="fade-up" data-aos-duration="1000">
                <img src="../image/marathon.jpeg" alt="demam" />
                <h5>Pace lu berapa bos?</h5>
                <p>
                  Jogging adalah olahraga yang populer dan mendatangkan banyak
                  khasiat bagi tubuh. Ketahui beragam manfaat.....
                </p>
              </div>
            </a>

            <a href="artikel-sayur.php">
              <div class="artikel-card" data-aos="fade-up" data-aos-duration="1000">
                <img src="../image/sayur.jpeg" alt="demam" />
                <h5>Kok harus makan sayur?</h5>
                <p>
                  Konsumsi sayur setiap hari dengan porsi cukup, begitu penting
                  bagi kesehatan tubuh. Bukan hanya nutrisi yang terkandung
                  pada......
                </p>
              </div>
            </a>

            <a href="artikel-hidup-sehat.php">
              <div class="artikel-card" data-aos="fade-up" data-aos-duration="1000">
                <img src="../image/sehat.jpeg" alt="demam" />
                <h5>Hidup sehat masi jaman??</h5>
                <p>
                  Manusia melakukan kegiatan setiap harinya dari mulai bekerja,
                  belajar, makan, tidur, bersosial, dan juga mengisi waktu
                  senggang......
                </p>
              </div>
            </a>

            <a href="artikel-mata.php">
              <div class="artikel-card" data-aos="fade-up" data-aos-duration="1000">
                <img src="../image/rabun.jpeg" alt="demam" />
                <h5>Yang rabun makin banyak??</h5>
                <p>
                  Rabun jauh atau miopi adalah kondisi ketika mata tidak bisa
                  melihat objek yang letaknya jauh dengan jelas. Hal ini terjadi
                  ketika......
                </p>
              </div>
            </a>
          </div>
        </div>

        <div class="baris-full-abu">
          <div class="full-abu-con">
            <div class="full-abu-grid">
              <div class="full-abu-item" data-aos="zoom-in" >
                <img
                  src="../image/dokter-profesional.png"
                  alt="dokter-profesional"
                />
                <h3>Dokter Profesional</h3>
                <p>
                  Dokter terbaik siap menangani anda di segala medan dan dimensi
                </p>
              </div>

              <div class="full-abu-item" data-aos="zoom-in" data-aos-delay="100">
                <img
                  src="../image/pelayanan-terbaik.png"
                  alt="dokter-profesional"
                  class="kecil"
                />
                <h3>pelayanan terbaik</h3>
                <p>
                  Pelayanan terbaik yang pasti anda dapatkan. Anda puas kami
                  lemas
                </p>
              </div>

              <div class="full-abu-item" data-aos="zoom-in" data-aos-delay="200">
                <img
                  src="../image/artikel-terbaru.png"
                  alt="dokter-profesional"
                />
                <h3>Artikel terbaru</h3>
                <p>
                  Siap-siap fyp mu artikel semua boss. Artikel terlengkap
                  terpercaya akurat 100%
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="partnership">
          <div class="partnership-con">
            <div class="partnership-judul">
              <h3>PartnerShips</h3>
              <p>
                To provide you with choice, we partner with some of the nation’s
                top private health insurance companies.
              </p>
            </div>
            <div class="partnership-list">
              <div class="partnertship-item" data-aos="zoom-in">
                <img
                  src="https://www.gohealth.com/wp-content/uploads/2024/10/AnthemBCBS-Blue-Horizontal.svg"
                  alt=""
                />
              </div>
              <div class="partnertship-item" data-aos="zoom-in" data-aos-delay="100">
                <img
                  src="https://www.gohealth.com/wp-content/uploads/2024/10/cigna-color.svg"
                  alt=""
                />
              </div>
              <div class="partnertship-item" data-aos="zoom-in" data-aos-delay="150">
                <img
                  src="https://www.gohealth.com/wp-content/uploads/2024/10/DevotedHealth-Color.svg"
                  alt=""
                />
              </div>
              <div class="partnertship-item" data-aos="zoom-in" data-aos-delay="200">
                <img
                  src="https://www.gohealth.com/wp-content/uploads/2024/10/highmark-color.svg"
                  alt=""
                />
              </div>
              <div class="partnertship-item" data-aos="zoom-in" data-aos-delay="250">
                <img
                  src="https://www.gohealth.com/wp-content/uploads/2024/10/Humana-Green.svg"
                  alt=""
                />
              </div>
              <div class="partnertship-item" data-aos="zoom-in" data-aos-delay="300">
                <img
                  src="https://www.gohealth.com/wp-content/uploads/2024/10/KaiserPermanente-Blue.svg"
                  alt=""
                />
              </div>
              <div class="partnertship-item" data-aos="zoom-in" data-aos-delay="350">
                <img
                  src="https://www.gohealth.com/wp-content/uploads/2024/10/UHC-Blue-Horizontal.svg"
                  alt=""
                />
              </div>
              <div class="partnertship-item" data-aos="zoom-in" data-aos-delay="400">
                <img
                  src="https://www.gohealth.com/wp-content/uploads/2024/10/Wellcare-Blue.svg"
                  alt=""
                />
              </div>
              <div class="partnertship-item" data-aos="zoom-in" data-aos-delay="550">
                <img
                  src="https://www.gohealth.com/wp-content/uploads/2024/10/Zing-Logo-1024x378.png"
                  alt=""
                />
              </div>
              <div class="partnertship-item" data-aos="zoom-in" data-aos-delay="600">
                <img
                  src="https://th.bing.com/th/id/OIP.Zi_jx9GDGCnsM0GUDMpcEgHaEK?w=284&h=180&c=7&r=0&o=5&pid=1.7"
                  alt=""
                />
              </div>
            </div>
          </div>
        </div>

        <div class="baris-full">
          <div class="ulasan">
            <div class="ulasan-con">
              <div class="ulasan-left">
                <h3><u>ULASAN</u></h3>
                <h4>Berikan Ulasan Terbaik Anda</h4>
                <p>
                  DokterQ adalah platform kesehatan online yang dirancang untuk
                  mempermudah akses masyarakat ke layanan medis tanpa harus
                  datang langsung ke fasilitas kesehatan. Dengan fitur unggulan
                  berupa konsultasi dokter melalui chat atau video call, DokterQ
                  memberikan solusi praktis untuk berbagai kebutuhan kesehatan,
                  terutama bagi mereka yang memiliki keterbatasan waktu atau
                  akses ke layanan medis konvensional. Platform ini memungkinkan
                  pengguna mendapatkan pelayanan medis kapan saja dan di mana
                  saja dengan mudah. <br /><br />

                  Desain antarmuka DokterQ dibuat sederhana namun elegan,
                  sehingga ramah bagi semua pengguna. Tata letak yang intuitif
                  memudahkan pengguna menavigasi berbagai fitur, seperti mencari
                  dokter, membaca artikel kesehatan, atau mengatur jadwal
                  konsultasi. Selain itu, DokterQ juga menyajikan berbagai
                  informasi kesehatan yang terpercaya, mulai dari artikel
                  tentang gejala penyakit hingga tips menjaga gaya hidup sehat.
                  Informasi ini dirancang untuk mudah dipahami sehingga dapat
                  meningkatkan kesadaran kesehatan masyarakat.
                </p>
              </div>

              <form action="" method="POST">
                <div class="ulasan-right">
                  <h3>Write Your Review</h3>
                  <br />
                  <input
                    type="text"
                    name="nama"
                    placeholder="Masukkan Nama Anda"
                    required
                  />
                  <input
                    type="email"
                    name="email"
                    placeholder="Masukkan Gmail Anda"
                    required
                  />
                  <textarea
                    name="ulasan"
                    id="ulasan"
                    placeholder="Bagaimana Ulasan Kami?"
                    required
                  ></textarea>

                  <!-- Rating Bintang -->
                  <label for="rating">Rating:</label><br />
                  <div class="rating">
                    <input
                      type="hidden"
                      id="rating-input"
                      name="rating"
                      value="0"
                    />
                    <span data-value="5">★</span>
                    <span data-value="4">★</span>
                    <span data-value="3">★</span>
                    <span data-value="2">★</span>
                    <span data-value="1">★</span>
                  </div>

                  <button type="submit" name="submit">Make a Review</button>
                </div>
              </form>
            </div>
          </div>
        </div>

        <div class="baris">
            <div class="judul-review">
                <h3>Review User</h3>
            </div>
            <div class="review-con">
            <?php
              // Query untuk mengambil data ulasan dengan id 1, 2, dan 3
              $sql = "SELECT nama, ulasan, rating FROM ulasan WHERE id IN (1, 2, 3)";
              $result = $conn->query($sql);

              // Periksa apakah ada data yang ditemukan
              if ($result->num_rows > 0) {
                  // Loop melalui setiap baris hasil query
                  while ($row = $result->fetch_assoc()) {
                      echo '<div class="review-item" data-aos="fade-up"
     data-aos-duration="3000">';
                      echo '<h4>' . htmlspecialchars($row['nama']) . '</h4>'; // Nama reviewer
                      echo '<div class="rating">';
                      
                      // Menampilkan rating dalam bentuk bintang
                      for ($i = 1; $i <= 5; $i++) {
                          if ($i <= $row['rating']) {
                              echo '<span class="filled">★</span>'; // Bintang penuh
                          } else {
                              echo '<span class="empty">☆</span>'; // Bintang kosong
                          }
                      }
                      
                      echo '<br> </div>';
                      echo '<p>' . htmlspecialchars($row['ulasan']) . '</p>'; // Ulasan
                      echo '</div>';
                  }
              } else {
                  echo "Ulasan tidak ditemukan.";
              }
              ?>



                
            </div>
        </div>

        <br /><br /><br /><br /><br /><br />
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
      let kelas = document.querySelectorAll(".fiturHidden");
      let posisi = ["a1", "a2", "a3", "a4", "a5", "a6"];
      let kiri = document.getElementById("chevronLeft");
      let kanan = document.getElementById("chevronRight");

      kanan.addEventListener("click", function () {
        kelas[0].classList.add("geser");

        let temp = posisi.shift();
        posisi.push(temp);
        kelas[0].classList = "fiturHidden " + posisi[0];
        kelas[1].classList = "fiturHidden " + posisi[1];
        kelas[2].classList = "fiturHidden " + posisi[2];
        kelas[3].classList = "fiturHidden " + posisi[3];
        kelas[4].classList = "fiturHidden " + posisi[4];
        kelas[5].classList = "fiturHidden " + posisi[5];
        kelas[6].classList = "fiturHidden " + posisi[6];
        kelas[7].classList = "fiturHidden " + posisi[7];
      });

      kiri.addEventListener("click", function () {
        kelas[0].classList.add("geser");

        let temp = posisi.pop(); // Hapus elemen terakhir
        posisi.unshift(temp); // Tambahkan elemen ke awal

        kelas[0].classList = "fiturHidden " + posisi[0];
        kelas[1].classList = "fiturHidden " + posisi[1];
        kelas[2].classList = "fiturHidden " + posisi[2];
        kelas[3].classList = "fiturHidden " + posisi[3];
        kelas[4].classList = "fiturHidden " + posisi[4];
        kelas[5].classList = "fiturHidden " + posisi[5];
        kelas[6].classList = "fiturHidden " + posisi[6];
        kelas[7].classList = "fiturHidden " + posisi[7];
      });

      document.addEventListener("DOMContentLoaded", () => {
        const stars = document.querySelectorAll(".rating span");
        const ratingInput = document.getElementById("rating-input");

        stars.forEach((star) => {
          star.addEventListener("click", () => {
            // Reset kelas terpilih untuk semua bintang
            stars.forEach((s) => s.classList.remove("selected"));

            // Tambahkan kelas "selected" pada bintang yang diklik dan semua setelahnya
            star.classList.add("selected");
            let currentStar = star;
            while (currentStar.nextElementSibling) {
              currentStar = currentStar.nextElementSibling;
              currentStar.classList.add("selected");
            }

            // Set nilai rating pada input tersembunyi
            ratingInput.value = star.dataset.value;
          });
        });
      });
    </script>
    <script>
      feather.replace();
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script src="home.js"></script>
  </body>
</html>
