<?php
include 'config.php';
?>
<html>
<head>
	<title>Cari Data</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style2.css">
</head>
<body>
	<div class="container">
		<div class="box">
            <div class="cari">
                <?php
                if(isset($_GET['cari'])){
                $cari = $_GET['cari'];
                echo "<b>Hasil pencarian : ".$cari."</b>";
                }?>
            </div><br>
            <table class="table table-striped">
			  	<thead>
			    	<tr>
			      		<th scope="col">No</th>
			      		<th scope="col">NIS</th>
                  		<th scope="col">Nama</th>
                  		<th scope="col">Jurusan</th>
			      		<th scope="col">Angkatan</th>
			    	</tr>
			  	</thead>       
                <?php
                if(isset($_GET['cari'])){
                    $cari = $_GET['cari'];
                    $sql="SELECT * FROM alumni WHERE nama LIKE '%".$cari."%'";
                    $tampil = mysqli_query($conn,$sql);
                }else{
                    $sql="SELECT * FROM alumni";
                    $tampil = mysqli_query($conn,$sql);
                }
                $no = 1;
                while($r = mysqli_fetch_array($tampil)){
                ?>
			    <tr>
			        <th scope="row"><?=$no?></th>
			        <td><?=$r['nis']?></td>
			        <td><?php echo $r['nama']; ?></td>
                    <td><?php echo $r['jurusan']; ?></td>
                    <td><?php echo $r['angkatan']; ?></td>
<?php } ?>
                </tr>
            </table>
            <center>
            <a href="lihat.php" class="btn btn-outline-light">Kembali</a>
        </div>
	</div>
</body>
</html>

