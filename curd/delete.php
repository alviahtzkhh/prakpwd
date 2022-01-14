<?php  
if(isset($_GET['id'])){
   include "../config.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_GET['id']);

	$sql = "DELETE FROM alumni
	        WHERE id=$id";
   $result = mysqli_query($conn, $sql);
   if ($result) {
   	  header("Location: ../dashboard.php?success=Data berhasil dihapus");
   }else {
      echo "<script>alert('Data gagal dihapus');
      window.location.href='index.php';</script>;</script>";
      
   }
}else {
	header("Location: ../dashboard.php");
}