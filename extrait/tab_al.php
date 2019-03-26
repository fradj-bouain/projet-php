<?php
$n = $_POST['num'];
$s=0;
	echo "<h2>Votre tableau de $n entiers :  </h2><br>";

for ($i=0; $i <$n ; $i++) { 
	$t[$i]=rand(1,20);
	$s=$s+$t[$i];
		echo "$t[$i] | ";

}
$moy =$s/$n;

echo "<br><h2>le moyenne du tableau : $moy </h2>";
?>