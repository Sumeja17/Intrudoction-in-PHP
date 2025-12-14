<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detyra Part 2</title>
</head>
<body>
    <h2>Detyra 1</h2>
    <?php 
    $a=2;
    $b=4;
    if($a < $b) {
        echo "Eshte me i madh";
    }
    else if( $a = $b) {
        echo "Eshte i barabarte";
    }
    else {
        echo "Ska rezultat";
    }?>
    <br>
    <h2>Detyra 2</h2>
    <?php 
    $mosha = 17;
    if($mosha > 13) 
    {
        echo "Femije";
    }
    else if($mosha >=13 && $mosha < 19);
    {
        echo "Adoleshent";
    }
    else if($mosha >=20 && $mosha < 64);
    {
        echo "I rritur";
    }
    else($mosha < 65);
    {
        echo "I moshuar";
    }
    ?>
    <br>
    <h2>Detyra 3</h2>
   <?php
    $nota = 70;
    switch ($nota) {
        case "90-100":
            echo "Shkelqyeshem";
        break;
        case "80-89":
            echo "Shume mire";
        break;
        case "70-79":
            echo "Mire";
        break;
        case "60-69":
            echo "Mjaftueshem";
        break;
        default:
        echo "Ska note";
        break;
    }
    ?>
    <br>
    <h2>Detyra 4</h2>
    <?php 
    $day = 5;
    switch ($day) 
    {
        case 1:
            echo "Monday";
        break;
        case 2:
            echo "Tuesday";
        break;
        case 3:
            echo "Wednesday";
        break;
        case 4:
            echo "Thursday";
        break;
        case 5:
            echo "Friday";
        break;
        case 6:
            echo "Saturday";
        break;
        case 7:
            echo "Sunday";
        break;
    }?>
    <br>
    <h2>Detyra 5</h2>
    <?php 
    $empUsername = "";
    $empPassword = "";
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $username =secure($_POST['Username']);
        $password =secure($_POST['Password']);
        if(empty($username)|| empty($password))
               {
                $empUsername ="Username is required";
                $empPassword ="Password is required";
               }
               else if($username === "sumeja" && $password === "sumeja123")
               {
                echo '<script>alert("You are welcome!")</script>';
               }
               else
               {
                echo '<script>alert("Username and Password is incorrect")</script>';
               }
  }
  function secure($x) {
    $x = htmlspecialchars($x);
    $x = trim($x);
    $x = stripslashes($x);
    return $x;
}
    ?>
     <h1>PHP Form Required Example</h1>
   <p><span class="empty">* Required</span></p>
   <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
    Username: <input type="text" name="Username">
    <span class="empty">*<?php echo $empUsername;?></span><br><br>
    Password: <input type="text" name="Password">
    <span class="empty">*<?php echo $empPassword;?></span><br><br>
    <input type="submit" name="Log in">
    <input type="reset" name="Cancel">
   </form>
   <br><br>

    <?php
    $empUsername = "";
    $empPassword = "";
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $username =secure($_POST['Username']);
        $password =secure($_POST['Password']);
        if(empty($username)|| empty($password))
               {
                $empUsername ="Username is required";
                $empPassword ="Password is required";
               }
               else if($username === "sumeja" || $password === "sumeja123")
               {
                echo '<script>alert("You are welcome!")</script>';
               }
               else
               {
                echo '<script>alert("Username and Password is incorrect")</script>';
               }
  }
  function secure($x) {
    $x = htmlspecialchars($x);
    $x = trim($x);
    $x = stripslashes($x);
    return $x;
 }
  ?>
  <h1>PHP Form Required Example</h1>
   <p><span class="empty">* Required</span></p>
   <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
    Username: <input type="text" name="Username">
    <span class="empty">*<?php echo $empUsername;?></span><br><br>
    Password: <input type="text" name="Password">
    <span class="empty">*<?php echo $empPassword;?></span><br><br>
    <input type="submit" name="Log in">
    <input type="reset" name="Cancel">
   </form>
   <br><br>
   <h2>Detyra 6</h2>
   <?php 
   $i = 1;
   
   while($i <= 10); {
    echo $i . "<br>";
    $i++;
   }
   ?>
   <br>
   <h2>Detyra 7</h2>
   <?php       
    for ($i= 2; $i <= 20; $i++ 2) {           
            echo $i ."<br>";			
    }
   ?>
   <br>
   <h2>Detyra 8</h2>
   <?php 
   for ($i = 1; $i <=100; $i++)
   {echo $i ."<br>";}
   ?>
   <br>
   <h2>Detyra 9</h2>
   <?php 
   $name =("nx1","nx2","nx3","nx4","nx5");

   asort($name);
   foreach($name as $x => $x_value)
			 {
				echo $x ." - ". $x_value;
				echo "<br>";
			 }
   ?>
   <br>
   <h2>Detyra 11</h2>
   <?php 
   $numbers = [10, 20, 30, 40, 50];

   for ($i = 0; $i < count($numbers); $i++) {
    echo $i . "<br>";
   }  
    ?>
</body>
</html>