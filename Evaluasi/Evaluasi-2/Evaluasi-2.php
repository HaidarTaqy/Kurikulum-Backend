<?php

function countTriangle($base,$height) {
    echo "Luas Segitiga =". 1/2 * $base * $height;
}
echo countTriangle(4,8);
echo "<br>";
function countRectangle($width,$length) {
    echo "Luas persegi =". $width*$length;
    echo "<br>";
    echo "Keliling persegi =". (2*($width+$length)) ;
}
echo countRectangle(5,5);
echo"<br>";
function countCircle($radius,$diameter) {
    echo "Luas Lingkaran =". 22/7*$diameter;
    echo "<br>";
    echo "Keliling Lingkaran =". 2*22/7*$radius;
}
echo countCircle(7,14);
