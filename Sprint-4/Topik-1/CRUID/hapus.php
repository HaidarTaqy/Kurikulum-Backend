<?php 

include 'koneksi.php';

$id = $_GET['id'];

 
mysqli_query($koneksi,"DELETE FROM base WHERE id='$id'");
 
header("location:indeks.php");
 
?>