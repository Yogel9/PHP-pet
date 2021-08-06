<?php
	if(isset($_COOKIE['user']) && $_COOKIE['user']=='yes')
	 setcookie('user','yes', time() - 3600, '/');//'.tmweb.ru'
	else
	 setcookie('user','yes',time() + 3600,'/');	

    header('Location: /');//переадрисация
?>