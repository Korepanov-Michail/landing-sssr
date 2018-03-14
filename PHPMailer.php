﻿<?php
$email = ($_POST['email']);
$phone = ($_POST['phone']);
$text = ($_POST['text']);
//strip_tags заменяет знаки < >  на безопасные спецсимволы
$email = strip_tags($email);
$phone = strip_tags($phone);
$text = strip_tags($text);

$headers = "Content-type:text/html ; Charset=utf-8";

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    if(mail('admin@landing-sssr.com',"письмо от : " . $email   ,  'телефон :' . $phone . ' | ' . ' текст сообщения : ' . $text , $headers)){
       echo 'письмо отправвлено';
    }else{
       echo 'ошибка';
    };
}else{
   echo "email  указан неверно.";
};
?>

