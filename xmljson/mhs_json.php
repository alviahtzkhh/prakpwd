<?php
include "../curd/koneksi.php"; //menyertakan koneksi database menggunakan file koneksi.php yang sudah dibuat pada pertemuan 3 yang berada didalam folder curd
$sql="select * from mahasiswa order by nim"; //query untuk menampilkan semua data dari tabel mahasiswa berurutan berdasarkan nim yang diinisialisasikan kedalam variabel sql
$tampil = mysqli_query($con,$sql); //mengirimkan query kedalam database yang diinisialisasikan kedalam variabel tampil
if (mysqli_num_rows($tampil) > 0) { // jika jumlah baris di dalam tabel > 0, maka
    $no=1; // no = 1
    $response = array(); //inisialisasi array
    $response["data"] = array(); //mendapatkan data dalam bentuk array
    while ($r = mysqli_fetch_array($tampil)) { //perulangan untuk menampung baris tabel menjadi array
        $h['nim'] = $r['nim']; //menampilkan nim yang ada di dalam database kelayar
        $h['nama'] = $r['nama']; //menampilkan nama yang ada di dalam database kelayar
        $h['jkel'] = $r['jkel']; //menampilkan jkel yang ada di dalam database kelayar
        $h['alamat'] = $r['alamat']; //menampilkan alamat yang ada di dalam database kelayar
        $h['ttl'] = $r['ttl']; //menampilkan ttl yang ada di dalam database kelayar
        array_push($response["data"], $h); //untuk menambahkan array baru pada setiap data yang ada berdasarkan variabel h
    }
    echo json_encode($response); //menampilkan data dalam bentuk json
}else {
    $response["message"]="tidak ada data"; // jika jumlah baris dalam tabel < 0 atau tidak ada maka akan muncul pesan
    echo json_encode($response); //menampilkan data dalam bentuk json
}
?>