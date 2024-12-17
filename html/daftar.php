<?php
require 'function.php';


if(isset($_POST["masuk"])){

  
  if (register($_POST) > 0) {
    echo "<script>
            alert('Pendaftaran berhasil');
            document.location.href='login.php';
            </script>";
  } /*else {
    echo "<script>
            alert('Pendaftaran gagal');
            </script>";
  }*/
}


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/login.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <script src="https://unpkg.com/feather-icons"></script>
    <title>Document</title>
  </head>
  <body>
  <form action="" method ="post">

    <div class="container">
      <div class="form">
        <div class="inti">
          <a href="home.php"><i data-feather="x" class="home"></i></a>
          
          <div class="baris">
            <h2>Daftar</h2>
            <p>Masukan informasi yang valid</p>
          </div>

          <div class="baris">
            <div class="inputContainer">
              <label for="username">username</label>
              <i data-feather="user" class="icon"></i>
              <input type="text" name="username" id="username" placeholder="masukan username" required/>
            </div>
          </div>
          
          <div class="baris">
            <div class="inputContainer">
              <label for="email">Email</label>
              <i data-feather="user" class="icon"></i>
              <input type="text"name="email" id="email" placeholder="masukakn alamat email" required/>
            </div>
          </div>

          <div class="baris">
            <div class="inputContainer">
              <label for="whatsapp">Whatsapp</label>
              <i data-feather="phone" class="icon"></i>
              <input type="text" name="whatsapp" id="whatsapp" placeholder="masukan nomor whatsapp" required/>
            </div>
          </div>

          <div class="baris">
            <div class="inputContainer">
              <label for="password">Kata sandi</label>
              <i data-feather="lock" class="icon"></i>
              <input type="password" name="password" id="password" placeholder="masukan password" required/>
            </div>
          </div>

          <div class="baris">
            <div class="inputContainer">
              <label for="password">Kata sandi</label>
              <i data-feather="lock" class="icon"></i>
              <input type="password" name="password2" id="password" placeholder="konfirmasi password" required/>
            </div>
          </div>

          

          <button type="submit" name="masuk" id="masuk" class="masuk" value="masuk">Daftar</button>

          <div class="baris">
              <p>Sudah punya akun?</p>
              <a href="login.php"><p>Masuk Sekarang</p></a>
          </div>

        </div>
      </div>
    </div>
    </form>

    <script>
      feather.replace();
    </script>
  </body>
</html>
