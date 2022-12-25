<?php
 require 'PHPMailer/src/PHPMailer.php';
 require 'PHPMailer/src/SMTP.php';
   use PHPMailer\PHPMailer\PHPMailer;
   use PHPMailer\PHPMailer\SMTP;
   use PHPMailer\PHPMailer\Exception;

   $servername = "127.0.0.1";
   $username = "murotbek";
   $password = "7820";
   $db = "bd_auth";
   // Create connection
   $mysql = mysqli_connect($servername, $username, $password,$db);
   if (!$mysql) {
     die("Connection failed: " . mysqli_connect_error());
   }
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    //BD info
    $email = trim($_REQUEST['email']);
    $firstname = trim($_REQUEST['firstname']);
    $pass = trim($_REQUEST['pass']);
    $positionjob = trim($_REQUEST['positionjob']);
    $level = $_REQUEST['level'];
    $language = $_REQUEST['language'];
    $comments = trim($_REQUEST['coments']);
    $file = $_REQUEST['file'];

    if (empty($email) || empty($firstname) || empty($pass) ) {
      $user_is_created = false;
      // die("Connection failed: " . mysqli_connect_error());
    }else{
      $user_is_created = $mysql->query("INSERT INTO `users` ( email, firstname, pass, positionjob, level, language, comments,file) VALUES ( '$email', '$firstname', '$pass', '$positionjob', '$level', '$language', '$comments','$file')");

      $mail = new PHPMailer(true);

      //Enable SMTP debugging.
      $mail->SMTPDebug = SMTP::DEBUG_OFF;
      //Set PHPMailer to use SMTP.
      $mail->isSMTP();
      //Set SMTP host name
      $mail->Host = "smtp.mail.ru";
      //Set this to true if SMTP host requires authentication to send email
      $mail->SMTPAuth = true;
      //Provide username and password
      $mail->Username = "pochta.send@internet.ru";
      $mail->Password = "DFZNMrmHQqwsTGmxa93u";
      //If SMTP requires TLS encryption then set it
      $mail->SMTPSecure = "tls";
      //Set TCP port to connect to
      $mail->Port = 587;
      $mail->From = "pochta.send@internet.ru";
      $mail->FromName = "Full Name";
      $mail->addAddress("murotahmedoc@gmail.com", "Админ");
      $mail->isHTML(true);
      $mail->Subject = "Contact with us";
      $mail->Body = "<p>Имя:$firstname</p>
      <p>Email:$email</p>
      <p>Пароль:$pass</p>
      <p>Позиция:$positionjob</p>
      <p>Уровень:$level</p>
      <p>Язык:$language</p>
      <p>Комментарий:$comments</p>
      <p>Файл:$file</p>
      ";
      $mail->AltBody = "This is the plain text version of the email content";
      $mail->send();


    }



}
$custumers = $mysql->query("SELECT * FROM `users`");

while ($result = mysqli_fetch_array($custumers, MYSQLI_ASSOC)) {
    $users[] = $result;
}

require 'index.php';
exit;
