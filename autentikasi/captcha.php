<?php
session_start(); //memulai session
$random_alpha = md5(rand()); // menginisialisasikan variabel untuk membuat kode captcha secara random
$captcha_code = substr($random_alpha, 0, 6); //untuk menampilkan kode captcha sebanyak 6 karakter
$_SESSION["captcha_code"] = $captcha_code; //menyimpan kode captcha kedalam session
//membuat gambar captcha
$target_layer = imagecreatetruecolor(70,30); //untuk membuat gambar warna asli yang lebih baru baru
$captcha_background = imagecolorallocate($target_layer, 255, 160, 119); //membuat warna background gambar captcha
imagefill($target_layer,0,0,$captcha_background); //memberikan warna pada gambar captcha
$captcha_text_color = imagecolorallocate($target_layer, 0, 0, 0); //membuat warna teks kode captcha
imagestring($target_layer, 5, 5, 5, $captcha_code, $captcha_text_color); //memasukkan string kode captcha kedalam gambar secara horizontal
header("Content-type: image/jpeg"); // script mengirimkan header untuk memberitahu format gambar yang akan dibuat
imagejpeg($target_layer); //untuk menghasilkan output gambar code captcha
?>