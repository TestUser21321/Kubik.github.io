<?php
error_reporting(E_ERROR | E_PARSE);
$login = filter_var(trim($_POST['login']),
FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']),
FILTER_SANITIZE_STRING);

$pass = md5($pass."hidnighisfi123");

$mysql = new mysqli('localhost', 'root', '', 'register-bd');
$result = $mysql->query("SELECT * FROM `users` WHERE `login` = 
'$login' AND `pass` = '$pass'");
$user = $result->fetch_assoc();
if ($user == 0) {
   echo '<h1>undefined user or empty spots</h1>'.'<a href="index.php">Go back</a>';
   exit();
} 


setcookie('user', $user['name'], time() + 3600, '/');
$mysql->close();

header('Location: index.php');



?>




