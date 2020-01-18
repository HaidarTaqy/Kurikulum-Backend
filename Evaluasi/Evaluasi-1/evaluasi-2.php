<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Suhu</title>
    <style>
body{
            background-color:#ddd;
        }
        h1{
            <display:inline>
        }
        .induk{
            margin:auto;
            width:700px;
            height:700px;
            background-color:#ffff;
            border-radius:10px;
            padding-left:30px;
            box-shadow:0 0 5px 1px Blue;
        }
        .ipt{
            height:100px;
            text-align:center;
            font-size:40px;
            font-weight:thin;
            border-radius:3px;
            box-shadow:inset 0 0 3px 1px Red;
        }
        .submit{
            background-color:#005DBF;
            color:white;
            border-radius:5px;
            padding:5px;
            margin:0px 0px 0 470px;
        }
        form{
            width:30%;
            
        }
        .opt{
            margin:20px 5px 0 0px;
        }
        button{
            margin-right:10px;
            width:30px;
            height:25px;
        }
</style>
</head>

<body>
<div class="induk">
<form action="" method="post">
<label for="ipt"><h1>Penghitung Suhu</h1></label>
<input type="number" name="ipt" id="ipt" class="ipt">
    <div class="opt">
    <button name ="C">C</button>
    <button name ="R">R</button>
    <button name ="K">K</button>
    <button name ="F">F</button>
</div>
<input type="submit" name ="submit" value="Search" class="submit" >
</form>
<?php 
$ipt =$_POST['ipt'];
$opt =$_POST['opt'];
 if(isset($_POST['submit'])) {
     echo "Hasilnya Celcius : ",$ipt;
     echo"<br>";
}
if(isset($_POST['submit'])) {
    echo "Hasilnya Reamur : ",$ipt * 0.8;
    echo"<br>";
}
if(isset($_POST['submit'])) {
    echo "Hasilnya Kelvin : ",$ipt + 273;
    echo"<br>";
}
if(isset($_POST['submit'])) {
    echo "Hasilnya Fahrenheit : ",$ipt * 1.8 + 32;
    echo"<br>";
}
?>
    
</body>
</html>
<!--<label for="ipt"><h1>Penghitung Suhu</h1></label>
label itu untuk menamai progam tersebut
h1 untuk menyambungkan h1 diatasnya sehingga label itu muncul
ipt itu untuk membuat kotak yang berisi nilai 
$ipt itu untuk menyambungkan ipt diatasnya
$opt itu untuk menyambungkan opt diatasnya juga
if(isset($_POST['submit']))
$_POST['submit'] untuk menyambukan input submit diatas sehingga bila ditekan akan muncul hasilnya  -->