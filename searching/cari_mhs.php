<?php
include "../curd/koneksi.php"; //menyertakan koneksi database menggunakan file koneksi.php yang sudah dibuat pada pertemuan 3 yang berada didalam folder curd
?>
<h3>Form Pencarian Dengan PHP MAHASISWA</h3> <!--header-->
<form action="" method="get"> <!--form dengan method get-->
    <label>Cari :</label>
    <input type="text" name="cari"> <!--input dengan type text-->
    <input type="submit" value="Cari"> <!--input dengan type submit-->
</form>

<?php
if(isset($_GET['cari'])){ //jika variabel sudah didefinisikan,
$cari = $_GET['cari']; //mendefinisikan variabel cari
echo "<b>Hasil pencarian : ".$cari."</b>"; //maka hasil pencarian ditampilkan dengan nilai yang ada didalam variabel tsb
}
?>
<table border="1"> <!--table dangan border 1-->
    <tr> <!--tag untuk membuat kolom disetiap baris-->
        <!--header kolom pada table-->
        <th>No</th>
        <th>Nama</th>
    </tr>
    <?php
    if(isset($_GET['cari'])){ //jika inputan yang dimasukkan user sudah terdefinisi dalam variabel cari, 
        $cari = $_GET['cari']; //mendefinisikan variabel cari
        $sql="select * from mahasiswa where nama like'%".$cari."%'"; //mendefinisikan variabel sql yang didalamnya menampilkan semua data dari mahasiswa dimana nama = seperti yang ada didalam variabel cari (seperti yang di inputkan user)
        $tampil = mysqli_query($con,$sql); //mendefinisikan variabel tampil untuk menampilkan data pada layar
    }else{ //jika inputan yang dimasukkan user tidak terdefinisi dalam variabel cari, 
        $sql="select * from mahasiswa"; //mendefinisikan variabel sql untuk menampilkan semua data pada tabel mahasiswa
        $tampil = mysqli_query($con,$sql); //mendifinisikan variabel tampil untuk menampilkan semua data yang ada didalam table mahasiswa ke layar
    }
    $no = 1; //mendefinikan variabel no yang berawal dari 1
    while($r = mysqli_fetch_array($tampil)){ //dan akan berulang sebanyak jumlah data yang ada didalam variabel tampil
    ?>
    <tr> <!--tag untuk membuat kolom disetiap baris-->
        <td><?php echo $no++; ?></td> <!--menampilkan variabel no yang berulang-->
        <!--mengambil variabel yang ada di database kemudian ditampilkan dilayar-->
        <td><?php echo $r['nama']; ?></td>
    </tr>
<?php } ?>
</table>
