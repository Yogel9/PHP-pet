<!DOCTYPE html>
<html lang="ru">
<head>
	<title>
		Список дел
	</title>
</head>
<body>
 <?php require "blocks/header.php" ?>

<div class="list">
<div class="container">
  <h1>Список дел</h1>
  <form action="validation-form/add.php" method="post">
      <input type="text" name="task" id="task" placeholder="Нужно сделать.." class="form-control">
      <button type="submite" name="sendTask" class="btn btn-success">Отправить</button>

  </form>
</div>
</div>
<?php 
require 'validation-form/configDB.php' ?>
<?php require "blocks/footer.php" ?>

</body>
</html>