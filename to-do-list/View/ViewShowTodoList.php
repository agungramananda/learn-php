<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../BusinessLogic/ShowTodoList.php";
require_once __DIR__ . "/../Util/Input.php";
require_once __DIR__ . "/../View/ViewAddTodoList.php";
require_once __DIR__ . "/../View/ViewRemoveTodoList.php";

function viewShowTodoList(){
  while(true){
    showTodoList();

    echo "MENU" . PHP_EOL;
    echo "1. Tambah To Do" . PHP_EOL;
    echo "2. Hapus To Do" . PHP_EOL;
    echo "x. Keluar" . PHP_EOL;

    $pilihan = input("Pilih");

    if($pilihan == "1"){
      viewAddTodoList();
    } else if($pilihan == "2"){
      viewRemoveTodoList();
    } else if($pilihan == "x"){
      break;
    } else {
      echo "Pilihan tidak dimengerti" . PHP_EOL;
    }
  }

  echo "Sampai jumpa lagi" . PHP_EOL;
}