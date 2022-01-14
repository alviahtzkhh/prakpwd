<?php 

if (isset($_GET['id'])) {
        include "config.php";

	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }
        $id = validate($_GET['id']);
        $sql = "SELECT * FROM alumni WHERE id=$id";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
        }else {
    	        header("Location: dashboard.php");
        }
}else if(isset($_POST['update'])){
        include "../config.php";
        function validate($data){
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
	}

        $id = validate($_POST['id']);
        $nis = validate($_POST['nis']);
	$nama = validate($_POST['nama']);
	$jurusan = validate($_POST['jurusan']);
        $angkatan = validate($_POST['angkatan']);

        $sql = "UPDATE alumni
                SET nis='$nis', nama='$nama', jurusan='$jurusan',angkatan='$angkatan'
                WHERE id=$id ";
        $result = mysqli_query($conn, $sql);
        if ($result) {
       	        header("Location: ../dashboard.php?success=Data berhasil diedit");
        }else {
                echo "<script>alert('Data gagal diedit!')</script>";
        }
	
}else {
	header("Location: ../dashboard.php");
}