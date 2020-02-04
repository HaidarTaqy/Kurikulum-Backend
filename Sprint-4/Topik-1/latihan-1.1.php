<?php
if (isset($_POST['Kirim'])){
    $barang= $_POST['barang'];
    $list= $_POST['list'];
    echo "Nama Barang :".$barang ."<br>";
    echo "Harga :". $list . "<br>";
}
 
  