<?php
$attempts = 5;
while ($attempts > 0) {
    $connect = mysqli_connect('db', 'root', 'root', 'crud');
    if ($connect) break;
    echo "Ждём подключение к БД...\n";
    sleep(3);
    $attempts--;
}

if (!$connect) {
    die('Ошибка подключения к БД: ' . mysqli_connect_error());
}
