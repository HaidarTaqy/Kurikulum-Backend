<?php
for($b=0; $b< 5; $b++){
    for($j=0; $j<=$b; $j++){
        echo"&nbsp;&nbsp";
    }for($z=5; $z>$b; $z--){
        echo"+";
    }for($n=4; $n>$b; $n--){
        echo"+";
    }echo"<br>";
}

for( $a=5; $a>0; $a--){
    for($i=0; $i< $a; $i++){
        echo "&nbsp;&nbsp";
    }for($z=5; $z>$a; $z--){
        echo"+";
    }for($n=6; $n>$a; $n--){
        echo"+";
    }echo"<br>";
}
?>