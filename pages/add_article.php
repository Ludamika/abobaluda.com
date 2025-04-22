<?php
include '../includes/db.php';

// Обработка формы
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = pg_escape_string($_POST['title']);
    $content = pg_escape_string($_POST['content']);

    $result = pg_query_params(
        $db_conn,
        "INSERT INTO articles (title, content) VALUES ($1, $2)",
        [$title, $content]
    );

    if ($result) {
        header("Location: /articles.php");
        exit;
    } else {
        echo "Ошибка: " . pg_last_error($db_conn);
    }
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Добавить статью</title>
    <style>
        body {
            font-family: Arial;
            padding: 20px;
        }
        form {
            max-width: 600px;
            margin: auto;
        }
        input[type="text"], textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            padding: 10px 20px;
            background-color: #3b82f6;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #2563eb;
        }
    </style>
</head>
<body>

<h2>Добавить статью</h2>
<form method="post">
    <label for="title">Заголовок:</label>
    <input type="text" name="title" id="title" required>

    <label for="content">Содержимое:</label>
    <textarea name="content" id="content" rows="10" required></textarea>

    <button type="submit">Сохранить</button>
</form>

</body>
</html>
