<?php 
 $task = $_POST['task'];
 

 if($task == '')
 {
 	echo 'Введите задание';
 	exit();
 }

 require 'configDB.php'; 
 //пробуем использовать pdo
 

 $sql = 'INSERT INTO tasks(task,date) VALUES (:task,:date) ';//создаем строку с командой которую не выполняем
 $query =$pdo->prepare($sql);//подготавливаем команду
 $query->execute(['task' => $task,'date'=>date('Y-m-d H:i:s')]);//выполняем
 header('Location: ../todoList.php');

 ?>