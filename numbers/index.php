<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php $kita= 200?>
    Absolute Value:<?php echo abs($kita-400) ?><br>
    Exponential: pow(base,exp) <?php echo pow(2, 10)?><br>
    Square Root: sqrt(value)
    Modulo: fmod(float,float)
    Random: rand(); <?php echo rand()?> <br>
    Random(min,max): rand(min,max) <?php echo rand(1,100)?>
</body>
</html>