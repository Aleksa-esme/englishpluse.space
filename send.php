<?php
$fio = $_POST['fio'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$age = $_POST['age'];
$programm = $_POST['programm'];
$country = $_POST['country'];

$fio = htmlspecialchars($fio);
$email = htmlspecialchars($email);
$phone = htmlspecialchars($phone);
$age = htmlspecialchars($age);
$programm = htmlspecialchars($programm);
$country = htmlspecialchars($country);

$fio = urldecode($fio);
$email = urldecode($email);
$phone = urldecode($phone);
$age = urldecode($age);
$programm = urldecode($programm);
$country = urldecode($country);

$fio = trim($fio);
$email = trim($email);
$phone = trim($phone);
$age = trim($age);
$programm = trim($programm);
$country = trim($country);

$message = '
    Имя: '.$fio.'
    Телефон: '.$phone.'
    Email: '.$email.'
    Возраст: '.$age.'
    Страна: '.$country.'
    Пожелания по программе: '.$programm.'                                  
';

mail("esme1990@mail.ru", "Заявка с сайта", $message ,"From: info@englishplus.space \r\n"))
?>