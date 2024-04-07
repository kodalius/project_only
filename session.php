<?php
session_start();
//print_r($_SESSION['user_id']);
if (!isset($_SESSION['user_id'])) {
    // Перенаправляем пользователя на страницу входа, если он не авторизован
    header("Location:autorisation_form_only.php");
    exit();
}
else 
{
    header("Location:account_form.php");
}

