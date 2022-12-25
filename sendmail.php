<?php
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
// require 'vendor/autoload.php';



// Создаем письмо
$mail = new PHPMailer();
$mail->isSMTP();                   // Отправка через SMTP
$mail->Host   = 'smtp.mail.ru';  // Адрес SMTP сервера
$mail->SMTPAuth   = true;          // Enable SMTP authentication
$mail->Username   = 'akhmedov_2000@mail.ru';       // ваше имя пользователя (без домена и @)
$mail->Password   = 'JBw1KLiBcZuipeynUXEs';    // ваш пароль
$mail->SMTPSecure = 'ssl';         // шифрование ssl
$mail->Port   = 465;               // порт подключения

$mail->setFrom('akhmedov_2000@mail.ru', 'Иван Иванов');    // от кого
$mail->addAddress('yunost.zoomin@mail.ru', 'Вася Петров'); // кому
$mail->isHTML(true);

$mail->Subject = 'Yunost';

$body = '<h1>Заказ!</h1>';


if (trim(!empty($_POST['name']))){
  $body.='<p><strong>Имя:</strong> '.$_POST['name'].'<p>';
}
if (trim(!empty($_POST['phoneNumber']))){
  $body.='<p><strong>Номер телефона:</strong> '.$_POST['phoneNumber'].'<p>';
}
if (trim(!empty($_POST['email']))){
  $body.='<p><strong>E-mail:</strong> '.$_POST['email'].'<p>';
}
if (trim(!empty($_POST['message']))){
  $body.='<p><strong>Вид услуги:</strong> '.$POST['message'].'<p>';
}


$mail ->Body = $body;

if(!$mail->send()){
  $message = 'Ошибка';
}else{
  $message = "Данные отправлены!";
}
$response = ['message' => $message, 'mail'=>$mail];

header('Content-type: application/json');
echo json_encode($response);
$mail->SMTPDebug  = 1;

?>
