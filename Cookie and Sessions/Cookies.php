 <?php 
    $cookie_name = "User";
    $cookie_value = "Admin Admin1";
    //setcookie(name, value, expire, path, domain, secure, httponly);
    //Kerkohet vetem parametri i emrit. Te gjithe parametrat e tjere jane opsionale.
    setcookie($cookie_name, $cookie_value, time() + 10, "/"); // 86400 = 1 dite
    // Nese vendosni daten e skadimit ne te kaluaren, cookie do te fshihet.
    // setcookie($cookie_name, "", time()-10);
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php 
   //$_COOKIE->eshte variabel super globale qe ne kete rast perdoret per te marre cookie 
   if(!isset($_COOKIE['$cookie_name']))//isset()funksionin per te zbuluar nese cookie eshte vendosur
   {
    echo "Cookie'" . $cookie_name . "' is not set!"; 
   }
   else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
   }
   ?>

</body>
</html>