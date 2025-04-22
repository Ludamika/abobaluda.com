<?php

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Главная</title>
    <link rel="icon" href="/assets/images/favicon.ico" type="image/x-icon">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9fafb;
        }

        header, footer {
            background-color: #111827;
            color: white;
            padding: 15px;
            text-align: center;
        }

        main {
            padding: 40px;
            text-align: center;
        }

        h1 {
            font-size: 32px;
            color: #111827;
        }

        .button {
            display: inline-block;
            padding: 12px 24px;
            margin: 10px;
            font-size: 16px;
            text-decoration: none;
            color: #fff;
            border-radius: 8px;
            transition: background-color 0.2s ease;
        }

        .button.articles {
            background-color: #6366f1;
        }

        .button.articles:hover {
            background-color: #4f46e5;
        }

        .button.add {
            background-color: #10b981;
        }

        .button.add:hover {
            background-color: #059669;
        }
    </style>
</head>
<body>
    <header>
        <h2>Мой сайт</h2>
    </header>

    <main>
        <h1>Добро пожаловать!</h1>
        <a href="./pages/contact.php" class="button contact">Статьи</a>
        <a href="./pages/about.php" class="button about">О нас</a>
        <a href="/articles.php" class="button articles">Статьи</a>
        <a href="/pages/add_article.php" class="button add">Добавить статью</a>
    </main>

    <footer>
        &copy; <?php echo date("Y"); ?> Все права защищены.
    </footer>
</body>
</html>
