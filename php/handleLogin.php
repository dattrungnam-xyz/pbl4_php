<?php

session_start();




$field_username ="Username";
$value_username =  $_REQUEST['username'];

$value_password = $_REQUEST['password'];

$server_name = "localhost";
$user_name = "root";
$password = "";

$connection = mysqli_connect($server_name, $user_name, $password) or die("Khong the ket noi den co so du lieu");
mysqli_select_db($connection,"pbl4_v2");
$sql = "SELECT * FROM admin WHERE "  .$field_username.  " = '"  .$value_username.  "'";

$rs = mysqli_query($connection,$sql);
$result = false;

while ($row = mysqli_fetch_array($rs))
{
    if($row['Password'] == $value_password)
    {
        $result = true;
        break;
    }
}
if($result== true)
{
    $_SESSION['login'] = true;  
    $_SESSION['user'] = $value_username;
    header('Location: index.php');
}
else{
    header('Location: login.php');
}


mysqli_free_result($rs);
