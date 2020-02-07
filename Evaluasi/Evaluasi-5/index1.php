 <?php
 session_start();
 if (!isset($_SESSION)) {
     header("location:index.php");
 }
include('Library.php');
$lib = new Library();
$data = $lib->tampil();
 
if(isset($_GET['hapus_data']))
{
    $id1 = $_GET['hapus_data'];
    $status_hapus = $lib->delete($id1);
    if($status_hapus)
    {
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
    <title>Index Kedua</title>
    <style>
    .kotak 
    {
        background-color: salmon;

    }
    .word5 { word-spacing: 100px; }  
    
    </style>
</head>
<body>
<form action="" method="get">
<div class="kotak"align="center">
                <h3>Data Barang</h3>
               <p class="word5"></p>
                <a href="create.php" >Tambah Data</a>->
                <p class="word5"></p>
                <table border="1"align="center">
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Harga Barang</th>
                        <th>OPSI</th>
                    </tr>
                    <?php 
                    $no = 1;
                    foreach($data as $jud)
                    {
                        echo "<tr>";
                        echo "<td>".$no."</td>";
                        echo "<td>".$jud['nama']."</td>";
                        echo "<td>".$jud['alamat']."</td>";
                        
                        echo "<td><a class='' href='mengubah.php?id=".$jud['id']."'>Update</a>
                        <a class='' href='index1.php?hapus_data=".$jud['id']."'>Hapus</a></td>";
                       
                        echo "</tr>";
                        $no++;
                    }
                    ?>
                </table>
             </form>
             <form method="post" align="Right">
             <input type="submit" name="logout" value="logout">
             </form>
</body>
</html>
<?php
session_unset();
if (iseet($_POST['logout'])) {
    header("location: index.php");
}