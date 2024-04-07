<?php
session_start();
//define('SMARTCAPTCHA_SERVER_KEY', 'enter your secret server key ');

function check_captcha($token)
{
    $ch = curl_init();
    $args = http_build_query([
        "secret" => SMARTCAPTCHA_SERVER_KEY,
        "token" => $token,
        "ip" => $_SERVER['REMOTE_ADDR'],
    ]);
    curl_setopt($ch, CURLOPT_URL, "https://smartcaptcha.yandexcloud.net/validate?$args");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 1);

    $server_output = curl_exec($ch);
    $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($httpcode !== 200) {
        echo "Allow access due to an error: code=$httpcode; message=$server_output\n";
        return true;
    }
    $resp = json_decode($server_output);
    return $resp->status === "ok";
}
$token = $_POST['smart-token'];
if (check_captcha($token)) {
    $a_contact = $_POST['a_contact'];
    $a_password = $_POST['a_password'];
    require "vendor/db.php";
    $users = mysqli_query($db, "SELECT * FROM `only_users` WHERE contact='$a_contact'or mail = '$a_contact' ");
    $user = mysqli_fetch_assoc($users);


    if (mysqli_num_rows($users) !== 0 && $user['password'] == $a_password) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['a_contact'] = $_POST['a_contact'];

        header("Location: session.php");
    } else {
        echo 'Проверьте правильность введенных данных';

    }
} else {
    echo "Robot\n";
}