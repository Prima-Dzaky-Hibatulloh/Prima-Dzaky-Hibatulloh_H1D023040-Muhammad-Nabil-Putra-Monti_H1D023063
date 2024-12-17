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
                <h3>Kenapa sih Kita Bisa Demam??</h3>
            </div>
            <div class="detail">
                <h4>Demam adalah meningkatnya suhu tubuh hingga lebih dari 380C. Kondisi ini bisa 
                    menandakan adanya penyakit atau kondisi tertentu di dalam tubuh. Demam dapat 
                    terjadi pada siapa pun, mulai dari bayi hingga orang dewasa.</h4>
                <img src="https://res.cloudinary.com/dk0z4ums3/image/upload/v1590468273/attached_image/demam-0-alodokter.jpg" alt="">
                <p>Selain penyakit, demam juga bisa terjadi akibat paparan cuaca dan suhu panas yang berlebihan, siklus menstruasi, reaksi setelah imunisasi pada anak, atau efek samping obat-obatan tertentu. <br>

                    Meski kadang mengkhawatirkan, sebagian besar demam yang disebabkan oleh infeksi virus akan sembuh dengan sendirinya. Namun, jika demam sudah mencapai suhu lebih dari 390C, diperlukan penanganan untuk mengatasi ketidaknyamanan akibat demam dan mengobati penyebabnya. <br>
                    
                    Demam juga perlu diwaspadai jika terjadi pada bayi, khususnya bayi berusia di bawah 3 bulan, terlebih jika disertai gejala lain, seperti sesak napas, diare, dan lemas.</p> <br>
                <h5>Gejala dan Penyebab Demam</h5>
                <p>Demam ditandai dengan meningkatnya suhu tubuh hingga lebih dari 380C. Normalnya, suhu tubuh berkisar antara 36,10C sampai 37,20C. <br>

                    Demam merupakan gejala dari kondisi atau penyakit tertentu. Biasanya, demam akan disertai gejala lain dari kondisi yang mendasarinya. Beberapa gejala penyerta tersebut adalah:</p>
                <ul>
                    <li>Sakit kepala</li>
                    <li>Berkeringat</li>
                    <li>Menggigil</li>
                    <li>Lemas</li>
                    <li>Nyeri otot</li>
                    <li>Hilang nafsu makan</li>
                </ul> <br>
                <p>Demam dapat disebabkan oleh berbagai kondisi, seperti:</p>
                <ul>
                    <li>Penyakit infeksi, seperti infeksi virus, bakteri, jamur, parasit</li>
                    <li>Penyakit yang menyebabkan peradangan kronis, seperti rheumathoid arthritis</li>
                    <li>Imunisasi, seperti difteri dan tetanus</li>
                    <li>Obat-obatan</li>
                    <li>Kanker</li>
                </ul> <br>
                <h5>Gimana sih cara pengobatannya?? </h5>
                <p>Pengobatan demam disesuaikan dengan penyebabnya. Pada demam yang disebabkan oleh infeksi, dokter akan memberikan obat, seperti:</p>
                <ul>
                    <li>Obat antivirus</li>
                    <li>Obat antibioktik</li>
                    <li>Obat antijamur</li>
                </ul> <br><br><br><br>

                <div class="tips-demam">
                    <h5>Mau tau tips biar ga demam?</h5>
                    <img src="https://th.bing.com/th/id/OIP.YsTSz5iav3IuhNKxfmq2zQHaEK?w=328&h=184&c=7&r=0&o=5&pid=1.7" alt="" class="tips-demam-img">
                    <h5>Biar ga demam ada tips nya lhoo........... Yok simak penjelasan berikut!!!</h5> <br>
                    <ul>
                        <li>
                            <h6>Cobalah untuk mandi dengan air hangat.</h6> 
                            Air hangat bisa membuat suhu tubuh menurun secara perlahan. Jika Anda mandi dengan air dingin maka bisa membahayakan organ tubuh karena penurunan suhu yang sangat drastis sehingga menyebabkan tubuh menggigil. Ketika Anda mandi dengan air hangat maka sinyal tubuh akan membantu menurunkan tubuh secara perlahan dan tidak menyebabkan gangguan peredaran darah untuk sistem pembuluh darah.
                        </li><br>
                        <li>
                            <h6>Kompres dengan air dingin pada beberapa bagian tubuh seperti ketiak dan selangkangan.</h6> 
                            Tekanan air dingin pada bagian tubuh ini akan membantu tubuh dalam mengurangi penguapan dari dalam. Biasanya kompres ini sangat efektif untuk orang dewasa maupun anak-anak.
                        </li> <br>
                        <li>
                            <h6>Bersihkan tubuh dengan air hangat. </h6>
                            Anda bisa mengusapkan handuk lembut yang sudah dicelupkan ke dalam air hangat. Cara ini bisa Anda lakukan jika tidak berani mandi air hangat karena suhu tubuh sangat tinggi.
                        </li><br>
                        <li>
                            <h6>Cobalah untuk minum segelas teh hangat. </h6>
                            Segelas teh hangat akan membantu Anda bisa mengeluarkan banyak keringat sehingga membantu menurunkan demam yang tinggi. Teh juga bisa membantu meningkatkan sistem kekebalan tubuh sehingga bisa melawan infeksi yang terjadi pada tubuh.
                        </li><br>
                        <li>
                            <h6>Jika Anda tidak suka minum teh maka segelas air jahe hangat juga bisa membantu. </h6>
                            Jahe mengandung bahan yang bisa membantu melawan infeksi, melegakan saluran pernafasan dan membuat tubuh menjadi lebih segar. Minum segelas air hangat yang dicampur dengan jahe akan membuat tubuh Anda menjadi lebih baik.
                        </li><br>
                        <li>
                            <h6>Jika Anda merasa tidak nyaman dan tidak nafsu makan karena demam, maka cobalah untuk makan sayuran yang ditambah dengan cabai. </h6>
                            Cabai mampu membuat tubuh yang demam menjadi lebih hangat dan nyaman. Selain itu cabai juga mengatasi peredaran darah yang tidak lancar selama demam sehingga menyebabkan tubuh menjadi lebih baik.
                        </li><br>
                        <li>
                            <h6>Anda juga bisa mencoba untuk menggunakan kaus kaki yang sebelumnya sudah direndam dalam air panas. </h6>
                            Setelah itu peras sehingga semua airnya keluar dari kaus kaki dan hanya tinggal uap panas saja. Gunakan kaus kaki ini ketika tidur dan uap panas bisa membantu peredaran darah di kaki menjadi lebih baik dan membantu menurunkan panas.
                        </li><br>
                    </ul> <br><br>
                    <p>Demam dapat menimbulkan rasa tidak nyaman. Hal tersebut dapat diatasi dengan istirahat dan minum air putih yang cukup, serta mengonsumsi obat penurun demam atau obat meriang, misalnya paracetamol. <br>
                        Demam dapat dicegah hanya jika kondisi atau penyakit yang menyebabkan demam dapat dihindari. Misalnya dengan menjalani pola hidup bersih dan sehat, untuk mencegah demam yang disebabkan oleh infeksi.</p>
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