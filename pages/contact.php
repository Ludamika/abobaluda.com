<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    if (!empty($name) && !empty($email) && !empty($message)) {
        $to = "your-email@example.com";  // Замените на свой email
        $subject = "Сообщение с сайта ponka.ru";
        $body = "Имя: $name\nEmail: $email\nСообщение: $message";
        
        if (mail($to, $subject, $body)) {
            echo "<p>Сообщение отправлено! Мы свяжемся с вами скоро.</p>";
        } else {
            echo "<p>Произошла ошибка при отправке сообщения. Попробуйте снова.</p>";
        }
    } else {
        echo "<p>Пожалуйста, заполните все поля формы.</p>";
    }
}
?>

<?php include '../includes/header.php'; ?>
<main>
    <h1>Контакты</h1>
    <form action="contact.php" method="post">
        <input type="text" name="name" placeholder="Имя" required>
        <input type="email" name="email" placeholder="Email" required>
        <textarea name="message" placeholder="Сообщение" required></textarea>
        <button type="submit">Отправить</button>
    </form>
</main>
<?php include '../includes/footer.php'; ?>

