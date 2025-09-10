<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Operatoret ne PHP</h1>
    <h3>Operatoret Aritmetik</h3>
    <?php 

    $x = 10;
    $y = 20;

    echo $x + $y;
    echo "<br>";
    echo $x - $y;
    echo "<br>";
    echo $x * $y;
    echo "<br>";
    echo $x / $y;
    echo "<br>";
    echo $x % $y;
    ?>

    <h3>Operatoret Percaktues</h3>
    <?php 
    
    $x = 10;
    $y = 20;

    echo "<br>";
    echo $x += $y;
    echo "<br>";
    echo $x -= $y;
    echo "<br>";
    echo $x /= $y;
    echo "<br>";
    echo $x *= $y;
    echo "<br>";
    echo $x %= $y;
    ?>

    <h3>Operatoret Krahasues</h3>
    <?php 
    
    $x = 10;
    $y = 20;

    echo $x == $y;
    var_dump($x==$y);
    echo "<br>";
    echo $x === $y;
    var_dump($x===$y);
    echo "<br>";
    echo $x != $y;
    var_dump($x!=$y);
    echo "<br>";
    echo $x <> $y;
    echo "<br>";
    echo $x > $y;
    echo "<br>";
    echo $x < $y;
    echo "<br>";
    echo $x >= $y;
    echo "<br>";
    echo $x <= $y;
    echo "<br>";
    ?>

    <h3>Operatoret Logjik</h3>

    <?php 
     
    $x = 11;
    $y = 20;    

    //AND
    $z = ($x > 5 and $y < 30); 
    echo $z;
    echo "<br>";
    var_dump($z);

    //OR
    echo "<br>";
    $a = ($x > 10 or $y < 30);
    var_dump($a);

    //NOT
    echo "<br>";
    $a = !($x > 10 or $y < 30);
    var_dump($a);

    //XOR
    echo "<br>";
    $a = ($x > 10 xor $y <30);
    var_dump($a);
    ?>

    <h3>Operatoret String</h3>

    <?php 
    $x = 10;
    $y = 20;   
    echo $x.$y;
    echo "<br>";

    $name = "sumeja";
    $age = "17";
    echo $name,$age;
    echo "<br>";
    echo $x .= $y;
    ?>

    <h3>Incresment Decresment Operatoret</h3>

    <?php 
    $x = 10;
    $y = 20;
    
    echo $x++;
    echo "<br>";
    echo $x;
    echo ++$x;

    echo "<br>";
    echo "<br>";

    echo $y--;
    echo "<br>";
    echo $y;
    echo "<br>";
    echo --$y;
    echo "<br>";
    echo "<br>";
    ?>

    <?php 
     $gjat = 7;
     $gjer = 5;
     echo "Siperfaqja e paralelogramit eshte: " . ($gjat + $gjer) . " cm2";
     echo "<br>";
     echo "Perimetri i paralelogramit eshte: " . ($gjat + $gjer) . " cm";
     ?>
</body>
</html>