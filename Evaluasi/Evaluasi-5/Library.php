<?php
class Library {
function __construct(){
    $host = "localhost";
    $dbname= "Santri";
    $nama= "Haidar";
    $password= "Haidar646";
   $this->konek= new PDO("mysql::host={$host};dbname={$dbname}", $nama, $password);
    }
    function tambah_data($nama,$alamat){
        $data = $this->konek->prepare("INSERT INTO datas (nama,alamat) VALUES ('$nama','$alamat')");
        $data->bindParam(1, $nama);
        $data->bindParam(2, $alamat);
        $data->execute();
        return $data->rowCount();
    }
    function tampil()
    {
        $query = $this->konek->prepare("SELECT * FROM datas");
        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }
    function id($id)
    {
        $query = $this->konek->prepare("SELECT * FROM datas where id=$id");
        $query->bindParam(1, $id);
        $query->execute();
        return $query->fetch();
    }
    function update()
    {
        $query = $this->konek->prepare("UPDATE datas set nama='$nama',alamat='$alamat' where id='$id'");
        $query->bindParam(1, $nama);
        $query->bindParam(2, $alamat);
        $query->bindParam(3, $id);
        $query->execute();
        return $query->rowCount();
    }
    function delete($id)
    {
        $query = $this->konek->prepare("DELETE FROM datas WHERE id='$id'");
        $query->bindParam(1, $id);
        $query->execute();
        return $query->rowCount();
    }
}