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
  <h1>Список дел</h1>

  <div class="container col-lg-8 col-md-10 col-sm-12 col-xs-12 offset-lg-4 offset-md-1">
  <form action="validation-form/addWork.php" method="post">
      <input type="text" name="task" id="task" placeholder="Нужно сделать.." class="form-control">

      <button type="submite" name="sendTask" class="btn btn-success">Отправить</button>
  </form>
</div>
     


<?php require 'validation-form/configDB.php';//подключаем бд
if (isset($_COOKIE['user']))
{
  $login=$_COOKIE['user'];
}else
{
  exit();
}

 $sql = 'SELECT * FROM `tasks`  WHERE `login`= ?';
 $query = $pdo ->prepare($sql);//подготавливаем команду
 $query->execute([$login]);
   while ($row= $query->fetch (PDO::FETCH_OBJ))://Извлекает следующую строку и возвращает её в виде объекта
?>
  <div class="list-group mt-1 col-lg-8 col-md-10 col-sm-12 col-xs-12 offset-lg-2 offset-md-1">
      <div class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
        <div class="d-flex gap-2 w-1000 justify-content-between">
        <div>
         <h6 class="mb-0">
          <?php echo $row->task; ?>
          </h6>
          <p class="mb-0 opacity-75">
            <?php echo DateTime::createFromFormat('Y-m-d',$row->date)->format('d-m-Y'); ?></p>
          <a  class="btn  btn-outline-danger" href="validation-form/deleteWork.php?id=<?php echo $row->id;?>"> Удалить</a>

        </div>
        
       </div>
     </div>
  </div>
<?php endwhile; ?>
</div>

<?php require "blocks/footer.php" ?>
      </div>
</body>
</html>