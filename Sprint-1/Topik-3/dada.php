<?php
for ($i=1; $i<10; $i++) {
    for ($j=9; $j >$i; $j--) {
        echo " - ";
    }for ($k=0; $k < $i; $k++) {
        echo "+";
    }
    echo "<br>";
}
?>