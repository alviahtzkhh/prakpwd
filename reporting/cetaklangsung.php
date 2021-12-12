<?php
// Create database connection using config file
include_once("koneksi.php");
// Fetch all users data from database
$result = mysqli_query($con, "SELECT * FROM mahasiswa ");
?>
<html><center>
    <h2>DAFTAR MAHASISWA</h2>
    <body>
        <table width='80%' border=1>
            <tr>
                <th>Nim</th> <th>Nama</th> <th>Gender</th> <th>Alamat</th>
                <th>Tanggal lahir</th>
            </tr>
            
            <?php
            while($user_data = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>".$user_data['nim']."</td>";
                echo "<td>".$user_data['nama']."</td>";
                echo "<td>".$user_data['jkel']."</td>";
                echo "<td>".$user_data['alamat']."</td>";
                echo "<td>".$user_data['ttl']."</td>";
            }
            ?>
        </table>
        </body></center>
</html>

<script>
	window.print();
</script>