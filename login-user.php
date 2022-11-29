<?php

    session_start();
    require 'konfigurasi.php';

    if(isset($_POST['login'])){
        $user = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM akun WHERE username='$user' OR email='$user'";
        $result = $db->query($sql);

        //cek akun ada atau gak
        if(mysqli_num_rows($result) > 0){

            $row = mysqli_fetch_array($result);
            $username = $row['username'];

            //cek passwordnya valid
            if(password_verify($password, $row['psw'])){

                $_SESSION['login'] = $username;

                echo "<script>
                        alert('Selamat Datang $username');
                        document.location.href = 'home.php';
                        </script>";
            }else{
                echo "<script>
                        alert('Username dan Password salah');
                        </script>";
            }
        } else{
            echo "<script>
                        alert('Buat akun terlebih dahulu');
                        </script>";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
   <title>Login</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="style-login-user.css" rel="stylesheet">

</head>

<body id="body">
<div class="avatar">
      <i class="fa fa-user"></i>
</div>
   <div id="login-card" class="card">
      <div class="card-body">
         <h2 class="text-center">Login User</h2>
         <h5 class="text-center">Fantastic-Food</h5>
         <br>
         <form action="" method="POST"  enctype="multipart/form-data">
            <div class="form-group">
               <input type="text" class="form-control" id="email" placeholder="Enter name" name="username" autocomplete='off'>
            </div>

            <div class="form-group">
               <input type="password" class="form-control" id="email" placeholder="Enter password" name="password" autocomplete='off' required>
            </div>

            <button type="submit" name="login" id="email" class="btn btn-primary deep-purple btn-block " required>Submit</button>
            <p>Belum punya akun?
            <a href="register.php" >Register</a>
            <br><br>
         </form>
      </div>
      <div>
</body>
</html>

