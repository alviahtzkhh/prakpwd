<?php
session_start(); //memulai session
include "../curd/koneksi.php"; //menyertakan koneksi database menggunakan file koneksi.php yang sudah dibuat pada pertemuan 3 yang berada didalam folder curd
//inisialisai variabel penampung atribut id_user dan password yang ada pada tabel users
$id_user = $_POST['id_user'];
$pass=md5($_POST['paswd']);

//menampilkan semua data dari tabel users dimana id_user dan password sama
$sql="SELECT * FROM users WHERE id_user='$id_user' AND password='$pass'";
if ($_POST["captcha_code"] == $_SESSION["captcha_code"]) { //jika kode captcha yang diinputkan = kode captcha yang ada didalam session, maka :
    $login=mysqli_query($con,$sql); //inisialisai variabel login
    $ketemu=mysqli_num_rows($login); //inisialisasi variabel ketemu yang menampung variabel login
    $r= mysqli_fetch_array($login); //inisialisasi variabel r yang menampung variabel login untuk mengambil data dalam bentuk array

    if ($ketemu > 0){ // jika variabel ketemu > 0 (jika data yang dimasukkan ada, maka)
        // session untuk username dan password
        $_SESSION['iduser'] = $r['id_user'];
        $_SESSION['passuser'] = $r['password'];
        echo"USER BERHASIL LOGIN<br>"; // dan user berhasil login
        // menampilkan username dan password user
        echo "id user =",$_SESSION['iduser'],"<br>";
        echo "password=",$_SESSION['passuser'],"<br>";
        echo "<a href=logout.php><b>LOGOUT</b></a></center>"; //logout yang akan diarahkan ke logout.php
    }
    else{ //jika variabel ketemu 0 atau < 0 (data yang dimasukkan tidak ada, maka)
    echo "<center>Login gagal! username & password tidak benar<br>"; // login gagal
    echo "<a href=form_login.php><b>ULANGI LAGI</b></a></center>"; // akan diarahkan kembali kehalaman form_login.php
    }
    mysqli_close($con); //menutup koneksi databese
}
else { //jika kode captcha yang diinputkan salah atau tidak sama dengan kode yang ada didalam session, maka :
    echo "<center>Login gagal! Captcha tidak sesuai<br>"; //akan ada pemberitahuan bahwa login gagal karena captcha tidak sesuai
    echo "<a href=form_login.php><b>ULANGI LAGI</b></a></center>"; //link yang mengarahkan kembali ke halaman form_login.php
}
?>