<?php 
    require 'konfigurasi.php';
    $result1 = mysqli_query($db, "SELECT * FROM menu");
    if(isset($_GET['search'])){
        $keyword = $_GET['keyword'];
        $query_makan = mysqli_query($db, "SELECT * FROM menu where 
        nama LIKE '%$keyword%' OR 
        harga LIKE '%$keyword%'");

      
    }else{
        $query_makan = mysqli_query($db, "SELECT * FROM menu");
        
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
  <link href="style-lihat.css?vg" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="argon-dashboard.css?v=2.0.4" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
</head>

<body>
<div class="bigbox">
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
    
    <div class="table0">
        <table>
            <tr>
                <form action="" method="GET" class="formlain">
                    <td colspan='3'>
                        <div class="search">
                            <input type="text" name="keyword" id="keyword" placeholder='cari menu dan harga'>
                        </div>
                    </td>
                    <td>
                        <button type="submit" name="search" id="cari">
                            <div class='ikon'><i class="bi bi-search"></i></div>
                        </button>
                    </td>
            </tr>
    </div>
        </table>
    </div>
    <div class="tabel1">
        <table border='5'>
        <tr>
            <th colspan='4' class="head">--MENU--</th>
        </tr>
                <tr>
                    <th>no</th>
                    <th>Menu</th>
                    <th>harga</th>
                    <th>foto</th>
                </tr>
                    <?php
                            $i = 1;
                            $menu = [];
                            // while($row = mysqli_fetch_array($result)){
                
                            while($row = mysqli_fetch_assoc($query_makan)){
                                $menu[] = $row;
                    ?>
                <tr>
                    <td><?=$i?></td>
                    <td><?=$row['nama']?></td>
                    <td><?=$row['harga']?></td>
                    <td><img src="img/<?=$row['gambar']?>" alt="" width="100px"></td>
                </tr>
                    <?php
                        $i++; }
                    ?>
        </table>
    </div>
</body>


</div>
</div>
</body>
</html>