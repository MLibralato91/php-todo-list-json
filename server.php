<?php

$testo = file_get_contents('./data.json');

//echo $testo;
$phpArray = json_decode($testo, true);

//var_dump($phpArray);


header('content-Type: application/json');

echo json_encode($phpArray);
