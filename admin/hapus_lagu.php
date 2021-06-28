<?php 
    include '../koneksi/koneksi.php';
    $idlagu =$_GET['idlagu']; 
    $judul =$_GET['judul']; 
    $penyanyi =$_GET['penyanyi']; 
    $negara =$_GET['negara']; 

    $result = mysqli_query($koneksi, "DELETE FROM lagu WHERE idlagu='$idlagu'"); 
    header("Location:lagu.php");  
    
?> 
