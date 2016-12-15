<?php
$fio = $_POST['fio'];
$email = $_POST['email'];
$fio = htmlspecialchars($fio);
$email = htmlspecialchars($email);
$fio = urldecode($fio);
$email = urldecode($email);
$fio = trim($fio);
$email = trim($email);
if (mail("shakespeare@hotbox.ru", "Письмо с сайта", "ФИО:".$fio.". E-mail: ".$email ,"From: Альбина Купцова \r\n")){     
	echo "<script>alert('сообщение успешно отправлено');</script>"; 
} else { 
    echo "<script>alert('сообщение успешно не отправлено');</script>";
}
?>