<?php
$host="localhost";
$username="id18174215_pwd2021";
$password="rBfBqv0er_9JH>Ic";
$databasename="id18174215_akademik";
$con=@mysqli_connect($host,$username,$password,$databasename);

if (!$con) {
    echo "Error: " . mysqli_connect_error();
    exit();
}
?>