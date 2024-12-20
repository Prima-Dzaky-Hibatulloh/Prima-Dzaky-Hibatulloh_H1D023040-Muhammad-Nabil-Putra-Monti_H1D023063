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
                <h3>Kenapa sih Kita harus Rutin Jogging??</h3>
            </div>
            <div class="detail">
                <h4>Jogging adalah olahraga yang populer dan mendatangkan banyak khasiat bagi tubuh. Ketahui beragam manfaat jogging setiap hari di sini. Jogging merupakan olahraga aerobik di antara jalan santai dan lari, dengan kecepatan di bawah 14 km per jam. </h4>
                <img src="https://img-cdn.medkomtek.com/tfzBtIPVNd1xHnwbQ2Z6a9LQX8U=/730x411/smart/filters:quality(100):format(webp)/article/JY-nhmHkvx-jstzvQOXBH/original/032851500_1604386728-Beragam-Manfaat-di-Balik-Jogging-Setiap-Hari-shutterstock_1097238488.jpg?w=128&q=100" alt="">
                <p>Jogging merupakan variasi pada lari. Pengertian lari jogging adalah satu bentuk berlari yang dilakukan dengan kecepatan lambat atau santai. Tak heran jika lari pelan sering disebut dengan jogging. Tujuan utama jogging adalah meningkatkan kebugaran tubuh dengan lebih sedikit tekanan pada tubuh. Mengutip laman Runners World, jogging adalah olahraga paling sederhana yang bisa memperkuat tulang dan otot, menjaga berat badan, memperkuat jantung, dan meningkatkan stamina. Selain menjaga kebugaran tubuh dalam hal ini kesehatan fisik, lari jogging yang dilakukan secara konsisten kurang lebih 15 sampai dengan 30 menit merupakan jenis latihan lari untuk meningkatkan kesehatan mental dan emosional.</p> <br><br>
                
                <div class="guna-joging">
                <h5>Berikut adalah manfaat dari jogging atau lari secara rutin</h5><br><br>
                    <ul>
                        <li>
                            <h6>Membantu menurunkan dan menjaga berat badan yang sehat</h6>
                            <p>Jogging bagus untuk membantu awal penurunan berat badan karena aktivitas olahraga ini melibatkan begitu banyak otot secara bersamaan sehingga membakar lebih banyak kalori. Selain itu, jogging bisa mengurangi risiko penyakit-penyakit yang disebabkan oleh obesitas, seperti hipertensi, diabetes, jantung, dan lain sebagainya.</p>
                        </li> <br>
                        <li>
                            <h6>Memperkuat Sistem Imunitas</h6>
                            <p>Berikutnya, kebaikan dari jogging setiap hari adalah menguatkan respons tubuh terhadap penyakit. Kamu pun akan terhindar dari berbagai gangguan kesehatan.  

                                Selain itu, aktivitas ini merangsang sirkulasi makrofag sehingga dapat menghalau infeksi, baik itu infeksi bakteri maupun infeksi virus. Karena itu, jogging secara konsisten akan membuat tubuhmu lebih bugar dan tidak mudah sakit. </p>
                        </li> <br>
                        <li>
                            <h6>Meningkatkan kekuatan tulang dan mengembangkan otot</h6>
                            <p>Jogging membantu memperkuat tulang dan mencegah trauma dan cedera tulang. Jogging juga dapat meningkatkan ketebalan tulang dan menangkal masalah seperti osteoporosis, osteoartritis dan rheumatoid arthritis. Jogging juga bagus untuk paha belakang, betis, otot gluteal dan lain sebagainya.</p>
                        </li> <br>
                        <li>
                            <h6>Baik untuk Jantung</h6>
                            <p>Olahraga jogging bermanfaat untuk meningkatkan kesehatan jantung, termasuk mencegah penyakit jantung. 

                                Karena saat kamu jogging, jantung benar-benar terpompa. Hal ini membantu memperkuat jantung dan pembuluh darah, serta meningkatkan aliran oksigen ke seluruh tubuh.
                                
                                Sebuah studi pada tahun 2014 menemukan bahwa pelari 45 persen lebih kecil kemungkinannya meninggal karena serangan jantung daripada non-pelari.</p>
                        </li> <br>
                        <li>
                            <h6>Meningkatkan Kesehatan Paru-Paru</h6>
                            <p>Tidak hanya bagus untuk jantung, olahraga jogging juga memiliki manfaat bagi organ paru-paru. 

                                Dengan melakukan jogging, paru-paru akan bekerja lebih keras untuk memasok oksigen tambahan yang dibutuhkan otot kamu. Alhasil, hal tersebut membantu paru-paru kamu menjadi lebih kuat.
                                
                                Dibandingkan dengan seseorang yang jarang berolahraga, mereka yang rajin olahraga biasanya memiliki kemampuan yang lebih baik untuk mengekstrak oksigen dari paru-paru dan darah.</p>
                        </li> <br>
                        <li>
                            <h6>Menurunkan Resistensi Insulin</h6>
                            <p>Resistensi insulin terjadi ketika sel-sel tubuh kamu tidak memberi respons terhadap insulin, yaitu hormon yang mengontrol kadar glukosa.

                                Para peneliti menemukan bahwa jogging secara teratur dapat membantu menurunkan resistensi insulin.
                                
                                Laporan yang sama mencatat, penurunan lemak tubuh mungkin menjadi pemicu dari turunnya resistensi insulin.</p>
                        </li> <br>
                        <li>
                            <h6>Membuat Tulang Belakang Fleksibel Seiring Bertambah Usia</h6>
                            <p>Di antara tulang belakang, terdapat bantalan pelindung yang dinamakan diskus. Bagian ini dapat menjadi susut ketika kita bertambah umur.

                                Kebiasaan duduk terlalu lama akan meningkatkan tekanan pada diskus seiring waktu. Sebaliknya, rutin bergerak atau beraktivitas fisik akan membuat diskus tersebut tetap fleksibel.  
                                
                                Sebuah studi menemukan bahwa seorang pelari memiliki hidrasi diskus yang cenderung lebih baik. </p>
                        </li> <br>
                        <li>
                            <h6>Membantu Mengatasi Depresi</h6>
                            <p>Olahraga telah lama diketahui dapat membantu mengatasi gejala depresi. Sebuah studi tahun 2018 meneliti kadar kortisol pada orang yang mencari pengobatan untuk depresi. 

                                Setelah dua belas minggu berolahraga, mereka mengalami penurunan kadar kortisol sepanjang hari. Kortisol merupakan hormon yang dilepaskan tubuh sebagai respons terhadap stres. 
                                
                                Orang yang tengah mengalami depresi dianjurkan untuk melakukan olahraga yang disukai. Jogging dapat menjadi salah satu pilihan. </p>
                        </li> <br>
                        <li>
                            <h6>Anti-Penuaan</h6>
                            <p>Olahraga jogging bermanfaat bagi kecantikan kulit, lho! Dengan jogging secara rutin, maka akan membuat kulit tampak lebih segar dan awet muda. Hal ini dikarenakan kulit mendapat lebih banyak oksigen dan pasokan darah.

                                Agar manfaat ini lebih terasa, jangan lupa untuk menggunakan tabir surya saat kamu jogging di luar. Tabir surya akan melindungi kulitmu dari efek buruk sinar matahari. </p>
                        </li> <br>
                        <li>
                            <h6>Memperpanjang Umur</h6>
                            <p>Gaya hidup sedenter dapat meningkatkan risiko kematian dini. Dengan jogging secara teratur, maka dapat membantu kamu lebih panjang umur.  

                                Hasil penelitian menunjukkan bahwa jogging secara teratur meningkatkan harapan hidup pria sebesar 6,2 tahun, dan wanita sebesar 5,6 tahun.</p>
                        </li> <br>
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