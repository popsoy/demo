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
    $numbers = array(23,45,64,34,13,4);
    // echo $numbers[index]
    ?>

    <?php $mixed = array(23, "dog", "cat", array("x","y","z")); ?>
    <?php echo $mixed[2];?>
    <pre>
    <?php echo print_r($mixed); ?>
    </pre>

    <?php echo $mixed[3][1] ?>
    <?php $mixed[2] = "Lion"; ?>
    <?php echo $mixed[2] ?>


    <!-- ASSOCIATIVE ARRAY -->

    <?php $assoc = array("fname"=>"John","lname"=>"Doe")?>
    <?php echo $assoc["fname"];?>

    <!-- Array functions -->


    <?php $numbers = array(13,43,1,23,5,44,3) ?>

    count:count();<br>
    max value: max();
    <?php echo "Max" . max($numbers)?><br>
    Min value: min();<br>
    Sort: sort();<br>
    reverse Sort:rsort();<br>

    <!-- check an item in an array -->
    15 in array?: in_array(value,array) 
    43 in array?:

</body>
</html>