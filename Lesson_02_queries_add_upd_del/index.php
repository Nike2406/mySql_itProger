<?php 
  $mysqli = new mysqli("localhost", "root", "", "mybase");
  $mysqli -> query("SET NAMES 'utf8'");

  // Управление записями в бд

  // $success = $mysqli -> query("INSERT INTO `users` (`login`, `password`, `reg_date`) VALUES ('Maestro', '".md5("123")."', '".time()."')");

  // // !!!! Обязательно указывать обратные кавычки !!!!

  // if(!$success)
  //   echo "Не удалось добавить запись";
  // else 
  //   echo "Запись добавлена";

// for ($i = 1; $i < 10; $i++) {
//   $mysqli -> query("INSERT INTO `users` (`login`, `password`, `reg_date`) VALUES ('$i', '".md5("$i")."', '".time()."')");
// }

$mysqli -> query("UPDATE `users` SET `login` = 'Schema6' WHERE `users`.`id` = 7");
// Обновить в таблице users значение login на новое в ячейке 7

$mysqli -> query("UPDATE `users` SET `reg_date` = '100000' WHERE `users`.`login` = 'Schema6' OR (`id` > 4 AND `id` < 8)");

$mysqli -> query("DELETE FROM `users` WHERE `users`.`id` = 6");
// удаление поля

$mysqli -> close();
?>