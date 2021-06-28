<?php  
    include '../koneksi/koneksi.php'; 
    $idlagu = $_POST['idlagu']; 
    $judul = $_POST['judul']; 
    $penyanyi = $_POST['penyanyi']; 
    $negara = $_POST['negara']; 
    $input = mysqli_query($koneksi,"INSERT INTO lagu VALUES('$idlagu','$judul','$penyanyi','$negara')") or die(mysql_error());  
    if($input){ 
  	echo "Data Berhasil Disimpan"; 
        header("location:lagu.php"); 
    }else{ 
        echo "Gagal Disimpan"; 
    } 
?> 
