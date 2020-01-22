<?php
class PersegiPanjang
{
    public function __construct(){

    }
    public static function mesan($beli,$beli1) {
        echo "Hasil :". 2*$beli*$beli1."\n";
    }
    
  }
  echo "PERHITUNGAN LUAS PERSEGI PANJANG"."\n";
  echo "Panjang Persegi panjang :";
  $beli= (int) fgets(STDIN);
  echo "Lebar Persegi panjang :";
  $beli1= (int) fgets(STDIN);
PersegiPanjang ::mesan($beli,$beli1);