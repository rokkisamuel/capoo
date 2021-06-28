<?php  
    include '../koneksi/koneksi.php'; 
    $idlagu = $_POST['idlagu']; 
    $judul = $_POST['judul']; 
    $penyanyi = $_POST['penyanyi']; 
    $negara = $_POST['negara']; 
    $result = mysqli_query($koneksi,"UPDATE lagu SET judul='$judul', penyanyi='$penyanyi', negara='$negara' WHERE idlagu='$idlagu'");  
    if($result){ 
  	echo "Data Berhasil Disimpan"; 
        header("location:lagu.php"); 
    }else{ 
        echo "Gagal Disimpan"; 
    } 
?> 
