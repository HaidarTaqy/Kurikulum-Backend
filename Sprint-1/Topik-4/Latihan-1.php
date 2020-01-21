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
//Mean
sort($arr);
print_r($arr);
echo "\n";
$p  = array_sum($arr);
$key1 = count($arr);

echo "Mean";
echo "\n";
echo $p/$key1;
echo "\n";
echo "\n";


echo "Median";
echo "\n";
$key2 = round(($key1)/2);
$hasilMedian = $arr [$key2-1];
echo $hasilMedian;
echo "\n";


echo "Modus";
echo "\n";
$mencari1=array_count_values($arr);
print_r($mencari1);
foreach ($mencari1 as $key => $value) {
    if ($value == MAX($mencari1)) {
        echo "MODUS Adalah ", $key, " Dengan Data sebanyak ",$value,"\n";
    }
}

?>