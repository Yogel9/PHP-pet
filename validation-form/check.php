<?php



 $email = $_POST['email'];
 $message = $_POST['message'];

 $error='';
 if(trim($email)=='')//trim удаляет пробелы до и после
	$error ='Введите ваш email';
    elseif (trim($message)=='') {
  		$error='Введите сообщение';
  	    }	elseif (strlen($message)<10) {
            $error ='Укажите сообщение, содержащее больше 10 символов';
  	        }


  	if($error!='')
  	{
  		echo $error;
  		exit;
  	}
/*может не работать в зависимости от хостинга*/
 $subject ="=?utf-8?B?".base64_encode("Сообщение с сайта Антона")."?=";//заголовок сообщения
 $headers = "Form: $email\r\nReply-to: $email\r\n\Content-type: text/html;charset=utf-8\r\n";
 mail("homeleo9458@gmail.com",$subject,$message,$headers);//отправка сообщения

 header('Location: /about.php');//переадрисация

?>