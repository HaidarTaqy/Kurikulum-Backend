<?php
if (isset($_GET['Kirim1'])) {
    $kurir= $_GET['kurir'];
    $pengirim= $_GET['pengirim'];
    $asal= $_GET['asal'];
    $tujuan= $_GET['tujuan'];
    echo "Nama Kurir :". $kurir."<br>". "Nama Pengirim :". $pengirim."<br>". "Asal Barang :". $asal."<br>". "Tujuan Barang :". $tujuan;
}