<?php
	/*if(isset($_COOKIE['user']) && $_COOKIE['user']=='yes')
	 setcookie('user','yes', time() - 3600, '/');//'.tmweb.ru'
	else
	 setcookie('user','yes',time() + 3600,'/');	

    header('Location: /');//переадрисация*/
  


 $login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
 $password = filter_var(trim($_POST['password']),FILTER_SANITIZE_STRING);
 $name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
  
  if(mb_strlen ($login)<2 || mb_strlen($login)>100)
  {
	echo "Недопустимая длина логина";
	exit();
  } elseif (mb_strlen ($password)<2 || mb_strlen($password)>20)
  {
  	echo "Недопустимая длина пароля (от 2 до 20 символов)";
  	exit();
  } elseif (mb_strlen ($name)<1 || mb_strlen($name)>40)
  {
  	echo "Недопустимая длина пароля (от 2 до 20 символов)";
  	exit();
  }

$password = md5($password."salt");// создаем хэш

$mysql = new mysqli('localhost','root','','php_pit');//подключение к бд
$mysql->query("INSERT INTO `users`(`login`,`pass`,`name`) VALUES ('$login','$password','$name')");

$mysql->close();

header('Location: /');

?>