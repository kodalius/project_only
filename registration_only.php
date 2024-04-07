<?php
$name = $_POST['name'];
$mail = $_POST['mail'];
$contact = $_POST['contact'];
$password = $_POST['password'];
$repeat_password = $_POST['repeat_password'];


require "vendor/db.php";

$users = mysqli_query($db, "SELECT mail,contact FROM `only_users` WHERE contact='$contact'or mail = '$mail' ");

if (mysqli_num_rows($users) !== 0) {
    echo 'Пользователь с данным телефоном или почтой уже существует!';
} elseif ($name && $mail && $contact && $password && $repeat_password && $password == $repeat_password) {
    mysqli_query($db, "INSERT INTO `only_users` (`id`, `name`, `mail`, `contact`, `password`) VALUES (NULL, '$name', '$mail', '$contact', '$password')");
    header("Location:run_only.php");

} else {
    echo 'Проверьте,все ли поля заполнены и верны';

}




