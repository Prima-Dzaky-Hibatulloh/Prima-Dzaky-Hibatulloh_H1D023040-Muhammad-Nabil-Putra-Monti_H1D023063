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
                <h3>Kenapa sih Makin Banyak yang Rabun</h3>
            </div>
            <div class="detail">
                <h4> Rabun jauh atau miopi adalah kondisi ketika mata tidak bisa melihat objek yang letaknya jauh dengan jelas. Hal ini terjadi ketika bentuk mata membiaskan sinar cahaya dan memfokuskan gambar di depan retina, bukan tepat pada retina. Gangguan kesehatan mata ini bisa berkembang secara bertahap atau cepat, sering memburuk selama masa anak-anak hingga remaja. Tidak hanya itu, rabun jauh sering dikaitkan dengan riwayat keturunan.</h4>
                <img src="https://th.bing.com/th/id/OIP.JcOtOq-JJ_xmoYtYWwv23QHaDq?w=343&h=180&c=7&r=0&o=5&pid=1.7" alt="">
                <p>Rabun jauh merupakan salah satu gangguan refraksi pada mata yang menyebabkan penderitanya tidak mampu melihat obyek yang jauh dengan jelas. Kondisi ini juga sering disebut dengan mata minus atau miopia. Adapun tingkat keparahan gangguan penglihatan ini bisa berbeda pada setiap penderitanya. Seseorang yang menderita rabun jauh tidak memerlukan adanya penanganan khusus.
                Rabun jauh bisa dialami oleh siapa saja dan pada umur kapanpun. Namun biasanya rabun jauh akan mulai dirasakan oleh seseorang ketika ia menginjak usia kanak-kanak hingga ke bangku sekolah. <br>Umumnya, rabun jauh akan menyebabkan gejala-gejala berikut ini:</p><br>
                <ul>
                    <li>Pandangan akan menjadi kabur ketika melihat obyek yang jauh sehingga sering menyebbakan penderita rabun jauh harus menyipitkan matanya ketika melihat obyek yang jauh. Misalnya ketika melihat tulisan yang ada di papan tulis atau ketika melihat rambu-rambu di jalan raya.</li>
                    <li>Rabun jauh menyebabkan mata harus bekerja lebih ekstra agar bisa melihat obyek yang jaraknya jauh, kondisi tersebut menyebabkan penderita rabun jauh sering mengalami sakit kepala.</li>
                    <li>Sering mengedipkan mata dibandingkan orang-orang yang memiliki mata normal.</li>
                    <li>Sering menggosok mata karena merasa mata cepat lelah ketika digunakan untuk berbagai macam aktivitas.</li>
                    <li>Seringkali terlihat tidak menyadari akan adanya obyek yang jauh.</li>
                </ul><br><br>
                <h5>Penyebab Rabun Jauh</h5>
                <ol type="1">
                    <li><p>Faktor Genetis</p></li>
                    <li><p>Melakukan Aktivitas dengan Obyek Terlalu Dekat dengan Mata</p></li>
                    <li><p>Terlalu Lama Beraktivitas dengan Jarak Pandang yang Sama Setiap Hari</p></li>
                    <li><p>Tinggal di Tempat yang Sempit dan Sesak</p></li>
                    <li><p>Kebiasaan Buruk</p></li>
                    <li><p>Mata Terlalu Lama Berada di Balik Media Transparan yang Tidak Cocok untuk Mata</p></li>
                    <li><p>Kekurangan Asupan Gizi</p></li>
                </ol><br><br>

                <h5>Gimana sih Cara Mencegahnya??</h5>
                <p>Seiring dengan pertambahan usia rabun jauh juga akan semakin mungkin untuk diderita. Dengan kata lain, rabun jauh tidak dapat dicegah, namun perkembangannya bisa diperlambat dengan metode berikut ini:</p>
                <ul>
                    <li>Lakukan pemeriksaan rutin terhadap mata Anda, bahkan meskipun Anda tidak merasakan gangguan apapun pada mata. Cara tersebut akan membantu memberikan diagnosis dini jika mata Anda mengalami gangguan.</li>
                    <li>Mengontrol kondisi kesehatan kronis seperti diabetes dan hipertensi atau tekanan darah tinggi. Kedua kondisi medis tersebut bisa meningkatkan resiko kerusakan pada mata bahkan bisa menyebabkan kebutaan.</li>
                    <li>Lindungi mata dari paparan sinar matahari. Radiasi sinar ultraviolet  merupakan salah satu pemicu kerusakan pada refraksi mata. Untuk itu, pakailah kaca mata hitam ketika hendak melakukan kegiatan di luar rumah dan langsung di bawah paparan sinar matahari.</li>
                    <li>Cegah resiko cedera mata dengan menggunakan kacamata pelindung, terutama ketika akan melakukan beberapa aktivitas seperti olah raga, memotong rumput, melukis, mengecat, atau saat terpapar asap.</li>
                    <li>Konsumsilah makanan yang sehat dan seimbang. Kesehatan tubuh kita, termasuk kesehatan mata sangat didukung dengan pola asupan makanan yang baik. Tingkatkanlah asupan makanan yang mengandung vitamin A, lutein, dan zeaxantin untuk meningkatkan kesehatan mata. Selain itu upayakan untuk mengurangi makanan yang kaya akan kandungan kolesterol. Kolesterol tinggi bisa memicu diabetes dan darah tinggi sehingga memicu kerusakan pada mata.</li>
                    <li>Tidak merokok dan minum minuman beralkohol. keduanya merupakan kebiasaan buruk yang akan meningkatkan resiko berbagai macam penyakit, termasuk kerusakan pada mata.</li>
                    <li>Hindari kelelahan berlebih pada mata. Jika Anda sibuk bekerja di depan komputer atau sedang sibuk membaca maka usahakan untuk beristirahat beberapa menit agar otot mata tidak kelelahan. Jangan memaksakan mata bekerja jika memang sudah merasa lelah.</li>
                    <li>Kenali setiap gejala gangguan refraksi pada mata seperti pandangan kabur, melihat kilatan cahaya, bintik-bintik hitam, serta lingkaran cahaya di sekitar pandangan. Kondisi tersebut mungkin menandakan gejala medis tertentu seperti glaukoma, stroke, atau karena adanya robekan pada retina mata.</li>
                </ul>


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