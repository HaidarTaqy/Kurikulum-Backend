<?php
class Noob 
{
 public $buku = 
 [
     [ "Judul :  " => "Buku Bahasa Inggris",
       "ISBN  : "  => 590-12-2134121-22,
       "Jumlah Buku tersedia : " => 10
     ],
     ["Judul : " => "Buku Matematika",
       "ISBN  : " => 590-4-132-2-3-324-2,
       "Jumlah Buku tersedia : " => 10
     ]
 ];
public function __construct() {
    $Judul = $this->buku;
    print_r($Judul);
   
}
public function Noub($jurnal) {
        $Kunci = $this->buku[$jurnal];
        print_r($Kunci);
        return $Kunci;
    }
}
$erere = new Noob;
echo "Pinjam Buku 0-1 :";
$jurnal = (int) fgets(STDIN);
$erere->Noub($jurnal);
echo "Pinjam Buku Berapa :";
$key = (int) fgets(STDIN);
// $mybook = $Kunci["Jumlah Buku tersedia : "];
// $jml = $mybook-$key;
// echo "Sisa :".$jml."\n";
// echo "TANGGAL DIKEMBALIKAN 22 AGUSTUS 2020"."\n";
// echo "Balikin Buku Berapa :";
// $kembalikan = (int) fgets(STDIN);
// $balik = $jml+$kembalikan."\n";
// echo "Stock buku :".$balik;

function numberDivision(int $devidend, int $key): float {
    if ($key < 0) {
        // echo 'Pembagi tidak boleh 0'; 
        throw new Exception("Error Processing Request");
        
    }
    $quotient= $devidend / $key;
    return $quotient;
}
$result= null;
try {
    $result =numberDivision(5,$key);
}catch(Exception $e){
    echo "Eror Slurd :". __FILE__."\n"."BARIS KE :".$e->getline()."\n";
}

echo "Hasil :". $result."\n";


