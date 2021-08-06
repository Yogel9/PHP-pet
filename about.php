<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8"> <!-- кодировка -->
  <meta name="viewport" content="width=device-width,initial-scale=1.0"><!-- для мобильных -->
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"> <!-- bootstrap -->
  <title>
    Контактная форма
  </title>
</head>
<body>

<?php require "blocks/header.php" ?>


<div class="container mt-5">
<h3>Контактная форма</h3>
<form action="check.php" method="post">
  
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