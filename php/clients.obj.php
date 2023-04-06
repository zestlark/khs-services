<?php
//$clientdatapah = "../public/clients/";
$clientrawarray = scandir($clientdatapah);
// $clientrawarray = array_diff($clientrawarray, array('.', '..'));
array_splice($clientrawarray, 1, 1);
array_splice($clientrawarray, 0, 1);
// print_r($clientrawarray);

$clientrawarray = array_reverse($clientrawarray);
?>