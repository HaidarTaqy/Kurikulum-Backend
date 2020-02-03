<?php 
$koneksi = mysqli_connect("localhost","Haidar","Haidar646","Data");
 
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>