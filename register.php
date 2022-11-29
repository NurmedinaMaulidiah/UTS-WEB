<!DOCTYPE html>
<html lang="en">

<head>
   <title>Login</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="style-login-user.css?vg" rel="stylesheet">

</head>
<body id="body1">
    
    <div class="body">
        <div class="avatar">
        <i class="fa fa-user"></i>
        </div>
        <div id="login-card" class="card">
            <div class="card-body">
                <h2 class="text-center">Register User</h2>
                <p>Sudah punya akun?
                <a href="login-user.php" >Log In</a>
                <br>
        <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="email"> Email :  </label>
            <input id="email" type="email" name="email" placeholder="Masukkan email"><br>
        </div>
        <div class="form-group">
            <label  for="username">Username:  </label>
            <input  id="email" type="text" name="username"  placeholder="Masukkan username"><br>
        </div>
        <div class="form-group">
            <label  for="password"> Password:  </label>
            <input  id="email" type="password" name="password"  placeholder="Masukkan password"><br>
        </div>
        <div class="form-group">
            <label  for="konfirmasi"> Konfirmasi Password :  </label>
            <input  id="email" type="password" name="konfirmasi"  placeholder="Konfirmasi password">
        </div>
        <button type="submit" name="login" id="email" class="btn btn-primary deep-purple btn-block " required>Submit</button>

            <div id="btn" class="text-center">
               <button type="button" class="btn btn-primary btn-circle btn-sm"><i class="fa fa-facebook"></i></button>
               <button type="button" class="btn btn-danger btn-circle btn-sm"><i class="fa fa-google"></i></button>
               <button type="button" class="btn btn-info btn-circle btn-sm"><i class="fa fa-instagram"></i></button>
            </div>
         </form>
      </div>
      <div>
</body>
</html>

<?php
    require 'konfigurasi.php';

    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $konfirmasi = $_POST['konfirmasi'];

        // cek username udah digunakan atau belum
        $sql = "SELECT * FROM akun WHERE username='$username'";
        $user = $db->query($sql);

        if(mysqli_num_rows($user) > 0){
            echo "<script>
                    alert('username telah digunakan, silahkan gunakan username lain')
                </script>";
        }else{
            // cek konfirmasi password
            if($password == $konfirmasi){

                $password = password_hash($password, PASSWORD_DEFAULT);

                $query = "INSERT INTO akun (email, username, psw)
                            VALUES ('$email', '$username', '$password')";
                $result = $db->query($query);

                if($result){
                    echo "<script>
                    alert('Registrasi Berhasil')
                </script>";
                }else{
                    echo "<script>
                    alert('Registrasi Gagal')
                </script>";
                }
            }else{
                echo "<script>
                    alert('konfirmasi password salah!')
                </script>";
            }
        }
    }

?>
