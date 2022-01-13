<?php
include "config.php"; 
$sql="select * from alumni order by id"; 
$tampil = mysqli_query($conn,$sql); 
if (mysqli_num_rows($tampil) > 0) { 
    $no=1; 
    $response = array(); 
    $response["data"] = array(); 
    while ($r = mysqli_fetch_array($tampil)) { 
        $h['nis'] = $r['nis']; 
        $h['nama'] = $r['nama']; 
        $h['jurusan'] = $r['jurusan']; 
        $h['angkatan'] = $r['angkatan']; 
        array_push($response["data"], $h); 
    }
    echo json_encode($response); 
}else {
    $response["message"]="tidak ada data"; 
    echo json_encode($response); 
}
?>
