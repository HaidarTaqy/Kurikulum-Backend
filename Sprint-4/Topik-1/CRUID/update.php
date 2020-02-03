<?php 

include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
 
mysqli_query($koneksi,"UPDATE base SET namabarang='$nama', hargabarang='$harga' where id='$id'");
 
header("location:indeks.php");
 
?>