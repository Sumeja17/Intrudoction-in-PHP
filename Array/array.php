
	<?php 
		//Indexed Arrays -jane array me indeksa numerik
		//Krijimi i nje Array
			$x = array("Shkolla","Digjitale","Prizren");
			//Menyra se si mund te ju qasemi elementeve te Array, permes Index.
			echo $x[0]."<br>".$x[1]."<br>".$x[2];
            //echo $x;
            //print_r($x);
            echo "<br>";
            var_dump($x);
        
		?>
		<br>
		<?php
			//Count(), kjo metod na mundeson te gjejme gjatesin e array.
			$x = array("Shkolla","Digjitale","Prizren");
			
			echo count($x);
		?>
		<br>
		<?php
		//Associative Arrays - jane array me emra te qelsave
		//I pari eshte qelesi ndersa e dyta vlera,p.sh "Kebir" eshte qelesi, ndersa "24" eshte vlera
			$mosha = array("Kebir"=>24, "Arianit"=>26, "Fatjona"=>26);
        
			echo "Kebir eshte " . $mosha['Kebir'] . " vjeq.";
		?>
		<h2>Sorting Arrays</h2>
		<h3>sort()</h3>
		<?php 
		//Array mund te renditen ne menyre alfabetike ose numerike nga fillimi apo nga fundi.
			//sort(), kjo metod na mundeson qe ta renditim elementet e nje Array, nga numeri me i vogel.
			$x = array(3,54,2,12,3,4,9,8,5);
			sort($x);
			print_r($x);
            echo "<br>";
            //echo $x;
			//per ti nxjerr vetem si vlera nga array e perdorim for loop.
			$y = count($x);
			for ($z = 0; $z < $y; $z++)
			{
				echo $x[$z];
				echo "<br>";
			}
		?>
		<br>
		<?php
		//Per renditjen e tekstit
			//$text = array("Shkolla","Digjitale","Prizren");
			$text = array("Shkolla","Digjitale","Prizren", "kebir");
            
            sort($text);
			
            $x = count($text);
        
			for($y=0; $y<$x; $y++)
			{
				echo $text[$y];
				echo "<br>";
			}
		?>