<?php
function numberDivision(int $devidend, int $divisor): float {
    if ($divisor === 0) {
        // echo 'Pembagi tidak boleh 0';
        throw new Exception("Error Processing Request", 1);
    }
    $quotient= $devidend / $divisor;
    return $quotient;
    
}
numberDivision(5,3);
numberDivision(5,0);