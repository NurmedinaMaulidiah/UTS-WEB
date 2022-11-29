<?php
   if(isset($_POST['login'])) {
      $admin = $_POST['name'];
      $pass_admin = $_POST['password'];



      if ($admin == 'admin' AND $pass_admin == '123') {
         // echo "Berhasil Login";
         header("Location: admin.php");
      } 
      
      else {
         header("wrong_login.php");
      }
   }

?>







<!DOCTYPE html>
<html lang="en">

<head>
   <title>Login</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="style-login-admin.css?vg" rel="stylesheet">

</head>

<body id="body">
<div class="avatar">
   
</div>
   <div id="login-card" class="card">
      <div class="card-body">
         <h2 class="text-center">Login Admin</h2>
         <h5 class="text-center">Fantastic-Food</h5>
         <br>
         <form action="" method="POST">
            <div class="form-group">
               <input type="name" class="form-control" id="email" placeholder="Enter name" name="name" autocomplete='off'>
            </div>

            <div class="form-group">
               <input type="password" class="form-control" id="email" placeholder="Enter password" name="password" autocomplete='off' required>
            </div>

            <button type="submit" name="login" id="email" class="btn btn-primary deep-purple btn-block " required>Submit</button>
            <br><br>

         </form>
      </div>
      <div>
</body>
</html>