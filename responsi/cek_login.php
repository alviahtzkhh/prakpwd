<?php 
session_start();
include 'config.php';

$email = $_POST['email'];
$password = ($_POST['password']);
$sql = "SELECT * FROM admin WHERE email='$email' AND password='$password'";
if ($_POST["captcha_code"] == $_SESSION["captcha_code"]){
	$result = mysqli_query($conn, $sql);
	$ketemu=mysqli_num_rows($result); 
    $r= mysqli_fetch_array($result); 
	if ($ketemu > 0){ 
        $_SESSION['username'] = $r['username'];
        echo"USER BERHASIL LOGIN<br>"; 
		header("Location: dashboard.php"); 
    } else{
		echo "<script>alert('Email dan Password tidak sesuai!');
		window.location.href='index.php';</script>";
	}
}else if ($_POST["captcha_code"] != $_SESSION["captcha_code"]){
	echo "<script>alert('Kode Captcha tidak sesuai!');
	window.location.href='index.php';</script>";
}

?>