<?php
    session_start();

    include 'koneksi/koneksi.php' ;

    $username = $_POST['username'] ;
    $password = $_POST['password'] ;

    $data = mysqli_query($koneksi, "select * from admin where username='$username' and password='$password'") ;
    if (mysqli_num_rows($data) > 0 ) {
        $row = mysqli_fetch_array($data) ;
            $_SESSION['user'] = $row['username'] ;
            $_SESSION['pass'] = $row['password'] ;
        header("location: admin/index.php") ;
    } else {
        echo "Data anda tidak valid" ;
    }
?>