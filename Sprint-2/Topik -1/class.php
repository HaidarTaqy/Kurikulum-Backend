<?php
class GeraiMiAyam
{
protected $ingredients = [
    'mi', 'sawi', 'ayam', 'garam', 'rempah',
];
public function order($level)
{
    $miAyam = $this->ingredients;
    print_r($miAyam);
    echo "MiAyam ". $level . "\n";
}
    protected function cook(): MiAyam
   {
    $miAyam = boil($ingredients);

    return $miAyam;
   }
}
