<?php 
 $task = $_POST['task'];
 

 if($task == '')
 {
 	echo 'Введите задание';
 	exit();
 }

 require 'configDB.php'; 
 //пробуем использовать pdo
 

 $sql = 'INSERT INTO tasks(task,date,login) VALUES (:task,:date,:login) ';//создаем строку с командой которую не выполняем
 $query =$pdo->prepare($sql);//подготавливаем команду
 $query->execute(['task' => $task,'date'=>date('Y-m-d H:i:s'),'login'=>$_COOKIE['user'] ]);//выполняем
 header('Location: ../todoList.php');

 ?>