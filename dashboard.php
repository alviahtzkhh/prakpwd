<?php 
session_start();
include "curd/read.php"; 
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style2.css">
</head>
<body>
	<div class="container">
		<div class="box">
			<h4 class="display-4 text-center">HALAMAN ADMIN</h4><br>
			<?php if (isset($_GET['success'])) { ?>
				<div class="alert alert-success" role="alert">
					<?php echo $_GET['success']; ?>
		    	</div>
		    	<?php } ?>
				<?php if (mysqli_num_rows($result)) { ?>
					<form action="cari.php" method="get">
						<div class="cari">
							<label>Cari :</label>
							<input type="text" name="cari" required>
							<input type="submit" value="Cari">
						</div>
					</form><br>
					<div>
						<a href="tambah.php" class="btn btn-success">+Tambah Data</a>
					</div><br>
					<table class="table table-striped">
			  			<thead>
			    			<tr>
			      				<th scope="col">No</th>
			      				<th scope="col">NIS</th>
                  				<th scope="col">Nama</th>
                  				<th scope="col">Jurusan</th>
			      				<th scope="col">Angkatan</th>
			      				<th scope="col">Aksi</th>
			    			</tr>
			  			</thead>
						<tbody>
							<?php 
			  	   			$i = 0;
			  	   			while($rows = mysqli_fetch_assoc($result)){
			  	   			$i++;
			  	 			?>
			    			<tr>
			      				<th scope="row"><?=$i?></th>
			      				<td><?=$rows['nis']?></td>
			      				<td><?php echo $rows['nama']; ?></td>
                  				<td><?php echo $rows['jurusan']; ?></td>
		                  		<td><?php echo $rows['angkatan']; ?></td>
					      		<td><a href="edit.php?id=<?=$rows['id']?>" 
			    		  	     	class="btn btn-success">Edit</a>

			      	  				<a href="curd/delete.php?id=<?=$rows['id']?>" 
			      	     			class="btn btn-danger">Hapus</a>
			      				</td>
			    			</tr>
							<?php } ?>
			  			</tbody>
					</table>
				<?php } ?>
			<center><a href="xml.php" class="btn btn-outline-light">Lihat sebagai XML</a>
			<a href="unduh.php" class="btn btn-outline-light">Unduh Data</a>
			<a href="json.php" class="btn btn-outline-light">Lihat sebagai JSON</a>
			<br><br>
			<a href="logout.php" class="btn-light">LOGOUT</a>
		</div>
	</div>
</body>
</html>