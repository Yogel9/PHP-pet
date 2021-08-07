<!DOCTYPE html>
<html lang="ru">
<head>
  <title>
    Контактная форма
  </title>
</head>
<body>

<?php require "blocks/header.php" ?>


<div class="container mt-5">
<h3>Контактная форма</h3>
<form action="validation-form/check.php" method="post">
  
 <input type="email" name="email" placeholder="Введите Email" class="form-control">
 <br>
 <textarea type="text" name="message"  placeholder= "Введите ваше сообщение" class="form-control"></textarea>
 <br>
<button type="submite" name="send" class="button btn-success"> Отправить </button>
</form>
</div>


<?php require "blocks/footer.php" ?>

</body>
</html>