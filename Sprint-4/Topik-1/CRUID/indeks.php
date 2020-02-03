<html>
<head>
	<title>Data menghitung </title>
	<style>
        .kotak{
            background-color: salmon;
			table: center;
            border: 10px solid ;
            padding: 30px 35px;
            margin: -10px -50px;
            text-align:center;
            color: #fff;   
        }
        .word5 { word-spacing: 100px; }    
    </style>
</head>
<body>
<div class="kotak">
	<h2>Data Menghitung barang</h2>
	<br/>
	<a href="latihan-2.php">+ TAMBAH BARANG</a>
	<br/>
	<br/>
	<table border="1"align="center">
		<tr>
			<th>NO</th>
			<th>Nama Barang</th>
			<th>Harga Barang</th>
			<th>OPSI</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"SELECT * FROM base");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['namabarang']; ?></td>
				<td><?php echo $d['hargabarang']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
		</div>
	</table>
</body>
</html>