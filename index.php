<?php
   if(isset($_POST['login_admin'])) {
        session_start();
        header("Location: login-admin.php");
   }
   if(isset($_POST['login_user'])) {
    session_start();
    header("Location: login-user.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <title>Login</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="style-login.css?vg" rel="stylesheet">

</head>

<body id="body">
   <div id="login-card" class="card">
      <div class="card-body">
         <h2 class="text-center">Pilihan Login</h2>
         <br>
         <form action="" method="POST">
            <button type="submit" name="login_admin" id="email" class="btn btn-primary deep-purple btn-block ">SIGN IN AS ADMIN</button>
            <button type="submit" name="login_user" id="email" class="btn btn-primary deep-purple btn-block ">SIGN IN AS USER</button>
            <br>
            <br>

         </form>
   </div>

      </div>
    </div>
</body>
</html>