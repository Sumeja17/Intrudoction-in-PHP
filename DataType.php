<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data Types in PHP</h1>
    <br>
    <h3>String</h3>
    <?php
    $x = "Shkolla Digjitale";
    $y = 'Prizren';

    echo $x . $y;
?>

<h3>Integer</h3>
<?php
    $x = 2323;
    echo $x;
    echo "<br>";
    var_dump($x);
    ?>
    <br>

    <h3>Check Type</h3>
    <?php
    $x = 123;
    $y = "abc";
    $z = 4.4;

    echo is_int($x);
    echo "<br>";
    echo is_int($y);
    var_dump(is_int($x));
    echo "<br>";
    var_dump(is_int($y));
    echo is_string($x);
    echo "<br>";
    var_dump(is_float($y));
?>
 
</body>
</html>