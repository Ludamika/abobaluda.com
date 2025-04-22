<?php
$db_conn = pg_connect("host=127.0.0.1 dbname=php_luda user=postgres password='password'")
    or die("Ошибка подключения: " . pg_last_error());

echo "Успешное подключение к базе данных!";
?>

