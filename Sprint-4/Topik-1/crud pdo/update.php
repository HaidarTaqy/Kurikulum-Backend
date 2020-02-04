<?php 
include('library.php');
$lib = new Library();
if(isset($_GET['id'])){
    $id = $_GET['id']; 
    $harga = $lib->get_by_id($id);
}
else
{
    header('Location: indeks.php');
}
 
if(isset($_POST['klik'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $status_update = $lib->update($id,$nama,$harga);
    if($status_update)
    {
        header('Location:indeks.php');
    }
}
?>
<html>
    <head>
        <title>Update</title>
        <style>
        .kotak{
            background-color: salmon;
            border: 10px solid ;
            padding: 30px 35px;
            margin: -10px -50px;
            text-align:align center;
            color: #fff;   
        }
        .word5 { word-spacing: 100px; } 
        </style>
    </head>
    <body>
    <div class="kotak">
                <h3>Update Data Barang</h3>
            <form method="post" action="">
                <input type="hidden" name="id" value="<?php echo $harga['id']; ?>"/>
                    <label for="nama" class="">Nama Barang : </label>
                    <input type="text" name="nama" class="" id="nama" value="<?php echo $harga['nama']; ?>">
                    <p class="word5"></p>
                    <label for="harga" class="">Harga Barang : </label>
                    <input type="number" value="<?php echo $harga['harga']; ?>" name="harga" class="" id="harga">
                    <input type="submit" name="klik" class="klik" value="Update">
                   </div>
            </form>
    </body>
</html>