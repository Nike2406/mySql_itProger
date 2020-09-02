<?php 
  function printResult ($result_set) {
    echo "Количество записей равно - ".$result_set -> num_rows."<br><br>";
    while (($row = $result_set -> fetch_assoc()) != false) {
      // fetch_assoc() - Извлекает результирующий ряд в виде ассоциативного массива
      print_r ($row);
      // echo $row["login"];
      echo "<br>";
    }
    echo "<br><hr>";
    // $result_set - Возвращает содержимое одного поля из набора результата MySQL.
    // num_rows - Получает число рядов в результирующей выборке
  }
  
  $mysqli = new mysqli("localhost", "root", "", "mybase");
  $mysqli -> query("SET NAMES 'utf8'");

  $result_set = $mysqli -> query("SELECT * FROM `users`");
  // выбрать всё(*) из таблицы users
  printResult($result_set);

  $result_set = $mysqli -> query("SELECT `id`, `login` FROM `users` WHERE `id` > 7");
  printResult($result_set);

  $result_set = $mysqli -> query("SELECT * FROM `users` ORDER BY `id` DESC");
  // ORDER BY - сортировка по
  // ASC - по возрастанию
  // DESC - по убыванию
  printResult($result_set);

  $result_set = $mysqli -> query("SELECT * FROM `users` LIMIT 0, 2");
  // LIMIT 0, 2 - показывать записи "по" и "сколько"
  printResult($result_set);

  $result_set = $mysqli -> query("SELECT * FROM `users` WHERE `login` LIKE '%sh%'");
  // LIKE '' - показывать записи похожие на sh
  printResult($result_set);

  $result_set = $mysqli -> query("SELECT COUNT(`id`) FROM `users`");
  // COUNT(`id`) - количество id в таблице
  printResult($result_set);

  $mysqli -> close();
?>