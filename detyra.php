<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detyre</title>
</head>
<body>
    <?php 
    for ($row = 1; $row <= 4; $row++) {            //Loop per rreshtat (numrat 1 deri 4)
        for ($col = 1; $col <= 4; $col++) {        //Loop per kolonat (4 here secili numer)
            echo $row ."  ";			
        }
        echo "<br>";   //Kalon ne rreshtin tjeter pasi te mbaroje kolonat
    }
    ?>
    <br>

    <?php 
    //Numri i rreshtave qe duam te shfaqim
    $rows = 5;
    
    // Loop i jashtem kontrollon rreshtat
    for ($i = 1; $i <= $rows; $i++) {
    // Loop i brendshem printon numrat ne cdo rresht 
       for ($j = 1; $j <= $i; $j++) {
        echo $j;
       }
       //Kalon ne rreshtin tjeter
       echo "<br>";
    }
    ?>
</body>
</html>