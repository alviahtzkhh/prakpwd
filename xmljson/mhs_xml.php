<?php
include "../curd/koneksi.php"; //menyertakan koneksi database menggunakan file koneksi.php yang sudah dibuat pada pertemuan 3 yang berada didalam folder curd
header('Content-Type: text/xml'); //header dengan tipe konten nya xml
$query = "SELECT * FROM mahasiswa"; //query untuk menampilkan semua data dari tabel mahasiswa yang diinisialisasikan kedalam variabel query
$hasil = mysqli_query($con,$query); //mengirimkan query kedalam database yang diinisialisasikan kedalam variabel hasil
$jumField = mysqli_num_fields($hasil); //mengembalikan jumlah bidang (kolom) dalam set hasil yang diinisialisasikan kedalam variabel jumField
echo "<?xml version='1.0'?>"; //versi xml
echo "<data>"; //menampilkan data
while ($data = mysqli_fetch_array($hasil)){ //perulangan untuk menampung baris tabel menjadi array
    echo "<mahasiswa>"; //menampilkan teks mahasiswa ke layar
    echo"<nim>",$data['nim'],"</nim>"; //menampilkan teks nim ke layar berdasarkan nim yang ada di dalam database
    echo"<nama>",$data['nama'],"</nama>"; //menampilkan teks nama ke layar berdasarkan nama yang ada di dalam database
    echo"<jkel>",$data['jkel'],"</jkel>"; //menampilkan teks jkel ke layar berdasarkan jkel yang ada di dalam database
    echo"<alamat>",$data['alamat'],"</alamat>"; //menampilkan teks alamat ke layar berdasarkan alamat yang ada di dalam database
    echo"<ttl>",$data['ttl'],"</ttl>"; //menampilkan teks ttl ke layar berdasarkan ttl yang ada di dalam database
    echo "</mahasiswa>";
}
echo "</data>";
?>