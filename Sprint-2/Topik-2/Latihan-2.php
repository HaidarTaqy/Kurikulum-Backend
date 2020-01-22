<?php
class PersegiPanjang
{
    public function __construct(){

    }
    public static function mesan($beli1) {
        echo "Hasil :". (22/7 *$beli1) ."\n";
    }
    public static function order($beli,$beli3,$beli4) {
        echo "Hasil :".(($beli+$beli3)*$beli4)/2 ."\n";
    }
    
  }
  echo "PERHITUNGAN LUAS LINGKARAN "."\n";
  echo "Diameter lingkaran :";
  $beli1= (int) fgets(STDIN);
PersegiPanjang ::mesan($beli1);
echo "PERHITUNGAN Trapesium sama kaki :"."\n";
  echo "Sisi Pertama :";
  $beli= (int) fgets(STDIN);
  echo "Sisi kedua :";
  $beli3= (int) fgets(STDIN);
  echo "Tinggi :";
  $beli4= (int) fgets(STDIN);
PersegiPanjang ::order($beli,$beli3,$beli4);
?>