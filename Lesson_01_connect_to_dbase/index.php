<?php 
// Подключение к базе данных

  $musqli = new mysqli("localhost", "root", "", "mybase");
  // 1 - имя хоста, 2 - имя пользователя, 3 - пароль, 4 - имя бд
  $musqli -> query ("SET NAMES 'utf8'");
  // query() - запрос
  // "SET NAMES 'utf8'" - установит кодировку
  $musqli -> close();
  // бд нужно закрывать после обращения, иначе перегруз сервера
?>