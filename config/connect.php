<?php
$connect = mysqli_connect('db', 'root', 'root', 'crud_db');
if (!$connect) {
    die('Ошибка подключения к БД: ' . mysqli_connect_error());
}
?>
