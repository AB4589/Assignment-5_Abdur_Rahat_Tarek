<?php
$mask="mask";
$covid="negative";
$temperature=98;
switch ($mask=="mask" && $covid=="negative" && $temperature<=100) {
	case '$mask':
	case '$covid':
	case '$temperature':
		echo "You are Welcome!";
	break;
	default:
		echo "You are not allowed to enter inside building";
		break;
}
?>