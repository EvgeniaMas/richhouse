<?php 
require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';
// $name = $_POST['user_name'];
$phone = $_POST['user_phone'];

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru'; 																		// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'rich-house3@mail.ru'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = 'zR1411houseA8'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('rich-house3@mail.ru'); // от кого будет уходить письмо?
$mail->addAddress('rich-house3@mail.ru');     // Кому будет уходить 
$mail->isHTML(true);                                // Set email format 
$mail->Subject = 'Заявка с сайта Richhouse3';
$mail->Body    = 'Посетитель оставил заявку, его телефон ' .$phone. ;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: thanks.html');
}
?>