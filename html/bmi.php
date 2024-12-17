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
    <link rel="stylesheet" href="../css/bmi.css">
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
        <div class="headerr">
            <img src="../image/gambar.png" alt="BMI Image" class="bmi-image">
            <div class="header-text">
                <h1>Kalkulator BMI</h1>
                <p>BMI (Indeks Massa Tubuh) adalah cara yang umum digunakan untuk menilai apakah seseorang memiliki berat badan yang sehat berdasarkan tinggi badan. Mengetahui nilai BMI Anda dapat membantu Anda memahami kesehatan dan kebugaran Anda.</p>
            </div>
        </div>

        <form id="bmiForm">
            <div class="input-group gender-selection">
                <label>Jenis Kelamin:</label>
                <div>
                    <input type="radio" id="male" name="gender" value="male" required>
                    <label for="male">
                        <img src="../image/hamas.png" alt="Laki-laki" class="gender-icon"> Laki-laki
                    </label>
                    <input type="radio" id="female" name="gender" value="female" required>
                    <label for="female">
                        <img src="../image/hamasversicewe.png" alt="Perempuan" class="gender-icon"> Perempuan
                    </label>
                </div>
            </div>

            <div class="input-group">
                <label for="height">Tinggi Badan (cm):</label>
                <input type="number" id="height" required placeholder="Mis: 170">
            </div>

            <div class="input-group">
                <label for="weight">Berat Badan (kg):</label>
                <input type="number" id="weight" required placeholder="Mis: 65">
            </div>

            <button type="button" onclick="calculateBMI()">Hitung BMI</button>
        </form>

        <div id="result" class="result"></div>
        
        <h2>Kategori BMI</h2>
        <table>
            <thead>
                <tr>
                    <th>Rentang BMI</th>
                    <th>Kategori</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Kurang dari 18.5</td>
                    <td>Kekurangan berat badan</td>
                </tr>
                <tr>
                    <td>18.5 - 24.9</td>
                    <td>Normal (ideal)</td>
                </tr>
                <tr>
                    <td>25.0 - 29.9</td>
                    <td>Kelebihan berat badan</td>
                </tr>
                <tr>
                    <td>30.0 dan lebih</td>
                    <td>Kegemukan (Obesitas)</td>
                </tr>
            </tbody>
        </table>

        <div class="additional-info">
            <h2>Informasi Tambahan</h2>
            <p>BMI bukanlah satu-satunya ukuran kesehatan. Ada faktor lain yang penting untuk dipertimbangkan, seperti komposisi tubuh, distribusi lemak, dan gaya hidup. Selalu konsultasikan dengan profesional kesehatan untuk evaluasi yang lebih lengkap.</p>
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
    function calculateBMI() {
    const gender = document.querySelector('input[name="gender"]:checked').value;
    const height = parseFloat(document.getElementById('height').value) / 100; // konversi cm ke meter
    const weight = parseFloat(document.getElementById('weight').value);

 
    const bmi = (weight / (height * height)).toFixed(2);
    let category = '';

    if (bmi < 18.5) {
        category = 'Kekurangan berat badan';
    } else if (bmi >= 18.5 && bmi < 25) {
        category = 'Normal (ideal)';
    } else if (bmi >= 25 && bmi < 30) {
        category = 'Kelebihan berat badan';
    } else {
        category = 'Kegemukan (Obesitas)';
    }

 
    const resultDiv = document.getElementById('result');
    resultDiv.innerHTML = `
        <div><strong>Jenis Kelamin:</strong> ${gender === 'male' ? 'Laki-laki' : 'Perempuan'}</div>
        <div class="bmi-value"><strong>BMI Anda:</strong> ${bmi}</div>
        <div class="bmi-value-label"><strong>Kategori:</strong> ${category}</div>
        <div><strong>Tinggi Badan:</strong> ${document.getElementById('height').value} cm</div>
        <div><strong>Berat Badan:</strong> ${document.getElementById('weight').value} kg</div>
    `;

    resultDiv.classList.add('show'); // Tambahkan kelas untuk tampilkan efek
}
</script>
    
</body>
</html>