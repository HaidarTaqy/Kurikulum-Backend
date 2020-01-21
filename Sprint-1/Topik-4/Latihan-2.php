<?php
echo "Masukan Jumlah : ";
$int = (int) fgets(STDIN);

for ($i=0; $i < $int ; $i++) { 
    echo "Masukan Nilai : ";
    $nilai = (int) fgets(STDIN);
    $arr[] = $nilai;
}
sort($arr);
print_r($arr);
$r2 =array_unique($arr);
$r = array_reverse($r2);
$s = array_slice($r,0,3);
echo "\n";
echo"HASIL Tertinggi";
echo "\n";
print_r($s);

// MENCARI RENDAH
print_r($arr);
rsort($arr);
$re = array_reverse($arr);
$sl = array_slice($re,0,3);
echo "\n";
echo"HASIL Terendah";
echo "\n";
print_r($sl);
?>