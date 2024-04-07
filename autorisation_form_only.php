<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Авторизация</title>
    <script src="https://smartcaptcha.yandexcloud.net/captcha.js" defer></script>
</head>

<body>
    <form action='autorisation_only.php' method='POST'>
        <p>Телефон или почта</p>
        <input type="text" name="a_contact">
        <p>Пароль</p>
        <input type="password" name="a_password">
        <button type="submit">Войти</button>
        <div id="captcha-container" class="smart-captcha"
            data-sitekey="ysc1_vYE2QrhRkvIDC7mNebRUPRNyTJeXgm06Iu1bTari3e500cbe">
            <input type="hidden" name="smart-token" value="<токен>">
        </div>
    </form>

</body>

</html>