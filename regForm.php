<!DOCTYPE html>
<html lang="en">
<head>
	<title>Регестрация</title>
</head>
<body>
<?php require "blocks/header.php" ?>

 <div class="container mt-4">
 <h1>Форма регестрации</h1>
 <form action="regSql.php" method="post">
	<input type="text" class="form-control" name="name" id="name" placeholder="Введите имя"><br>
	<input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
	<input type="text" class="form-control" name="password" id="pass" placeholder="Введите пароль"><br>
	<button class="btn btn-success" type="submite">Зарегестрировать</button>
 </form>




 </div>



<?php require "blocks/footer.php" ?>


</body>
</html>