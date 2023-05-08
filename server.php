<?php

$ToDolist = [

  [
    'nome' => 'Pane',
  ],
  [
    'nome' => 'Pasta',
  ],
  [
    'nome' => 'Formaggio',
  ],
  [
    'nome' => 'Carne',
  ],

];

header('content-Type: application/json');

echo json_encode($ToDolist);
