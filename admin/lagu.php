<!doctype html>
<html lang="en">
  <head>
    <title>Admin | CAPOO</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" media="screen">
  <link rel="stylesheet" type="css" href="../frontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="admin.css">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../js/jquery.js"></script>
  <script type="text/javascript" src="../js/bootstrap.js"></script>
  </head>

  <body id="page-top"> 

    <!--header navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand font-weight-bold text-white navbar-brand-center" href="#page-top">CAPOO</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" 
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto-left">
                <li class="nav-item active">
                <a class=" text-white" href="index.php">Lagu<span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active ">
                    <a class="nav-link text-white" onclick="return confirm('Anda yakin akan keluar ?')" href="../koneksi/keluar.php">
                        <span class="fas fa-sign-out-alt"></span>
                        Keluar <span class="sr-only">(current)</span>
                    </a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <!--sidebar-->
    <div class="row no-gutters mt-5">
        <div class="col-md-2 mt-2 pr-3 pt-4">
            <ul class="nav flex-column ml-3 mb-5">
                <li class="nav-item">
                    <a class="nav-link active text-white" href="index.php">
                        <i class="fas fa-tachometer-alt mr-2"></i>Dashboard</a><hr class="bg-secondary">
                <li class="nav-item">
                    <a class="nav-link text-white" href="admin.php">
                        <i class="fas fa-user mr-2"></i>Daftar Admin</a><hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="admin.php">
                        <i class="fas fa-music mr-2"></i>Daftar Lagu</a><hr class="bg-secondary">
                </li>
                
            </ul>
        </div>

    <!--body-->
    <div class="col-md-10 p-5 pt-2">
            <h3><i class="fas fa-music mr-2"></i>Daftar Lagu</h3><hr>
            <a href="tambah_lagu.php" class="btn btn-danger mb-2"> <i class="fas fa-plus-circle mr-2"></i>TAMBAH DATA LAGU</a>
            <a href="laporan_lagu.php" class="btn btn-light mb-2"> <i class="fas fa-print mr-2"></i>CETAK DATA</a>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                    <th scope="col">NO</th>
                    <th scope="col">ID Lagu</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Penyanyi</th>
                    <th scope="col">Negara</th>
                    <th colspan="3" scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include '../koneksi/koneksi.php' ;
                    $no = 1 ;
                    $sql = mysqli_query($koneksi, "select * from lagu");
                    while($data = mysqli_fetch_array($sql)) {
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $data['idlagu']; ?></td>
                            <td><?php echo $data['judul']; ?></td>
                            <td><?php echo $data['penyanyi']; ?></td>
                            <td><?php echo $data['negara']; ?></td>
                            <td><i class="fas fa-edit bg-success p-2 text-white rounded">
                                    <a href="ubah_lagu.php?idlagu=<?php echo $data['idlagu'];?>" class="text-white">
                                        Edit</a></i>
                                <i class="fas fa-trash-alt bg-danger p-2 text-white rounded">
                                    <a href="hapus_lagu.php?idlagu=<?php echo $data['idlagu'];?>" class="text-white">
                                    Delete</a></i>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    
        
    

    </body>
</html>