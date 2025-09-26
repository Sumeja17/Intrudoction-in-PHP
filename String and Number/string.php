<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String</title>
</head>
<body>
    <?php 
    // mundeson gjetjen e gjatesise se stringut
    echo strlen("Prizreni");
    ?>
    <br>
    <?php 
    // Na tregon sa fjal i kemi brenda nje stringu
    echo str_word_count('Shkolla Digjitale Prizren');
    ?>
    <br>
    <?php 
    // esht nje metod e cila ne kthen stringun mbrapsht
    echo strrev("Shkolla");
    ?>
    <br>
    <?php 
    // Na mundeson te gjejme se ne cilen pozite fillon cfaredo shkronje
    $pozicioni= strpos('Shkolla Digjitale Prizren', 'D'); // e lexon shkronje per shkronje dhe tregon sa shkronja jane
    $pozicioni2= strpos('Shkolla Digjitale Prizren', 'Prizreni');
    echo $pozicioni. '<br>';
    echo $pozicioni2;    
    ?>
    <br>
    <?php 
    // Na mundeson te ndryshojme nje fjale me nje fjale tjeter brenda nje stringu.
    $emri='Shkolla Digjitale Prizren'.'<br>';
    $ndrroje= str_replace('Prizreni','Prishtine',$emri);
    
    echo $emri;
    echo $ndrroje;
    ?>
    <br>
</body>
</html>