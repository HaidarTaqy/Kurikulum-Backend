<?php 
include('Library.php');
$lib = new Library();
if(isset($_POST['klik'])){
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
 
    $add_status = $lib->tambah_data($nama, $alamat);
    if($add_status){
    header('Location: index1.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BUAT NAMBAH DATA COY</title>
    <style>
    .kotak 
    {
        background-color: salmon;

    }
    </style>
</head>
<body>
<div class="kotak" align="center">
                <h3>Tambah Data Santri</h3>
           <form action="" method="post">
                    <label for="nama" class=>Nama Santri :</label>
                    <input type="text" name="nama" class="" id="nama">
                    <p class="word5"></p>
                    <label for="alamat" class="">Alamat Santri :</label>
                    <input type="text" name="alamat" class="" id="alamat">
                    <p class="word5"></p>
                    <input type="submit" name="klik" class="button" value="Tambah">
             </form>
             </div>
    </body>
</html>
</body>
</html>
