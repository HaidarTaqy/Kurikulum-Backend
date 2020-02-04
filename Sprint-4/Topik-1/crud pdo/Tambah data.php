<?php 
include('library.php');
$lib = new Library();
if(isset($_POST['klik'])){
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
 
    $add_status = $lib->add_data($nama, $harga);
    if($add_status){
    header('Location: indeks.php');
    }
}
?>
<html>
    <head>
        <title></title>
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
                <h3>Tambah Data barang</h3>
           <form action="" method="post">
                    <label for="namabarang" class=>Nama Barang :</label>
                    <input type="text" name="nama" class="" id="nama">
                    <p class="word5"></p>
                    <label for="harga" class="">Harga Barang :</label>
                    <input type="number" name="harga" class="" id="harga">
                    <p class="word5"></p>
                    <input type="submit" name="klik" class="button" value="Tambah">
             </form>
             </div>
    </body>
</html>