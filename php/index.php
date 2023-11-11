
<?php

$header_display = "Login";

session_start();
if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
    header('Location:listBot.php');
}
else
{
include_once('noLogin.php');
}
?>

<?php


