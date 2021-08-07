<?php 
 $login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
 $password = filter_var(trim($_POST['password']),FILTER_SANITIZE_STRING);
  
 
$password = md5($password."salt");// создаем хэш

$mysql = new mysqli('localhost','root','','php_pit');//подключение к бд

$result = $mysql->query("SELECT * FROM `users` WHERE `login`= '$login' AND `pass`='$password'");
$user = $result->fetch_assoc();//перевод данных в привычный массив

if(is_countable($user)!= true || count($user) == 0)
{
	echo "Такой пользователь не найден";
	exit();
}

setcookie('user',$user['name'],time() + 3600, "/");

$mysql->close();

header('Location: /');

 ?>