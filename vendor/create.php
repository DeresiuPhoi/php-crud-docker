<?php
require_once __DIR__ . '/../config/connect.php';

$title = $_POST['title'];
$price = $_POST['price'];
$description = $_POST['description'];

$stmt = $connect->prepare("INSERT INTO sneaker_store_products (title, price, description) VALUES (?, ?, ?)");
$stmt->bind_param("sds", $title, $price, $description);
$stmt->execute();
$stmt->close();

header("Location: ../index.php");
exit;
