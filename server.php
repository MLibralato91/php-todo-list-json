<?php

$testo = file_get_contents('./data.json');

//echo $testo;
$phpArray = json_decode($testo, true);

//var_dump($phpArray);

if (isset($_POST['todoItem'])) {
  $todoItem = [
    "task" => $_POST['todoItem'],
    "done" => false
  ];
  array_push($phpArray, $todoItem);
  file_put_contents('./data.json', json_encode($phpArray));
} elseif (isset($_POST['updateItem'])) {
  $index = $_POST['updateItem'];
  $phpArray[$index]['done'] = !$phpArray[$index]['done'];
  file_get_contents('./data.json', json_encode($phpArray));
} elseif (isset($_POST['deleteItem'])) {
  $index = $_POST['deleteItem'];
  array_slice($phpArray, $index, 1);
  file_put_contents('./data.json', json_encode($phpArray));
}

header('content-Type: application/json');

echo json_encode($phpArray);
