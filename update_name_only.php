<?php
require "vendor/db.php";
session_start();
if (!isset($_SESSION['a_contact'])) {
    header("Location:autorisation_form_only.php");

}

$a_contact = $_SESSION['a_contact'];
echo $_POST['upd_mail'];
if ($_POST['upd_name']) {
    $upd_name = $_POST['upd_name'];
    $users = mysqli_query($db, "UPDATE `only_users` SET `name` = '$upd_name' WHERE `contact` = '$a_contact' or `mail` = '$a_contact'");
    echo "Имя успешно изменено!";
} elseif ($_POST['upd_mail']) {
    $upd_mail = $_POST['upd_mail'];
    $users = mysqli_query($db, "UPDATE `only_users` SET `mail` = '$upd_mail' WHERE `contact` = '$a_contact' or `mail` = '$a_contact'");
    $_SESSION = array();
    session_destroy();
    header("Location:autorisation_form_only.php");

} elseif ($_POST['upd_contact']) {
    $upd_contact = $_POST['upd_contact'];


    $users = mysqli_query($db, "UPDATE `only_users` SET `contact` = '$upd_contact' WHERE `contact` = '$a_contact' or `mail` = '$a_contact'");
    session_destroy();
    $_SESSION = array();
    header("Location:autorisation_form_only.php");
} elseif ($_POST['upd_password'] && ($_POST['upd_password'] == $_POST['repeat_upd_password'])) {
    $upd_password = $_POST['upd_password'];
    $users = mysqli_query($db, "UPDATE `only_users` SET `password` = '$upd_password' WHERE `contact` = '$a_contact' or `mail` = '$a_contact'");
    $_SESSION = array();
    session_destroy();
    header("Location:autorisation_form_only.php");
}



