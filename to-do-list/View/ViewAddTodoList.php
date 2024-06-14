<?php

require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";
require_once __DIR__ . "/../Util/Input.php";

function viewAddTodoList(){
  echo "MENAMBAH TODO" . PHP_EOL;

  $todo = input("Todo (x untuk batal)");

  if ($todo == "x") {
    echo "Batal menambah todo" . PHP_EOL;
  } else {
    addTodoList($todo);
  }
}