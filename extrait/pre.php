<?php
$a = $_POST['nbr'];
$nb=0;
$i=2;
while (($i<$a) && ($nb==0)) {
	if(fmod($a, $i)==0)
		$nb=1;
	else 
		$i++;
	}
	if($nb==0)
		echo " $a nombre premier <br>";
	
	else 
		echo " $a n'est pas nombre premier <br>";



		

?>