<?php
include "config.php"; 
header('Content-Type: text/xml'); 
$query = "SELECT * FROM alumni"; 
$hasil = mysqli_query($conn,$query); 
$jumField = mysqli_num_fields($hasil); 
echo "<?xml version='1.0'?>"; 
echo "<data>"; 
while ($data = mysqli_fetch_array($hasil)){ 
    echo "<alumni>"; 
    echo"<nis>",$data['nis'],"</nis>"; 
    echo"<nama>",$data['nama'],"</nama>"; 
    echo"<jurusan>",$data['jurusan'],"</jurusan>"; 
    echo"<angkatan>",$data['angkatan'],"</angkatan>"; 
    echo "</alumni>";
}
echo "</data>";
?>
