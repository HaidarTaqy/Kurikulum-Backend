<?php 
include('library.php');
$lib = new Library();
$data_barang = $lib->show();
 
if(isset($_GET['hapus_data']))
{
    $id_barang = $_GET['hapus_data'];
    $status_hapus = $lib->delete($id_barang);
    if($status_hapus)
    {
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
                <h3>Data Barang</h3>
               <p class="word5"></p>
                <a href="Tambah data.php">Tambah Data</a>->
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
                    foreach($data_barang as $row)
                    {
                        echo "<tr>";
                        echo "<td>".$no."</td>";
                        echo "<td>".$row['namabarang']."</td>";
                        echo "<td>".$row['hargabarang']."</td>";
                        
                        echo "<td><a class='' href='update.php?id=".$row['id']."'>Update</a>
                        <a class='' href='indeks.php?hapus_data=".$row['id']."'>Hapus</a></td>";
                       
                        echo "</tr>";
                        $no++;
                    }
                    ?>
                </table>
    </div>
    </body>
</html>