<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    $first = "The quick brown fox";
    $second = " jumped over the lazy dog";

    $third = $first;
    $third .= $second;

    echo $third
    ?>

    <br>

    lowercase: strtolower
    Uppercase: strtoupper
    Upercase First: ucfirst
    Uppercase words: ucwords

    <br>

    Length: strlen
    Trim:trim
    Find: <?php echo strstr ($third,"Fox") ?><br>
    Replace By String: <?php echo str_replace("quick","superfast",$third) ?>
    <br>

    Repeat: <?php echo str_repeat($third.". ",3)?> <br>
    Make Substring: <?php echo substr($third, 5,3) ?>
    find position: strpos (source,"word")
    find character: strchr(source,"z")
</body>
</html>