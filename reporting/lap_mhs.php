<?php
// memanggil library FPDF
require('fpdf/fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A5');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string untuk judul 
$pdf->Cell(190,7,'PROGRAM STUDI TEKNIK INFORMATIKA',0,1,'C');
$pdf->SetFont('Arial','B',12); // style font dan ukuran
$pdf->Cell(190,7,'DAFTAR MAHASISWA MAKUL PEMROGRAMAN WEB DINAMIS',0,1,'C');
// Memberikan space kebawah agar tidak terlalu rapat
//membuat header tabel beserta stylenya
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(20,6,'NIM',1,0);
$pdf->Cell(50,6,'NAMA MAHASISWA',1,0);
$pdf->Cell(25,6,'J KEL',1,0);
$pdf->Cell(50,6,'ALAMAT',1,0);
$pdf->Cell(30,6,'TANGGAL LHR',1,1);
$pdf->SetFont('Arial','',10);

include 'koneksi.php'; //menyertakan koneksi database menggunakan file koneksi.php 
$mahasiswa = mysqli_query($con, "select * from mahasiswa"); //query sql untuk menampilkan semua data yang ada didalam tabel mahasiswa yang diinisialisasikan kedalam variabel mahasiswa
while ($row = mysqli_fetch_array($mahasiswa)){ //menampilkan data dalam bentuk perulangan array yang mana setiap kolom dan barisnya diakses dari tabel mahasiswa
    $pdf->Cell(20,6,$row['nim'],1,0);
    $pdf->Cell(50,6,$row['nama'],1,0);
    $pdf->Cell(25,6,$row['jkel'],1,0);
    $pdf->Cell(50,6,$row['alamat'],1,0);
    $pdf->Cell(30,6,$row['ttl'],1,1);
}
$pdf->Output(); //menampilkan output yang berbentuk file pdf
?>