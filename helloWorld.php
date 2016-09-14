<?php
	$firstName="Rasmus";
	$lastName="Aaviste";

	//echo trükib välja muutuja väärtuse
    //echo $firstName;
	//echo $lastName;
	
	echo $firstName." ".$lastName;

?>

<br>

<?php

	$age = 18;
	if ($age < 18) {
		
		// kui vastus on tõene (true)
		echo "alaealine";
	}else  {
	
		// kui vastus on väär (false)
		echo "täisealine";
	}
?>
	<br>
	
<?php

	for ($i=0; $i < $age; $i=$i +1) {
		
		echo $i. "palju";
		
	}
	
	echo "õnne";

?>

<br>

<?php

	echo date("l d. F Y G:i:s");
?>