<?php  
    include '../koneksi/koneksi.php'; 
    $id_admin = $_POST['id_admin']; 
    $nama_admin = $_POST['nama_admin']; 
    $username = $_POST['username']; 
    $password = $_POST['password']; 
    $result = mysqli_query($koneksi,"UPDATE admin SET nama_admin='$nama_admin', username='$username', password='$password' WHERE id_admin='$id_admin'");  
    if($result){ 
  	echo "Data Berhasil Disimpan"; 
        header("location:admin.php"); 
    }else{ 
        echo "Gagal Disimpan"; 
    } 
?> 
