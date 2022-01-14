<?php include 'curd/update.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style2.css">
</head>
<body>
	<div class="container">
		<form action="curd/update.php" method="post">
		   <h4 class="display-4 text-center">Edit Data</h4><hr><br>
		   <?php if (isset($_GET['error'])) { ?>
		   <div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
		    </div>
		   <?php } ?>
           <div class="form-group">
		    	<label for="nis">NIS</label>
		     	<input type="nis" 
					class="form-control" 
		           	id="nis" 
		           	name="nis" 
		           	value="<?=$row['nis'] ?>" required>
		   </div>
		   <div class="form-group">
		     	<label for="nama">Nama</label>
		     	<input type="nama" 
		           	class="form-control" 
		           	id="nama" 
		           	name="nama" 
		           	value="<?=$row['nama'] ?>" required>
		   </div>
		   <div class="form-group">
		     	<label for="jurusan">Jurusan</label>
		     	<input type="jurusan" 
		           	class="form-control" 
		           	id="jurusan" 
		           	name="jurusan" 
		           	value="<?=$row['jurusan'] ?>" required>
		   </div>
           <div class="form-group">
		     	<label for="angkatan">Angkatan</label>
		     	<input type="angkatan" 
		           	class="form-control" 
		           	id="angkatan" 
		           	name="angkatan" 
		           	value="<?=$row['angkatan'] ?>" required>
		   </div>
		   <input type="text" 
		        	name="id"
		          	value="<?=$row['id']?>"
		          	hidden >

		   <button type="submit" 
		           	class="btn btn-primary"
		           	name="update">Edit</button>
		    <a href="dashboard.php" class="btn btn-primary">Lihat Data</a>
	    </form>
	</div>
</body>
</html>