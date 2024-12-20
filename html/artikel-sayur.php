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
    <link rel="stylesheet" href="../css/artikel.css">
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
            <div class="judul">
                <h3>Kenapa sih Kita Harus Membiasakan Makan Sayur</h3>
            </div>
            <div class="detail">
                <h4>Konsumsi sayur setiap hari dengan porsi cukup, begitu penting bagi kesehatan tubuh. Bukan hanya nutrisi yang terkandung pada sayur, manfaat makan sayur dapat mencegah berbagai virus dan penyakit seperti kanker, diabetes, dan jantung.</h4>
                <img src="https://th.bing.com/th/id/OIP.HfM3wCF8m6bxbY-5HNdooAHaD4?w=320&h=180&c=7&r=0&o=5&pid=1.7" alt="">
                <p>Setiap orang disarankan untuk mengonsumsi sayuran setiap hari untuk mendapatkan manfaat kesehatan yang signifikan. Sayuran memiliki banyak nutrisi yang penting untuk tubuh kita, seperti vitamin, mineral, dan serat. Berbagai jenis sayuran juga dapat membantu mencegah berbagai penyakit dan kondisi kesehatan. Ini adalah beberapa alasan mengapa setiap orang disarankan untuk mengonsumsi sayuran setiap hari.</p><br><br>
            
                <h6 style="font-size: 25px;">Siapa di sini yang susah makan sayur dan buah? Rugi banget, lho! Kamu harus tahu mengapa konsumsi sayur dan buah itu wajib bagi tubuhmu. Simak, yuk, supaya kamu jadi rajin konsumsi sayur dan buah! </h6><br>
                <div class="makan-sayur">
                    <ul>
                        <li>
                            <h6>Meningkatkan performa otak</h6>
                            <p>Sebagian besar buah yang sudah maupun belum Anda kenal kaya akan gizi dan nutrisi yang sangat dibutuhkan tubuh. Dari sekian benefit yang akan Anda dapatkan, meningkatkan daya ingat sekaligus memproteksi sel-sel otak adalah salah dua poin yang diberikan sayur dan buah.

                                Antioksidan berperan dalam memerangi radikal bebas, karena mampu memperlambat hingga mencegah oksifasi molekul lain. Bahkan ada pula buah yang dapat melindungi Anda dari penyakit Alzheimer. Beberapa buah yang patut Anda konsumsi mencakup jeruk, apel, jambu biji, alpukat, pepaya, dan mangga.</p>
                        </li><br>
                        <li>
                            <h6>Mengurangi risiko penyakit kanker</h6>
                            <p>Kanker termasuk penyakit kronis yang saat ini masih belum ditemukan obatnya. Walau sukar untuk disembuhkan, gangguan akibat pertumbuhan abnormal sel-sel jaringan tubuh ini dapat Anda cegah sedini mungkin dengan mengonsumsi beberapa jenis buah berwarna merah dan ungu.

                                Manfaat buah dan sayur dari stroberi dan tomat di antaranya adalah menyuplai senyawa seperti lycopene dan anthocyanins yang mampu mencegah perkembangan kanker berkat kandungan anti-kanker secara alami. Konsumsi secara teratur supaya tubuh Anda sigap dalam mengatasi pertumbuhan sel jaringan abnormal.</p>
                        </li><br>
                        <li>
                            <h6>Sumber utama antioksidan</h6>
                            <p>Seperti yang telah disebutkan, sejumlah buah dan sayur kaya akan antioksidan—molekul yang mampu memperlambat hingga mencegah oksidasi molekul lain. Oksidasi sangat berbahaya karena memicu munculnya radikal bebas yang berpotensi merusak sel. Karena tubuh manusia tidak dapat memproduksi vitamin sendiri, maka

                                Anda disarankan untuk mengonsumsi sayur dan buah secara teratur supaya bisa memperoleh takaran antioksidan yang mencukupi. Buah-buah yang kaya akan vitamin A, vitamin C, dan vitamin E sangat direkomendasikan untuk menjaga kesehatan Anda.</p>
                        </li><br>
                        <li>
                            <h6>Menjaga Kesehatan Jantung</h6>
                            <p>Sayuran kaya akan serat, vitamin, dan antioksidan yang sangat bermanfaat untuk kesehatan jantung. Serat yang terkandung dalam sayuran membantu menurunkan kadar kolesterol jahat (LDL) dalam darah, yang merupakan faktor utama penyebab penyakit jantung. Selain itu, beberapa jenis sayuran seperti bayam, brokoli, dan tomat mengandung senyawa seperti flavonoid yang dapat membantu memperbaiki fungsi pembuluh darah dan mengurangi peradangan, sehingga membantu menjaga tekanan darah tetap stabil. Mengonsumsi sayuran hijau juga telah terbukti dapat mengurangi risiko stroke dan serangan jantung, karena mengurangi penumpukan plak di arteri.</p>
                        </li><br>
                        <li>
                            <h6>Meningkatkan Sistem Pencernaan</h6>
                            <p>Sayuran sangat tinggi kandungan seratnya, yang memiliki peran penting dalam menjaga kelancaran sistem pencernaan. Serat membantu memperlancar pergerakan usus dan mencegah sembelit, sehingga pencernaan tetap sehat dan teratur. Selain itu, serat juga berfungsi sebagai makanan bagi bakteri baik dalam usus, yang mendukung keseimbangan mikrobiota usus dan meningkatkan kesehatan pencernaan secara keseluruhan. Dengan mengonsumsi berbagai jenis sayuran seperti wortel, kubis, dan kacang-kacangan, Anda dapat memastikan bahwa saluran pencernaan tetap berfungsi optimal.</p>
                        </li><br>
                        <li>
                            <h6>Menurunkan Risiko Penyakit Kronis</h6>
                            <p>Konsumsi sayuran yang kaya akan antioksidan, seperti vitamin C dan E, dapat membantu melawan radikal bebas yang merusak sel-sel tubuh dan berkontribusi pada perkembangan berbagai penyakit kronis, termasuk kanker. Antioksidan dalam sayuran membantu memperlambat proses penuaan sel, mengurangi peradangan, dan meningkatkan pertahanan tubuh terhadap infeksi. Selain itu, sayuran mengandung fitonutrien yang dapat melawan perkembangan sel-sel kanker dan mengurangi risiko kanker usus besar, payudara, dan paru-paru. Mengonsumsi sayuran hijau seperti kale, bayam, dan brokoli, serta sayuran berwarna cerah seperti paprika merah dan wortel, dapat membantu melindungi tubuh dari penyakit-penyakit kronis tersebut.</p>
                        </li><br>
                        <li>
                            <h6>Mendukung Sistem Imun Tubuh</h6>
                            <p>Sayuran mengandung berbagai vitamin dan mineral penting yang mendukung sistem kekebalan tubuh, seperti vitamin C, vitamin A, dan folat. Vitamin C yang terdapat dalam sayuran seperti brokoli, kubis, dan paprika merah sangat bermanfaat untuk meningkatkan produksi sel-sel imun, seperti sel darah putih, yang melawan infeksi. Vitamin A yang terdapat dalam wortel, bayam, dan ubi jalar membantu menjaga integritas lapisan pelindung tubuh, seperti kulit dan saluran pernapasan, sehingga tubuh lebih tahan terhadap infeksi. Folat juga berperan dalam pembentukan sel-sel darah merah dan mendukung sistem kekebalan tubuh agar tetap berfungsi dengan baik.</p>
                        </li><br>
                        <li>
                            <h6>Menjaga Berat Badan Ideal</h6>
                            <p>Sayuran rendah kalori dan tinggi serat, yang membuatnya sangat ideal untuk menjaga berat badan tetap sehat. Serat yang terkandung dalam sayuran dapat memperlambat proses pencernaan dan memberikan rasa kenyang lebih lama, sehingga membantu mengontrol nafsu makan. Mengonsumsi lebih banyak sayur dapat mengurangi keinginan untuk makan camilan tidak sehat atau makanan tinggi kalori, yang sering menyebabkan penambahan berat badan. Karena sayuran juga mengandung sedikit lemak, mereka adalah pilihan yang sangat baik untuk diet penurunan berat badan yang sehat. Dengan memasukkan sayuran dalam setiap makanan, Anda dapat menghindari makan berlebihan dan menjaga kalori tetap terkendali.</p>
                        </li><br>
                        <li>
                            <h6>Menjaga Kesehatan Kulit</h6>
                            <p>Sayuran kaya akan vitamin dan mineral yang dapat membantu menjaga kesehatan kulit. Misalnya, sayuran berwarna oranye seperti wortel dan ubi jalar mengandung beta-karoten, yang tubuh ubah menjadi vitamin A, yang penting untuk regenerasi kulit. Vitamin A ini membantu memperbaiki sel-sel kulit yang rusak, mencegah kulit kering, dan mendukung pembentukan kolagen, yang penting untuk menjaga elastisitas kulit. Selain itu, sayuran seperti brokoli dan bayam kaya akan vitamin C, yang berfungsi sebagai antioksidan untuk melawan kerusakan kulit akibat paparan sinar matahari dan polusi, serta membantu produksi kolagen yang menjaga kulit tetap kenyal dan sehat.</p>
                        </li><br>
                    </ul>
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
    
</body>
</html>