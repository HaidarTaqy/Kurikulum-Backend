<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar:)</title>
</head>
<body>
<form action="" method="post">
    <input type="number" name="nomer" id="nomer1">
    <select name="operator" id="operator">
      <option value="+">+</option>
      <option value="-">-</option>
      <option value="/">/</option>  
      <option value="*">*</option>    
    </select>
    <input type="number" name="nomer1" id="nomer1">
    <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>
<?php
$nomer = $_POST['nomer'];
$nomer1 = $_POST['nomer1'];
$operator = $_POST['operator'];
if (isset($_POST['submit'])) {
  if ($operator == '+') {
    echo "Hasilnya", $nomer + $nomer1;
  }
  if ($operator == '-') {
    echo "Hasilnya", $nomer - $nomer1;
  }
  if ($operator == '*') {
    echo "Hasilnya", $nomer * $nomer1;
  }
  if ($operator == '/') {
    echo "Hasilnya", $nomer / $nomer1;
  }
}
    
?>
<!-- $nomer untuk menujukan input 'nomer'
$nomer1 untuk menujukan input 'nomer1'
$operator untuk menujukan input 'operator'
if ($operator == '+') {
    echo "Hasilnya", $nomer + $nomer1;
    itu jika operator itu + maka nomer dan nomer1 ditambah
if ($operator == '-') {
    echo "Hasilnya", $nomer - $nomer1;
    itu jika operator itu - maka nomer dan nomer1 dikurang 
if ($operator == '*') {
    echo "Hasilnya", $nomer * $nomer1;
    itu jika operator itu * maka nomer dan nomer1 dikali
if ($operator == '/') {
    echo "Hasilnya", $nomer / $nomer1;
    itu jika operator itu / maka nomer dan nomer1 dibagi-->