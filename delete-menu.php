<?php
require 'konfigurasi.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $result = mysqli_query($db,
    "DELETE FROM menu WHERE id = '$id'");
    if($result){
        echo" 
        <script> 
        alert('Delete data has DONE');
        document.location.href = 'lihat.php';
        </script>
    ";
    }
    else {
        echo " 
            <script> 
            alert('FAILED Deleting a  Data!');
            </script>
        ";
    }
}
?>