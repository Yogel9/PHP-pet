<?php 
 $task = $_POST['task'];
 $db='php_pit';
 $user='root';
 $pass='';
 $table='tasks';

 if($task == '')
 {
 	echo 'Введите задание';
 	exit();
 }


 //пробуем использовать pdo
 $dsn = 'mysql:host=localhost;dbname=php_pit';
 $pdo = new PDO($dsn,$user,$pass);

 $sql = 'INSERT INTO tasks(task) VALUES (:task) ';//создаем строку с командой которую не выполняем
 $query =$pdo->prepare($sql);//подготавливаем команду
 $query->execute(['task' => $task]);//выполняем

 header('Location: ../todoList.php');

 ?>