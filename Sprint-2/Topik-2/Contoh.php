<?php

class GeraiMiAyam
{
    public function __construct($a) {
        echo "contoh text".$a;
    }
    static protected $jajanan = [
        'mi','sawi','ayam','garam','rempah'
    ];
    public static function order($level)
    {
        $miAyam=self::$jajanan;
        print_r($miAyam);
        echo "Mi Ayam". $level ."\n"; 
    }
}
GeraiMiAyam::order(" Level 10000000000000");