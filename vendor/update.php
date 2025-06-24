<?php
require_once __DIR__ . '/../config/connect.php';

if (!isset($connect)) {
    die("Ошибка подключения к базе данных.");
}

$id = mysqli_real_escape_string($connect, $_POST['id']);
$title = mysqli_real_escape_string($connect, $_POST['title']);
$price = mysqli_real_escape_string($connect, $_POST['price']);
$description = mysqli_real_escape_string($connect, $_POST['description']);

$query = "UPDATE `sneaker_store_products` 
          SET `title` = '$title', `price` = '$price', `description` = '$description' 
          WHERE `id` = '$id'";

if (mysqli_query($connect, $query)) {
    header("Location: /index.php");
    exit;
} else {
    echo "Ошибка при обновлении: " . mysqli_error($connect);
}
