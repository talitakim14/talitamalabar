<html>
<head>
	<title>Tabel Kendaraan</title>
</head>
<body>
 
	<h3>TABEL KENDARAAN</h3>
	<br/>
	<a href="index.php">Kembali</a>
	<br/>
	<br/>
	<h3>Edit Data Kendaraan</h3>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from kendaraan where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>Jenis</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>No. Polisi</td>
					<td><input type="number" name="nomor" value="<?php echo $d['nomor']; ?>"></td>
				</tr>
				<tr>
					<td>Merk</td>
					<td><input type="text" name="merk" value="<?php echo $d['merk']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>