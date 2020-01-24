<?php
Class Pendaftaran
{
public function __constructor($a) {
    echo "Pendaftaran Santri baru".$a;
}
static protected $Namaorang = [
    ["nama = Satria",
     "nik = 002.12" ],
["nama => Bambanx",
 "nik => 003-13"]
];
public static function order($jejeng) {
    echo "Santri yang Sudah mendaftar :"."\n";
    $nama=self::$Namaorang;
    print_r($nama);
    echo " Berapa Santri Yang mendaftar :";
    $jejeng = (int) fgets(STDIN);
    echo "nama :";
    $santri1 = (int) fgets(STDIN);
    echo "nik  :";
    $santri2 = (int) fgets(STDIN);
    for ($i=0; $i <= $jejeng ; $i++){ 
        echo "nama :".trim (fgets(STDIN));
        echo "nik  :".trim (fgets(STDIN));
       
    }
    }
}

Pendaftaran::order($jejeng);

?>