<?php
require_once 'config/connect.php';
if (!isset($connect)) {
    die('Подключение к БД не установлено!');
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Товары</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f3f3f3;
            margin: 0;
            padding: 20px;
        }

        h1, h3 {
            text-align: center;
            color: #333;
        }

        .container {
            max-width: 800px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background: #606060;
            color: #fff;
        }

        td {
            background: #e0e0e0;
        }

        form p {
            margin: 10px 0 5px;
        }

        input[type="text"],
        input[type="number"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #aaa;
            border-radius: 5px;
            box-sizing: border-box;
        }

        textarea {
            resize: vertical;
            min-height: 80px;
        }

        button {
            margin-top: 15px;
            padding: 10px 20px;
            background-color: #444;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #666;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Список товаров</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Название</th>
            <th>Цена</th>
            <th>Описание</th>
        </tr>
        <?php
        $products = mysqli_query($connect, "SELECT * FROM `sneaker_store_products`");
        $products = mysqli_fetch_all($products);
        foreach ($products as $product) {
            ?>
            <tr>
                <td><?= htmlspecialchars($product[0]) ?></td>
                <td><?= htmlspecialchars($product[1]) ?></td>
                <td><?= htmlspecialchars($product[2]) ?> ₸</td>
                <td><?= htmlspecialchars($product[3]) ?></td>
                <td><a href="update.php?id=<?=$product[0]?>">Изменить</a></td>
                <td><a style="color:red" href="vendor/delete.php?id=<?=$product[0]?>">Удалить</a></td>
            </tr>
            <?php
        }
        ?>
    </table>

    <h3>Добавить новую пару</h3>
    <form action="vendor/create.php" method="POST">
        <p>Название</p>
        <input type="text" name="title" required>

        <p>Цена</p>
        <input type="number" name="price" required>

        <p>Описание</p>
        <textarea name="description" required></textarea>

        <button type="submit">Добавить</button>
    </form>
</div>
</body>
</html>
