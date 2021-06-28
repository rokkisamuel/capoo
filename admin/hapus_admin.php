 <?php 
    include '../koneksi/koneksi.php';
    $id_admin = $_GET['id_admin']; 
    $nama_admin =$_GET['nama_admin']; 
    $username =$_GET['username']; 
    $password =$_GET['password']; 

    $result = mysqli_query($koneksi, "DELETE FROM admin WHERE id_admin='$id_admin'"); 
    header("Location:admin.php");  
    
?> 
