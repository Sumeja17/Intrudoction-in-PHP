<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $x = 5;
    $y = 13;
    $z = $x + $y;
    echo $z;
    ?>
    <br>
    <?php

    $x = "Prizren";
    $prizren ="prizren";
    $$x = "200";
    echo $x. "<br>";
    echo $prizren. "<br>";
    echo $$x. "<br>";
    ?>
    <br>
    <?php

    print "<h1> Hello World </h1>";
    echo " Hello World ";
    ?>
    <br>
    <?php

    echo ("<h2> Hello World </h2>");
    echo "<br>";
    echo "Prizren","Kosovo";
    echo 201;

    print "<h4> Shkolla \"Digjitale/\" </h4><br>";
    ?>
    <br>

    <?php
      echo "5+6<br>";
      // Nese nuk shenohet brenda thonjezave atehere vlerat mbledhen
            echo "5"+"6";
            echo "<br>";
            echo 5+5;
        //  echo 5+6; edhe kjo menyre funksionon 
			echo "<br>"; 
		//Variablat shenohen me shenjen e dollarit "$"
			//var name = 'Kebir'; nuk funksionon kjo metoda
            $first_name = "Kebir";
            $Name = "Kebir";
		//Rezultati mund te paraqitet ne dy menyrat e ndryshme
			//document.write("my name is:"+name)
            echo "My name is: $first_name<br>";
        //  echo 'My name is: $first_name<br>'; kjo metoda te kthen krejt si string dmth me thojza njefishta ' '
		//Nese rezultatin e shenojme me thonjeza te njefishta atehere rezultati paraqitet ashtu siq eshte i shenuar	
            echo 'My name is:',$first_name,'!','<br>';
        
			$x = 3;
            $X = 10;
			$y = 5;
            $f= $x+$y;
            
            $z = 2;
            $a = 3;
		
        //Nese e shenojme pa thonjeza rezultati na mblidhet		
            echo $x + $y."<br>";	
			echo "$x + $y <br>";
            echo $x . $y;
            echo "<br>";
            echo $x , $X;
            echo "<br>";
            echo "3+5=$f";
            echo "<br>";
            //echo "3+5=".$f;
            //ECHO $z . $a;  
            //PRINT $x . $z; 
		?> 
    </body>
</html>