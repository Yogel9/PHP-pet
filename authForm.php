<!DOCTYPE html>
<html lang="en">
<head>
	<title>Вход</title>
</head>
<body>
<?php require "blocks/header.php" ?>

 <div class="container mt-4">
 <h1>Форма входа</h1>
 <form action="" method="post">
	<input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
	<input type="text" class="form-control" name="password" id="pass" placeholder="Введите пароль"><br>
	<button class="btn btn-success" type="submite">Войти</button>
	<a class="btn" href="/regForm.php">Зарегистрироваться</a>
 </form>




 </div>



<?php require "blocks/footer.php" ?>


</body>
</html>