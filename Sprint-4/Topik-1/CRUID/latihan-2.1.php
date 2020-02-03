<?php 

include 'koneksi.php';

$nama = $_POST['nama'];
$harga = $_POST['harga'];
 
mysqli_query($koneksi,"INSERT INTO base(namabarang,hargabarang)VALUES('$nama','$harga')");
 
header("location:indeks.php");
 
?>