<?php

    $conn = mysqli_connect("localhost","root","","dokterQ");

    function query ($query){

        global $conn;
        $result = mysqli_query($conn,$query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }


    function register ($data){

        global $conn;

        $username = htmlspecialchars($data["username"]);
        $email = htmlspecialchars($data["email"]);
        $whatsapp = htmlspecialchars($data["whatsapp"]);
        $password = mysqli_real_escape_string($conn,htmlspecialchars($data["password"]));
        $password2 = mysqli_real_escape_string($conn,htmlspecialchars($data["password2"]));

        $resultus = mysqli_query($conn, "SELECT username FROM data_user WHERE username = '$username'");

        if(mysqli_fetch_assoc($resultus)){
            echo" <script>
                alert('username sudah terdaftar!');
            </script>
            ";
            return false;
        }

        $resultem = mysqli_query($conn, "SELECT username FROM data_user WHERE email = '$email'");

        if(mysqli_fetch_assoc($resultem)){
            echo" <script>
                alert('email sudah terdaftar!');
            </script>
            ";
            return false;
        }

        $resultwa = mysqli_query($conn, "SELECT username FROM data_user WHERE whatsapp = '$whatsapp'");

        if(mysqli_fetch_assoc($resultwa)){
            echo" <script>
                alert('whatsapp sudah terdaftar!');
            </script>
            ";
            return false;
        }



        if($password !== $password2){
            echo "<script>
                alert('password tidak sesuai!'); 
            </script>
            ";
            return false;
        }

        $password = password_hash($password, PASSWORD_DEFAULT);

        $insert = "INSERT INTO data_user (username, email, whatsapp, password) 
        VALUES ('$username', '$email', '$whatsapp', '$password')";
        
        mysqli_query($conn, $insert);


        return mysqli_affected_rows($conn);
    }


    function login($data){
        global $conn;   
        $username = $data["username"];
        $password = $data["password"];
    
        // Menggunakan prepared statement untuk menghindari SQL Injection
        $stmt = $conn->prepare("SELECT * FROM data_user WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $resultlog = $stmt->get_result();
    
        // Periksa apakah ada data pengguna yang ditemukan
        if ($resultlog->num_rows === 1) {
            $row = $resultlog->fetch_assoc();
    
            // Verifikasi password
            if (password_verify($password, $row["password"])) {
                if(isset($_POST['remember'])){
                    setcookie('id',$row['id'],time()+3600);
                    setcookie('key',hash('sha256',$row['username']));
                  }
                  
                return 1; // Login sukses
            } else {
                echo "<script>alert('Password salah!');</script>";
                return 0; // Login gagal
            }
        } else {
            echo "<script>alert('Username tidak ditemukan');</script>";
            return 0; // Login gagal
        }
    }

    

?>