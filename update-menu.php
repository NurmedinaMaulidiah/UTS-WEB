<?php
    require 'konfigurasi.php';

// Manangkap
if(isset($_GET['id'])){
    $id = $_GET['id'];
}

// Tampilkan value inputan dari id
$result = mysqli_query($db, 
"SELECT * FROM menu WHERE id = '$id'");
$row = mysqli_fetch_array($result);


    if(isset($_POST['submit'])){
        $nama = $_POST['nama'];
        $harga = $_POST['harga'];

        $gambar = $_FILES['gambar']['name'];
        $x = explode('.',$gambar);
        $ekstensi = strtolower(end($x));
        $gambar_baru = "$nama.$ekstensi";

        $tmp = $_FILES['gambar']['tmp_name'];
        

        if(move_uploaded_file($tmp, "img/".$gambar_baru)){
            $result = mysqli_query($db, 
            "UPDATE menu SET 
            nama = '$nama',
            harga = '$harga',
            gambar = '$gambar_baru'
            WHERE id = '$id'");
        
            if($result){
                echo " 
                    <script> 
                    alert('Data Berhasil DiUpdate');
                    document.location.href = 'lihat.php';
                    </script>
                ";
            } else {
                echo " 
                    <script> 
                    alert('Data Gagal DiUpdate');
                    </script>
                ";
            }
        }
        }
        ?>


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

<body id="body1">
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
                <div class="atasForm"><h1>Edit menu baru </h1> <br><br></div>
                    <label for="" id="text">Nama Makanan </label> 
                    <input type="text" name="nama" required value = <?= $row['nama']?>> <br>

                    <label for="" id="text">Harga </label> 
                    <input type="number" name="harga" required value = <?= $row['harga']?>> <br>

                    <label for="" id="text">Foto </label>
                    <input type="file" name="gambar" required value = <?= $row['gambar']?>><br>
                
                    <input id="text" type="hidden" name="tglinput" value=<?=date("d-m-Y")?>><br><br>
                    <button type="submit" name="submit" id="button4" class="btn btn-primary deep-purple btn-block "><h1 class="submit1">Submit</h1></button>
                
                </form>
        </div>
    </div>
</div>
</body>