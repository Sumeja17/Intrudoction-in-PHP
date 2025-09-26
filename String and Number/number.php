<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number</title>
</head>
<body>
    <h2>Integer</h2>
    <?php 
     $x = 1024;
     echo $x;
     echo "<br>";
     var_dump(is_int($x));
     echo "<br>";    
    ?>

    <br>
    <?php 
    $x = 10.24;
    var_dump(is_int($x));

    ?>
    <br>

    <?php 
    $x = 1024;
    var_dump(is_long($x));
    
    ?>
    <h2>Float</h2>
    <?php 
     $x = 10.240;
     var_dump(is_float($x));
     echo $x;
    
    ?>
    <br>
    <?php 
    $x = 10240;
    var_dump(is_float($x));
    echo $x;
    
    ?>
    <br>
    <?php 
    $x = 10240;
    var_dump(is_double($x));
    echo $x;
    
    ?>
    <h2>Infinit</h2>
    <?php $x = 9.9e999999999+22;
     var_dump($x);

     ?>
     <br>
     <?php 
     $x = 1.2e1133;
     echo is_infinite($x);
     echo "<br>";
     echo var_dump(is_infinite($x));
     ?>
     <h2>Finit</h2>
     <?php 
     $x = 1.2321;
     var_dump($x);
     echo "<br>";
     echo is_finite($x);
     echo "<br>";
     echo var_dump(is_finite($x));
     ?>
     <br>

     <h2>Not a Number</h2>
     <?php 
     $z =200;
     var_dump(is_nan($z));

// /*
//  $z = NAN;
//  var_dump(is_nan($z));
     ?>

</body>
</html>