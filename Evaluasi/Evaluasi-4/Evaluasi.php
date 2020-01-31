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
  function Data(){
    $data ="INSERT INTO Santri(nama,nilai) VALUES ('Haidar','45')";
    $Data1 =$this->connect->prepare($data);
    $Data1->execute();
    $hasill=$Data1->fetchAll(pdo::FETCH_ASSOC);
    print_r($hasill);
    $data ="SELECT * FROM Santri";
        $Data1 =$this->connect->prepare($data);
        $Data1->execute();
        $hasil=$Data1->fetchAll(pdo::FETCH_ASSOC);
        print_r($hasil);
  }

 function Data2(){
    $query ="SELECT AVG(nilai) FROM Santri";
    $rata2 =$this->connect->prepare($query);
    $rata2->execute();
    $hasil1=$rata2->fectAll(pdo::FECTH_ASSOC);
    print_r($hasil1);
    echo "Hasil Input :".$hasil1;
 }
}
$bembenx = new DataSantri();
echo "Tambah data: ";
$input = trim (fgets(STDIN));
echo "Data : ";
$input1 = trim (fgets(STDIN));
if ($input == "1") {
    $bembenx->Data();
$input1->Data();