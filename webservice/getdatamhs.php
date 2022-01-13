<?php
require_once "koneksi.php"; //menyertakan koneksi database menggunakan file koneksi.php
$sql = "select * from mahasiswa"; //query untuk menampilkan semua data yang ada ditabel mahasiswa yang diinisialisasikan kedalam variabel sql
$query = mysqli_query($con,$sql); //mengirimkan query kedalam database yang diinisialisasikan kedalam variabel query

while ($row = mysqli_fetch_assoc($query)) { //perulangan untuk mengambil setiap barisnya sebagai array asosiatif
    $data[] = $row; //banyaknya data sama dengan banyaknya baris
}

header('content-type: application/json'); //menampilkan data dalam bentuk json
echo json_encode($data); //menyandikan data kedalam format json
mysqli_close($con); //menutup koneksi
?>