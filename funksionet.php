<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funksionet</title>
</head>
<body>
    <?php 
    //Krijimi i nje funksioni
    function x() //metoda per funksionet
    {
        echo "Shkolla Digjitale Prizren"; 
    }
    x();
    //Thirrja e nje funksioni, si dhe x eshte emri i funksionit
    ?>
    <br>
    <?php 
    function text($emri) //Funksioni me parametra
    {
        echo "$emri.<br>";
    }
    text("Sumeja");
    text("Memaj");//Thirrja e funksionit me parametra.

    function text1($emri,$mbiemri)  //Funksioni me parametra
    {
        echo $emri1.$mbiemri."<br>";
    }
    text1("Shkolla","Digjitale"); //Thirrja e funksionit me argumente(parametra).
    text1("Sumeja","Memaj");
    text1("Sumeja","Memaj"); 
     ?>
     <br>
     <?php 
     function vlera($x,$y)
     {
        echo $x + $y; 
        echo $x * $y;
     }
     vlera(5,5);
     ?>
     <br>
     <?php 
     //Tek versioni i fundit PHP7 duhet te i tregohet edhe tipi i te dhenave te parametrave
     //function string(string $a, string $b)
     function number(int $a, int $b) 
     {
        return $a + $b; //Return perdoret per te na kthyer nje rezultat kodi i funksionit
        //return $a . $b;
     }
     echo number(5,1); //e merr te stringu shkronjen dmth numrin e pare dhe e mbledh
     ?>
     <br>
     <?php 
     function test1($a,$b) 
     {
        return $a * $b;
     }
     echo test1(5,5);
     ?>
     <br>
     <br>
     <?php 
     function numri()
     {
        $x = 6;
        $y = "6";
        return $x * $y;
     }
     echo numri()
     
     ?>
    
     <br>
     <br>
     <?php 
     $x = 10; //deklarimi i variablave ne menyre globale
     $y = 10;

     function mbledh() 
     {
        global $x;//menyra se si me tregu qe jane globale variablat sepse nuk punon nese nuk e vendosim
        global $y;
        return $x + $y;
     }
     echo mbledh();
     ?>
     <br><br>
     <?php 
     function fiks ($x = 20;$y = 30) //Parametrave mund te ju caktojme edhe vlera fikse.
     {
        echo "<b>Vlera eshte:</b> x=".$x. "dhe y=".$y;
     }
     fiks();
     ?>
     <br><br>
     <?php 
     //Nese deshirojme te caktojme parametra me te dhena "float" por si rezultat te nxjerrim "int".
      function mePresje(float $a, float $b)
      {
        return (int)($a + $b);
      }
      echo mePresje(1.5, 3.3);
      ?>
      <br>
      <br>
      <?php 
      //Nese e shenojme keshtu atehere si rezultat na nxjerr numer me presje(float).
      function mePres($a. $b)
      {
        return ($a + $b);
        //return round($a + $b); //per me e rrumbullaksu vleren.
      }
      echo mePres(1.5, 3.3);
      ?>
      <br>
      <br>
      <?php 
      //Nese e shenojme keshtu atehere si rezultat na nxjerr numer me presje(float).
      function mePres1($a, $b)
      {
        return round($a + $b); 
      } 
      echo mePres1(1.5, 3.3);
      ?>
      <br>
      <br>
      <?php 
      
      echo number(5,2);
      
      ?>
</body>
</html>