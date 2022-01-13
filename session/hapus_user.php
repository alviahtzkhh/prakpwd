<?php
include "../curd/koneksi.php"; //menyertakan koneksi database menggunakan file koneksi.php yang sudah dibuat pada pertemuan 3 yang berada didalam folder curd
$sql="delete from users where id_user= '$_GET[id]'"; //menghapus data dari tabel users berdasarkan is_user yang dipilih

mysqli_query($con, $sql);
mysqli_close($conn); // menutup koneksi database
header('location:tampil_user.php'); //mengarahkannya kehalaman tampil_user.php
?>
