<?php

$monthName=['january','february','march','april','may','june'];
foreach ($monthName as $value) {
	$shortName="";
for($i=0; $i<=2; $i++){
	$shortName.=$value[$i];
	
}
echo $shortName."</br>";
}

?>