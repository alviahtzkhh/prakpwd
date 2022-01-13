<?php
include "../curd/koneksi.php"; //menyertakan koneksi database menggunakan file koneksi.php yang sudah dibuat pada pertemuan 3 yang berada didalam folder curd
//inisialisasi variabel penampung atribut tabel user
$id_user = $_POST['id_user'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$pass = md5($_POST[password]);
//menambahkan data kedalam tabel User sesuai dengan variabel yang sudah diinisialisasikan
$sql = "INSERT INTO users(id_user, password, nama, email) VALUES ('$id_user', '$pass','$nama','$email')";
$query=mysqli_query($con, $sql);
mysqli_close($con); // menutup koneksi database
header('location:tampil_user.php'); //akan mengarahkan kembali ke halaman tampil_user.php
?>