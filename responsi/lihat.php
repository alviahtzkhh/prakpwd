<?php 
include "curd/read.php"; 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Lihat</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style2.css">
</head>
<body>
	<div class="container">
		<div class="box">
			<h4 class="display-4 text-center">DATA ALUMNI</h4><br>
			<?php if (isset($_GET['success'])) { ?>
		    <div class="alert alert-success" role="alert">
			  <?php echo $_GET['success']; ?>
		    </div>
		    <?php } ?>
			<?php if (mysqli_num_rows($result)) { ?>
				<form action="carilihat.php" method="get">
					<div class="cari">
    					<label>Cari :</label>
    					<input type="text" name="cari">
    					<input type="submit" value="Cari" >
					</div>
				</form><br>
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
			    		</tr>
			    		<?php } ?>
			  		</tbody>
				</table>
			<?php } ?>
			<center><a href="xml.php" class="btn btn-outline-light">Lihat sebagai XML</a>
			<a href="unduh.php" class="btn btn-outline-light">Unduh Data</a>
			<a href="json.php" class="btn btn-outline-light">Lihat sebagai JSON</a>
		</div>
	</div>
</body>
</html>