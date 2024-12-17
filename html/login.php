  <?php
  session_start();
  require 'function.php';

  if (isset($_POST["login"])) {
      if (login($_POST) > 0) {
        if((isset($_COOKIE['id'])) && (isset($_COOKIE['username']))){
          $id=$_COOKIE['id'];
          $key=$_COOKIE['key'];
          $result= mysqli_query($conn, "SELECT username from data_user where id = $id");
          $row = mysqli_fetch_assoc($result);
          if($key=== hash('sha256',$row['username'])){
              $_SESSION['login']= true;
          }
        }
          $_SESSION["login"] = true;
          $_SESSION["username"] = $_POST["username"]; 
          
          header("Location: home.php"); 
          exit; 
      }
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
    <div class="container">
      <div class="form">
        <form action="" method = "post" >
          <div class="inti">
            <a href="home.php"><i data-feather="x" class="home"></i></a>
            <div class="baris">
              <h2>Masuk</h2>
              <p>Masuk dengan akun yang telah anda daftarkan</p>
            </div>
            <div class="baris">
              <div class="inputContainer">
                <label for="username">username</label>
                <i data-feather="user" class="icon"></i>
                <input type="text" name="username" id="username" placeholder="username" required/>
              </div>
            </div>

            <div class="baris">
              <div class="inputContainer">
                <label for="password">Kata sandi</label>
                <i data-feather="lock" class="icon"></i>
                <input type="password" name="password" id="password" placeholder="password" required />
              </div>
            </div>

            <div class="remember">
              <input type="checkbox" name="remember">
              <label for="remember">remember me</label>
            </div>

            <button id="masuk" class="masuk" name="login" value="masuk">Masuk</button>
            
            <div class="baris">
              <p>Belum punya akun?</p>
              <a href="daftar.php"><p>Daftar Sekarang</p></a>
            </div>
          </div>
        </form>
      </div>
    </div>
    <script>
      feather.replace();
    </script>
  </body>
</html>
