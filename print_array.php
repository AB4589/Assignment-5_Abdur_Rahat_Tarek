<?php 
$data = array('Red');
$firstChar = array();
for ($i=0; $i < count($data); $i++){
$firstChar[$i] = $data[$i][0];
echo "$firstChar[$i]";
}

?>