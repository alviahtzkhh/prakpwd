<?php
$url = "https://oreobiru.000webhostapp.com/getdatamhs.php"; //url file yang menampilkan data mahasiswa dari database yang sudah di hosting
$client = curl_init($url); //library untuk mentransfer data
curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);//mengembalikan transfer sebagai string
$response = curl_exec($client); //berisi output string dari url tersebut
$result = json_decode($response); //menyandikan hasil $response kedalam format json

//menampilkan data sesuai dengan data yang diambil dari database
foreach ($result as $r) {
    echo "<p>";
    echo "NIM : " . $r->nim . "<br />";
    echo "Nama : " . $r->nama . "<br />";
    echo "jenis kel : " . $r->jkel . "<br />";
    echo "Alamat : " . $r->alamat . "<br />";
    echo "Tgl Lahir : " . $r->ttl . "<br />";
    echo "</p>";
}
?>