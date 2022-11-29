<?php
    require 'konfigurasi.php';
    $result = mysqli_query($db, "SELECT * FROM menu");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="icons.css" rel="stylesheet" />
  <link href="svg.css" rel="stylesheet" />
  <link href="style-update.css?vg" rel="stylesheet" />
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
    <div class="bigbox">

    <div class="tabel1">
        <table border='5'>
        <tr>
            <th colspan='5' class="head">--MAKANAN--</th>
        </tr>
                <tr>
                    <th>no</th>
                    <th>Makanan</th>
                    <th>harga</th>
                    <th>foto</th>
                    <th>Edit</th>
                </tr>
                    <?php
                        require 'konfigurasi.php';
                        $result = $db->query("SELECT * FROM menu");
                        $i = 1;
                        while($row = mysqli_fetch_array($result)){
                    ?>
                <tr>
                    <td><?=$i?></td>
                    <td><?=$row['nama']?></td>
                    <td><?=$row['harga']?></td>
                    <td><img src="img/<?=$row['gambar']?>" alt="" width="100px"></td>
                    <td id = "btn"><a href = "update-menu.php?id=<?=$row['id']?>" class="hapus"> Edit</td>
                </tr>
                    <?php
                        $i++; }
                    ?>
        </table>
    </div>
    </div>
</div>
</body>
</html>


