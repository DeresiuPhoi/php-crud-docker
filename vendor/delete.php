<?php

require_once __DIR__ . '/../config/connect.php';

if (!isset($connect)) {
    die("Ошибка подключения к базе данных.");
}

$id = $_GET['id'];

mysqli_query($connect, "DELETE FROM `sneaker_store_products`  WHERE id='$id'");
header("location: /");