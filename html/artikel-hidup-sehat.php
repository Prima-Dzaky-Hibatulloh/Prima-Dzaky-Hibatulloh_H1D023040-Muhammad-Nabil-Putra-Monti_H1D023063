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
                <h3>Emang Pola Hidup Sehat Masi Jaman??</h3>
            </div>
            <div class="detail">
                <h4>Manusia melakukan kegiatan setiap harinya dari mulai bekerja, belajar, makan, tidur, bersosial, dan juga mengisi waktu senggang. Semua kegiatan tersebut harus diatur dalam pola hidup yang sehat. Mengapa pola hidup sehat harus dilakukan oleh manusia? Berikut alasannya........ </h4>
                <img src="https://juliedoherty.net/wp-content/uploads/2017/07/Make-your-Health-a-Priority-Lifetime-Habit.png" alt="">
                <p>Kita harus menjaga pola hidup sehat dengan cara mengkonsumsi makanan yang bergizi dan bervariasi, berolahraga secara teratur, tidur yang cukup, menghindari kebiasaan buruk seperti merokok, mengontrol stres dengan baik, dan menjaga kebersihan badan. Kita juga harus menjaga pola hidup sehat dengan menghindari kebiasaan buruk seperti makan berlebihan, mengonsumsi alkohol dan makanan ringan yang tidak sehat.
                    Selain itu, kita juga harus menjaga pola hidup sehat dengan mencari waktu untuk beristirahat dan bersantai. Ini penting untuk menjaga kesehatan mental dan emosional kita. Dengan beristirahat, kita akan dapat menenangkan diri dan melepaskan beban dari aktivitas sehari-hari.</p><br>
                <h5>Mau tau alasan harus berpola hidup sehat? Yuk simak.....</h5><br>
                <div class="hidup-sehat">
                    <ul>
                        <li>
                            <h6>Meningkatkan Kesehatan Fisik</h6>
                            <p>Pola hidup sehat adalah kunci utama untuk menjaga tubuh tetap berfungsi dengan optimal. Makan makanan bergizi yang kaya akan vitamin, mineral, dan serat membantu tubuh mendapatkan energi yang dibutuhkan serta memperkuat sistem kekebalan tubuh. Menghindari makanan olahan yang mengandung banyak lemak jenuh, gula, dan garam berlebihan juga dapat mengurangi risiko berbagai penyakit seperti hipertensi, diabetes tipe 2, dan gangguan jantung. Aktivitas fisik yang teratur seperti berolahraga membantu menjaga massa otot dan kepadatan tulang, meningkatkan peredaran darah, dan memperbaiki fungsi paru-paru, sehingga tubuh tetap sehat dan kuat.</p>
                        </li>
                        <li>
                            <h6>Meningkatkan Kesehatan Mental dan Emosional</h6>
                            <p>Pola hidup sehat tidak hanya bermanfaat bagi tubuh, tetapi juga bagi kesehatan mental dan emosional. Aktivitas fisik seperti berolahraga dapat meningkatkan produksi endorfin, hormon yang dikenal sebagai "hormon kebahagiaan," yang dapat membantu mengurangi perasaan stres, kecemasan, dan depresi. Selain itu, olahraga juga bisa menjadi waktu untuk menenangkan pikiran dan memberi kesempatan untuk fokus pada diri sendiri. Cukup tidur juga memiliki peran penting dalam menjaga kestabilan emosional. Kurang tidur dapat menyebabkan ketegangan, gangguan mood, dan bahkan depresi, sedangkan tidur yang cukup memungkinkan tubuh dan pikiran untuk pulih, meningkatkan konsentrasi, serta memperbaiki daya ingat.</p>
                        </li>
                        <li>
                            <h6>Meningkatkan Energi dan Produktivitas</h6>
                            <p>Dengan pola hidup sehat, tubuh kita memiliki energi yang cukup untuk menghadapi tantangan sehari-hari. Berolahraga secara teratur meningkatkan stamina dan memperbaiki kualitas tidur, yang akan memberi kita lebih banyak energi sepanjang hari. Pola makan yang sehat, yang mencakup konsumsi karbohidrat kompleks, protein, dan lemak sehat, memberikan energi yang lebih stabil dan tahan lama. Hal ini membantu kita untuk tetap fokus dan produktif, baik dalam bekerja, belajar, atau menjalani aktivitas lainnya. Ketika tubuh dan pikiran dalam kondisi terbaik, kita juga dapat menyelesaikan tugas-tugas dengan lebih efisien.                        </p>
                        </li>
                        <li>
                            <h6>Pencegahan Penyakit</h6>
                            <p>Pola hidup sehat adalah salah satu cara terbaik untuk mencegah berbagai penyakit serius. Mengonsumsi makanan sehat yang kaya serat, vitamin, dan mineral, serta menghindari kebiasaan buruk seperti merokok dan konsumsi alkohol berlebihan dapat menurunkan risiko terkena penyakit jantung, stroke, kanker, dan diabetes. Berolahraga juga membantu mencegah obesitas, yang merupakan faktor risiko utama untuk berbagai penyakit tersebut. Dengan menjaga berat badan yang sehat, tubuh akan lebih mampu melawan berbagai penyakit dan menjaga organ-organ vital tetap berfungsi dengan baik. Selain itu, pemeriksaan kesehatan rutin dan gaya hidup sehat dapat mendeteksi masalah kesehatan sejak dini, sehingga kita bisa mengambil tindakan lebih cepat untuk mencegahnya berkembang menjadi lebih parah.                        </p>
                        </li>
                        <li>
                            <h6>Memperpanjang Umur</h6>
                            <p>Banyak penelitian menunjukkan bahwa pola hidup sehat dapat berkontribusi pada panjang umur. Orang yang menjalani gaya hidup sehat, dengan makan makanan bergizi, rutin berolahraga, cukup tidur, dan menghindari kebiasaan buruk seperti merokok, memiliki peluang hidup lebih lama dibandingkan dengan mereka yang tidak menjaga kesehatannya. Bahkan, studi menunjukkan bahwa pola hidup sehat dapat mengurangi risiko kematian dini akibat penyakit degeneratif atau gaya hidup tidak sehat. Kunci untuk umur panjang bukan hanya menghindari penyakit, tetapi juga menjaga kualitas hidup, sehingga kita bisa menikmati kehidupan lebih lama dengan tetap sehat dan aktif.                        </p>
                        </li>
                        <li>
                            <h6>Meningkatkan Kualitas Hidup</h6>
                            <p>Kualitas hidup kita sangat dipengaruhi oleh bagaimana kita merawat tubuh dan pikiran. Pola hidup sehat memungkinkan kita untuk menjalani hari-hari dengan lebih bahagia dan bebas dari penyakit. Ketika tubuh sehat dan bugar, kita memiliki lebih banyak energi untuk beraktivitas, berkumpul dengan keluarga, mengejar hobi, atau bahkan melakukan perjalanan. Kita juga lebih mampu menangani stres dan tantangan hidup yang datang. Sebaliknya, pola hidup yang tidak sehat seringkali membawa rasa lelah, sakit, dan ketegangan yang mengurangi kualitas hidup kita. Dengan menjaga pola hidup sehat, kita dapat hidup lebih penuh dan lebih puas.                        </p>
                        </li>
                        <li>
                            <h6>Menjaga Berat Badan Ideal</h6>
                            <p>Menjaga berat badan yang sehat bukan hanya soal penampilan, tetapi juga berhubungan langsung dengan kesehatan jangka panjang. Obesitas adalah faktor risiko utama untuk banyak penyakit serius, seperti penyakit jantung, diabetes, dan kanker. Dengan menerapkan pola hidup sehat yang mencakup makan dengan porsi seimbang, menghindari konsumsi kalori berlebih, dan berolahraga secara teratur, kita dapat menjaga berat badan ideal dan mencegah penyakit terkait obesitas. Selain itu, tubuh yang memiliki berat badan ideal lebih mampu menjaga keseimbangan metabolisme, memperbaiki fungsi hormon, dan mendukung sistem pencernaan yang sehat.

                            </p>
                        </li>
                        <li>
                            <h6>Meningkatkan Sistem Kekebalan Tubuh</h6>
                            <p>Pola hidup sehat memperkuat sistem kekebalan tubuh kita, yang sangat penting untuk melawan berbagai infeksi dan penyakit. Makanan yang mengandung banyak vitamin C, vitamin D, zinc, dan antioksidan membantu meningkatkan daya tahan tubuh. Selain itu, berolahraga secara teratur juga dapat meningkatkan fungsi sistem kekebalan tubuh, membuat tubuh lebih siap dalam menghadapi patogen dan virus. Pola tidur yang baik, cukup air, dan manajemen stres juga berperan dalam mendukung sistem kekebalan tubuh untuk bekerja secara optimal.                        </p>
                        </li>
                    </ul>
                    <p>Gejala tersebut biasanya akan semakin parah seiring dengan pertambahan usia seseorang dan juga jenis aktivitas yang dilakukan adalah aktivitas yang membuat mata cepat lelah atau harus bekerja ekstra. Jika Anda merasa rabun jauh sudah sangat mengganggu aktivitas maka sebaiknya Anda segera menghubungi dokter.</p>
                    
                
                
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