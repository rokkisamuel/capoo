<?php
    $host = "localhost" ;
    $user = "root" ;
    $pass = "" ;
    $db = "capoo" ; 

    $koneksi = mysqli_connect($host, $user, $pass, $db) ;
    if(!$koneksi){
        echo "Gagal koneksi: " . die(mysqli_error($koneksi));
    }
?>