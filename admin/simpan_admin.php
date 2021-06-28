<?php  
    include '../koneksi/koneksi.php'; 
    $id_admin = $_POST['id_admin']; 
    $nama_admin = $_POST['nama_admin']; 
    $username = $_POST['username']; 
    $password = $_POST['password']; 
    $input = mysqli_query($koneksi,"INSERT INTO admin VALUES('$id_admin','$nama_admin','$username','$password')") or die(mysql_error());  
    if($input){ 
  	echo "Data Berhasil Disimpan"; 
        header("location:admin.php"); 
    }else{ 
        echo "Gagal Disimpan"; 
    } 
?> 
