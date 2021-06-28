<?php
    include '../koneksi/koneksi.php';
    include '../fpdf/fpdf.php';
    $pdf = new FPDF("L","cm","A4");
    $pdf -> SetMargins(0.5 , 1 , 1);
    $pdf -> AliasNbPages();
    $pdf -> AddPage();
    $pdf -> SetFont('Arial' , 'B' , 14);
    $pdf -> Cell(25.5 , 0.7 , "DATA LAGU" , 0 , 10 , 'C');
    $pdf -> Line(1 , 3.1 , 28.5 , 3.1);
    $pdf -> SetLineWidth(0.1);
    $pdf -> Line(1 , 3.2 , 28.5 , 3.2);
    $pdf -> SetLineWidth(0);
    $pdf -> ln(1);
    $pdf -> ln(1);
    $pdf -> SetFont('Arial' , 'B' , 9);
    $pdf -> Cell(1 , 0.8 , 'NO' , 1 , 0 , 'C');
    $pdf -> Cell(4 , 0.8 , 'ID Lagu' , 1 , 0 , 'C');
    $pdf -> Cell(8 , 0.8 , 'Judul' , 1 , 0 , 'C');
    $pdf -> Cell(4.5 ,0.8 , 'Penyanyi' , 1 , 0 , 'C');
    $pdf -> Cell(4.5 ,0.8 , 'Negara' , 1 , 1 , 'C');
    $pdf -> SetFont('Arial' , '' , 9);
    $no = 1;
    $query = mysqli_query($koneksi,"select * from lagu");
    while($lihat = mysqli_fetch_array($query)){
        $pdf -> Cell(1 , 0.8 , $no , 1 , 0 , 'C');
        $pdf -> Cell(4 , 0.8 , $lihat['idlagu'] , 1 , 0 , 'C');
        $pdf -> Cell(8 , 0.8 , $lihat['judul'] , 1 , 0 , 'C');
        $pdf -> Cell(4.5 , 0.8 , $lihat['penyanyi'] , 1 , 0 , 'C');
        $pdf -> Cell(4.5 , 0.8 , $lihat['negara'] , 1 , 1 , 'C');
        
        $no++;
    }
    $pdf->Output("laporan_lagu.pdf","I");
?>=