<?php
include 'includes/db.php';

$result = pg_query($db_conn, "SELECT * FROM articles ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Статьи</title>
    <link rel="icon" href="/assets/images/favicon.ico" type="image/x-icon">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9fafb;
            margin: 0;
            padding: 0;
        }

        header, footer {
            background-color: #111827;
            color: white;
            padding: 15px;
            text-align: center;
        }

        main {
            padding: 40px;
        }

        h1 {
            font-size: 32px;
            color: #111827;
            text-align: center;
        }

        .article {
            background-color: #fff;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            padding: 20px;
            margin: 20px 0;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .article h2 {
            font-size: 24px;
            color: #111827;
            margin-bottom: 10px;
        }

        .article p {
            font-size: 16px;
            color: #374151;
            line-height: 1.6;
        }

        .article small {
            display: block;
            margin-top: 10px;
            font-size: 14px;
            color: #6b7280;
        }

        .button {
            display: inline-block;
            padding: 12px 24px;
            font-size: 16px;
            text-decoration: none;
            color: #fff;
            background-color: #3b82f6;
            border-radius: 8px;
            margin-top: 20px;
            transition: background-color 0.2s ease;
        }

        .button:hover {
            background-color: #2563eb;
        }
    </style>
</head>
<body>
    <header>
        <h2>Мой сайт</h2>
    </header>

    <main>
        <h1>Список статей</h1>

        <?php
        if (pg_num_rows($result) > 0) {
            while ($row = pg_fetch_assoc($result)) {
                echo "<div class='article'>
                        <h2>{$row['title']}</h2>
                        <p>{$row['content']}</p>
                        <small>Дата создания: {$row['created_at']}</small>
                      </div>";
            }
        } else {
            echo "<p>Нет статей для отображения.</p>";
        }
        ?>

        <a href="/pages/add_article.php" class="button">Добавить статью</a>
    </main>

    <footer>
        &copy; <?php echo date("Y"); ?> Все права защищены.
    </footer>
</body>
</html>
