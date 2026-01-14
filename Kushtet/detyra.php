<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detyra</title>
</head>
<body>
    <?php 
    $x = 80;
    
    if($x < 50)
    {
        echo '50 eshte me i madh se 80';
    }
    elseif($x > 50)
    {
        echo '80 eshte me i madh se 50';
    }
    else{
        echo ''
    }
    ?>
    <br>
    <?php 
    $x = 50;
    
    if($x > 49) {
        echo '5';
    }
    elseif($x >= 50 && $x < 60) {
        echo '6';
    }
    elseif($x >= 60 && $x < 70) {
        echo '7';
    }
    elseif($x >= 70 && $x < 80) {
        echo '8';
    }
     elseif($x >= 80 && $x < 90) {
        echo '9';
    }
    elseif($x >= 90 && $x < 100) {
        echo '10';
    }
    else{
        echo 'Nuk e kalon';
    }
?>
<br>
<?php 
     $x = 15;
     
     if($x % 2 == 0)
     {
        echo 'Numri eshte qift';
     }
     else{
        echo "Numri eshte tek";
     }
     ?>
     <br>
     <?php 
     $muajt = 12;
     
     switch($muajt)
     {
        case 1:
            echo 'Janar';
        break;
        case 2:
            echo 'Shkurt';
        break;
        case 3:
            echo 'Mars';
        break;
        case 4:
            echo 'Prill';
        break;
        case 5:
            echo 'Maj';
        break;
        case 6:
            echo 'Qershor';
        break;
        case 7:
            echo 'Korrik';
        break;
        case 8:
            echo 'Gusht';
        break;
        case 9:
            echo 'Shtator';
        break;
        case 10:
            echo 'Tetor';
        break;
        case 11:
            echo 'Nentor';
        break;
        case 12:
            echo 'Dhjetor';
        break;
     }
     ?>
     <br>
     <?php 
     $muajt = 'Korrik';
     
      switch($muajt)
     {
        case 'Janar':
            echo 'Janar eshte muaji i pare i vitit';
        break;
        case 'Shkurt':
            echo 'Shkurt eshte muaji i dyte i vitit';
        break;
        case 'Mars':
            echo 'Mars eshte muaji i trete i vitit';
        break;
        case 'Prill':
            echo 'Prill eshte muaji i kater i vitit';
        break;
        case 'Maj':
            echo 'Maji eshte muaji i peste i vitit';
        break;
        case 'Qershor':
            echo 'Qershori eshte muaji i gjashte i vitit';
        break;
        case 'Korrik':
            echo 'Korrik eshte muaji i shtate i vitit';
        break;
        case 'Gusht':
            echo 'Gushti eshte muaji i tete i vitit';
        break;
        case 'Shtator':
            echo 'Shtatori eshte muaji i nente i vitit';
        break;
        case 'Tetor':
            echo 'Tetori eshte muaji i dhjete i vitit';
        break;
        case 'Nentor':
            echo 'Nentori eshte muaji i njembedhjete i vitit';
        break;
        case 'Dhjetor':
            echo 'Dhjetori eshte muaji i dymbedhjete i vitit';
        break;
     }
     ?>
</body>
</html>