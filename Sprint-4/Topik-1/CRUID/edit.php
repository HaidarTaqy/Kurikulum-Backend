<!DOCTYPE html>
<html>
<head>
	<title>Data Menghitung</title>
</head>
<body>
 
	<h2>Data Menghitung barang</h2>
	<br/>
	<a href="indeks.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT Barang</h3>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from base where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>Nama</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="nama" value="<?php echo $d['namabarang']; ?>">
					</td>
				</tr>
				<tr>
					<td>Harga Barang</td>
					<td><input type="number" name="harga" value="<?php echo $d['hargabarang']; ?>"></td>
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