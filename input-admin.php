<!DOCTYPE html>
<html lang="en">

<head>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="icons.css" rel="stylesheet" />
  <link href="svg.css" rel="stylesheet" />
  <link href="style5.css?vg" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="argon-dashboard.css?v=2.0.4" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
</head>

<body id="body">
<div class="bigboxbos">
<nav>
        <ul>
            
                <a href="lihat.php" class="logo">
                <i class="fas fa-search"></i>
                    <span class="nav-item">Lihat  Menu</span>
                </a>
            
            
                <a href="input-admin.php">
                <i class="fas fa-plus"></i>
                    <span class="nav-item">Tambah Menu</span>
                </a>
              
                <a href="update.php">
                <i class="fas fa-edit"></i>
                    <span class="nav-item">Update Menu</span>
                </a>
            
            
                <a href="hapus.php">
                <i class="fas fa-trash"></i>
                    <span class="nav-item">Hapus Menu</span>
                </a>
             
        
                <a href="logout.php">
                <i class="fas fa-sign-out-alt"></i>
                    <span class="nav-item">Signout</span>
                </a>
            
        </ul>
    </nav>
    <div class="kotakForm">
            <form action="" method="POST"  enctype="multipart/form-data">
                <div class="atasForm"><h1>Tambahkan menu baru </h1> <br></div>
                    <label for="" id="text">Nama Makanan </label> 
                    <input type="text" name="nama" required> <br>
<br><br>
                    <label for="" id="text">Harga </label> 
                    <input type="number" name="harga" required> <br>

                    <label for="" id="text">Foto </label>
                    <input type="file" name="gambar" required><br>
                
                    <input id="text" type="hidden" name="tglinput" value=<?=date("d-m-Y")?>><br>
                    <div class="button3">
                    <button type="submit" name="submit" id="button4" class="btn btn-primary deep-purple btn-block "><h1 class="submit1">Submit</h1></button>
                    </div>
                </form>
        </div>
    </div>
</div>
</body>
<?php
    require 'konfigurasi.php';
    if(isset($_POST['submit'])){
        $nama = $_POST['nama'];
        $harga = $_POST['harga'];
        $tglinput = $_POST['tglinput'];

        $gambar = $_FILES['gambar']['name'];
        $x = explode('.',$gambar);
        $ekstensi = strtolower(end($x));
        $gambar_baru = "$nama.$ekstensi";

        $tmp = $_FILES['gambar']['tmp_name'];
        
        if(move_uploaded_file($tmp, "img/".$gambar_baru)){
            $query = "INSERT INTO menu
            VALUES (NULL, '$nama', '$harga', '$tglinput', '$gambar_baru')";

            $result = $db->query($query);

            if($result){
                echo "
                <script>
                    alert('Menu Berhasil Ditambah');
                    document.location.href = 'input-admin.php';
                </script>
            ";
            }else{
                echo "
                <script>
                    alert('Menu Gagal Ditambah');
                </script>
            ";
            }  
        }
    }
