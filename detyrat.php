<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detyra</title>
</head>
<body>
    <h1>Detyra 1</h1>
    <?php 
    $mosha ="17";
    if ($mosha < 18) {
        echo "i mitur";
    }
    else {
        echo "i rritur";
    }?>
    <br>
    <h1>Detyra 2</h1>
    <?php 
    $temperatura = ?>
    <br>
    <h1>Detyra 3</h1>
    <?php
    $day = 3;
    
    switch ($day) {
        case 1:
        echo "E Hene eshte dita e pare e javes";
        break;
        case 2:
        echo "E Marte eshte dita e dyte e javes";
        break;
        case 3:
        echo "E Merkure eshte dita e trete e javes";
        break;
        case 4:
        echo "E Enjte eshte dita e katert e javes";
        break;
        case 5:
        echo "E Premte eshte dita e peste e javes";
        break;
        case 6:
        echo "E Shtune eshte dita e gjashte e javes";
        break;
        case 7:
        echo "E Diel eshte dita e shtate e javes";
        break;
    }?>
    <br>
    <h1>Detyra 4</h1>
    <?php
    $nota = 8;
    switch ($nota) {
        case 5:
            echo "Shume dobet";
        break;
        case 6:
            echo "Dobet";
        break;
        case 7:
            echo "Mjaftueshem";
        break;
        case 8:
            echo "Mire";
        break;
        case 9:
            echo "Shume mire";
        break;
        case 10:
            echo "Shkelqyeshem";
        break;
        default:
        echo "Ska note";
        break;
    }
     ?>

     <br>
     <h1>Detyra 6</h1>
     <?php 
      
    for ($i= 1; $i <= 20; $row++) {           
        if ($i % 2 == 0) {       
            echo $i ."<br>";			
        }
    } ?>
    <br>
    <h1>Detyra 7</h1>
    <?php 
		     $numbers = array("Sumeja"=>"17", "Arianit"=>"26", "Fatjona"=>"26");
			 foreach($numbers as $x => $x_value)
			{
				echo $x ." ". $x_value;
				echo "<br>";
			}
            echo $numbers;
		?>
    <br>
    <h1>Detyra 8</h1>
    <?php 
    ?>
</body>
</html>