<?php

require_once __DIR__ . "/../BusinessLogic/RemoveToDoList.php";
require_once __DIR__ . "/../Util/Input.php";

function viewRemoveTodoList(){
  echo "MENGHAPUS TODO" . PHP_EOL;

  $pilihan = (int)input("Nomor todo (x untuk batal)");

  if ($pilihan == "x") {
    echo "Batal menghapus todo nomor $pilihan" . PHP_EOL;
  } else {
    $success = removeTodoList($pilihan);

    if ($success) {
      echo "Sukses menghapus todo nomor $pilihan" . PHP_EOL;
    } else {
      echo "Gagal menghapus todo nomor $pilihan" . PHP_EOL;
    }
  }
}