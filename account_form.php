<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <title>Аккаунт</title>

</head>
<p>Добрый день !</p>
<br><br>
<form action='update_name_only.php' method='POST'>
    <p>Изменить имя пользовтеля</p>
    <input type="text" name="upd_name">
    <button type="submit">ОК</button>
</form>
<form action='update_name_only.php' method='POST'>
    <p>Изменить почту</p>
    <input type="email" name="upd_mail">
    <button type="submit">ОК</button>
</form>
<form action='update_name_only.php' method='POST'>
    <p>Изменить телефон</p>
    <input type="tel" name="upd_contact">
    <button type="submit">ОК</button>
</form>
<form action='update_name_only.php' method='POST'>
    <p>Изменить пароль</p>
    <input type="text" name="upd_password">
    <p>Повтор пароля</p>
    <input type="text" name="repeat_upd_password">

    <button type="submit">ОК</button>
</form>

</html>