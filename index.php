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
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <link href="https://fonts.googleapis.com/css?family=Nunito:600,700,900" rel="stylesheet">
   <link href="style5.css" rel="stylesheet">

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
            <div id="btn" class="text-center">
               <button type="button" class="btn btn-primary btn-circle btn-sm"><i class="fa fa-facebook"></i></button>
               <button type="button" class="btn btn-danger btn-circle btn-sm"><i class="fa fa-google"></i></button>
               <button type="button" class="btn btn-info btn-circle btn-sm"><i class="fa fa-instagram"></i></button>
            </div>
         </form>


      </div>
    </div>
</body>
</html>