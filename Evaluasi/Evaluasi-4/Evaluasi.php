<?php
class DataSantri
{
    protected 
        $localhost='localhost',
        $nama='Haidar',
        $password='Haidar646';

 function __construct(){
    $this->connect=new PDO("mysql:host=$this->localhost;dbname=parasantri",$this->nama,$this->password);
 }
 function input(){
        $data ="SELECT * FROM Santri";
        $Data1 =$this->connect->prepare($data);
        $Data1->execute();
        $hasil=$Data1->fetchAll(pdo::FETCH_ASSOC);
        print_r($hasil);
  }
  function Data(){
        echo "Tambah data: ";
        $input0 = trim (fgets(STDIN));
        echo "Masukkan Nama : ";
        $output1 = trim (fgets(STDIN));
        echo "Masukkan Nilai : ";
        $output = trim (fgets(STDIN));
        $input0 ="INSERT INTO Santri(nama,nilai) VALUES ('$output1','$output')";
        $Data1 =$this->connect->prepare($input0);
        $Data1->execute();
        $this->input();
    }
    function rus(){
        $query ="SELECT COUNT(id) FROM Santri";
        $rata2 =$this->connect->prepare($query);
        $rata2->execute();
        $hasil1=$rata2->fetchAll(pdo::FETCH_ASSOC);
        print_r($hasil1);
    }
 function ruis(){
        $query ="SELECT AVG(nilai) FROM Santri";
        $rata2 =$this->connect->prepare($query);
        $rata2->execute();
        $hasil1=$rata2->fetchAll(pdo::FETCH_ASSOC);
        print_r($hasil1);
    }
    function tepo(){
        $query ="SELECT * FROM Santri WHERE nilai >=80";
        $rata2 =$this->connect->prepare($query);
        $rata2->execute();
        $hasil1=$rata2->fetchAll(pdo::FETCH_ASSOC);
        print_r($hasil1);
    }
    function tipu(){
        $query ="SELECT * FROM Santri WHERE nilai <=65";
        $rata2 =$this->connect->prepare($query);
        $rata2->execute();
        $hasil1=$rata2->fetchAll(pdo::FETCH_ASSOC);
        print_r($hasil1);
    }
    
}
echo"********************************"."\n";
echo " 1. Menampilkan input : "."\n";
echo " 2. Menampilkan Hitung data : "."\n";
echo " 3. Menambahkan data : "."\n";
echo " 4. Menampilkan rata rata : "."\n";
echo " 5. Menampilkan data yang lebih dari sama dengan 80 : "."\n";
echo " 6. Menampilkan data yang kurang dari sama dengan 65 : "."\n";
$bembenx = new DataSantri();
echo "Data : ";
$input1 = trim (fgets(STDIN));
if ($input1 == "1") {
    $bembenx->input();
}if ($input1 == "2") {
    $bembenx->rus();
}if ($input1 == "3") {
    $bembenx->Data();
}if ($input1 == "4") {
    $bembenx->ruis();
}if ($input1 == "5") {
    $bembenx->tepo();
}if ($input1 == "6") {
    $bembenx->tipu();
}