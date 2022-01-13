<?php  

include "config.php";

$sql = "SELECT * FROM alumni ORDER BY nis ASC";
$result = mysqli_query($conn, $sql);

?>