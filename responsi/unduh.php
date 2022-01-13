<?php
// memanggil library FPDF
require('fpdf/fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A5');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string
$pdf->Cell(190,7,'DATA ALUMNI SMAN-1 ABCD',0,1,'C');
$pdf->SetFont('Arial','B',12);
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(20,6,'',0,0);
$pdf->Cell(20,6,'NIS',1,0);
$pdf->Cell(50,6,'NAMA',1,0);
$pdf->Cell(25,6,'JURUSAN',1,0);
$pdf->Cell(50,6,'ANGKATAN',1,1);
$pdf->SetFont('Arial','',10);
include 'config.php';
$mahasiswa = mysqli_query($conn, "SELECT * FROM alumni ORDER BY nis ASC");
while ($row = mysqli_fetch_array($mahasiswa)){
    $pdf->Cell(20,6,'',0,0);
    $pdf->Cell(20,6,$row['nis'],1,0);
    $pdf->Cell(50,6,$row['nama'],1,0);
    $pdf->Cell(25,6,$row['jurusan'],1,0);
    $pdf->Cell(50,6,$row['angkatan'],1,1);
}
$pdf->Output();
?>