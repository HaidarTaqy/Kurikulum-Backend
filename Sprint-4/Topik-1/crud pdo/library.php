<?php
class Library
{
    public function __construct()
    {
        $host = "localhost";
        $dbname = "Data";
        $username = "Haidar";
        $password = "Haidar646";
        $this->db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
    }
    public function add_data($nama,$harga)
    {
        $data = $this->db->prepare("INSERT INTO base (namabarang,hargabarang) VALUES ('$nama','$harga')");
        $data->bindParam(1, $nama);
        $data->bindParam(2, $harga);
        $data->execute();
        return $data->rowCount();
    }
    public function show()
    {
        $query = $this->db->prepare("SELECT * FROM base");
        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }
 
    public function get_by_id($id){
        $query = $this->db->prepare("SELECT * FROM base where id=$id");
        $query->bindParam(1, $id);
        $query->execute();
        return $query->fetch();
    }
 
    public function update($id,$nama,$harga){
        $query = $this->db->prepare("UPDATE base set namabarang='$nama',hargabarang='$harga' where id='$id'");
        $query->bindParam(1, $nama);
        $query->bindParam(2, $harga);
        $query->bindParam(3, $id);

        $query->execute();
        return $query->rowCount();
    }
 
    public function delete($id)
    {
        $query = $this->db->prepare("DELETE FROM base where id='$id'");
        $query->bindParam(1, $id);
        $query->execute();
        return $query->rowCount();
    }
 
}
?>