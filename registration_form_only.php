<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <title>Регистрация пользователя</title>
</head>

<form action='registration_only.php' method='POST'>
    <p>Имя</p>
    <input type="text" name="name">
    <p>Электронная почта</p>
    <input type="email" name="mail">
    <p>Номер телефона</p>
    <input type="tel" name="contact" pattern="+7[0-9]{10}">
    <p>Пароль</p>
    <input type="password" name="password">
    <p>Повторите пароль</p>
    <input type="password" name="repeat_password">
    <br><br>
    <button type="submit">Зарегестрироваться</button>

</form>

</html>