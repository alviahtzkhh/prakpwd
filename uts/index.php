<?php
// Create database connection using config file
include_once("koneksi.php");
// Fetch all users data from database
$result = mysqli_query($con, "SELECT * FROM pendaftaran ");
?>
<html>
    <head>
        <title>Halaman Utama</title>
    </head>
    
    <body>
        <a href="tambah.php">Tambah Data Baru</a><br/><br/>
        <table width='80%' border=1>
            <tr>
                <th>nik</th> <th>nama</th>  <th>Alamat</th> <th>Aksi</th>
            </tr>
            
            <?php
            while($user_data = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>".$user_data['nik']."</td>";
                echo "<td>".$user_data['nama']."</td>";
                echo "<td>".$user_data['alamat']."</td>";
                echo "<td><a href='edit.php?nik=$user_data[nik]'>Edit</a> | 
                <a href='delete.php?nik=$user_data[nik]'>Delete</a></td></tr>";
            }
            ?>
        </table>
    </body>
</html>
