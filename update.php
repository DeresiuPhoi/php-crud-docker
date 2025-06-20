
<?php
    require_once "config/connect.php";
    if (!isset($connect)) {
        die('Подключение к БД не установлено!');
    }
    $product_id = $_GET['id'];
    $product= mysqli_query($connect, "SELECT * FROM `sneaker_store_products` WHERE `id` = $product_id");
    $product = mysqli_fetch_assoc($product);

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Изменить пару кросовок</title>
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
    <h3>Изменить продукт</h3>
    <form action="vendor/update.php" method="POST">
        <input type="hidden" name ="id" value="<?=$product['id']?>">

        <p>Название</p>
        <input type="text" name="title" value="<?=$product['title']?>" required>

        <p>Цена</p>
        <input type="number" name="price" value="<?=$product['price']?>" required>

        <p>Описание</p>
        <textarea name="description" required><?=$product['description']?></textarea>

        <button type="submit">Изменить</button>
    </form>
    </div>
</body>
</html>
