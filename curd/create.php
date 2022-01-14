<?php
if(isset($_POST['create'])) {
        $nis = $_POST['nis'];
        $nama = $_POST['nama'];
        $jurusan = $_POST['jurusan'];
        $angkatan = $_POST['angkatan'];

        include_once("../config.php");
            
        $result = mysqli_query($conn, "INSERT INTO alumni(nis,nama,jurusan,angkatan)
        VALUES('$nis','$nama', '$jurusan','$angkatan')");
        
        header("Location: ../dashboard.php?success=Data berhasil ditambahkan");
}    
?>