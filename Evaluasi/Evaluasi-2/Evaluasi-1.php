<?php
$students = [
    'IT-001' => 'Ridwan'."<br>",
    'IT-010' => 'Achmad'."<br>",
    'IT-005' => 'Yusuf'."<br>",
    'IT-002' => 'Arief'."<br>",
    'IT-004' => 'Dayat'."<br>",
    'IT-017' => 'Lutfi'."<br>",
];
ksort($students);
print_r($students)."";
echo "<br>";
arsort($students);
print_r($students);