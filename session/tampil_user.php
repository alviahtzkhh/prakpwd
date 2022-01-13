<?php 
echo "<h2>User</h2> 
<form method=POST action=form_user.php> 
<input type=submit value='Tambah User'>
</form>
<table>
<tr><th>No</th><th>Username</th><th>NamaLengkap</th><th>Email</th><th>Aksi</th></tr>"; 

include "../curd/koneksi.php"; //menyertakan koneksi database menggunakan file koneksi.php yang sudah dibuat pada pertemuan 3 yang berada didalam folder curd
$sql="select * from users order by id_user"; // menampilkan semua data dari tabel users berdasarkan primary key (id_user)
$tampil = mysqli_query($con,$sql); //inisialisai variabel tampil 
    if (mysqli_num_rows($tampil) > 0) { // untuk mengetahui seberapa banyak baris data dalam database
        $no=1; // inisialisasi nomor dari 1
        // perulangan untuk menampilkan data
        while ($r = mysqli_fetch_array($tampil)){
            echo "<tr><td>$no</td><td>$r[id_user]</td><td>$r[nama]</td><td>$r[email]</td>
            <td><a href='hapus_user.php?id=$r[id_user]'>Hapus</a></td></tr>"; // jika tulisan hapus diklik maka data akan dihapus yang akan diarahkan kehalaman hapus_user.php
            $no++; // jika data ditambahkan maka nomor akan bertambah 1
        }
        echo "</table>";
    } else {
    echo "0 results";
    }
    mysqli_close($con); // menutup koneksi database
?>