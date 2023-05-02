<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer();
$mail->CharSet = 'utf-8';

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];

$mail->isSMTP();                                      
$mail->Host = 'smtp.gmail.com';  																							
$mail->SMTPAuth = true;                              
$mail->Username = 'd.minyailov@aues.kz'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = 'U$gz9tcF'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                           
$mail->Port = 465; // этот порт может отличаться у других провайдеров

$mail->setFrom('d.minyailov@aues.kz'); // от кого будет уходить письмо?
$mail->addAddress('dimasik3956525@gmail.com');     // Кому будет уходить письмо 

$mail->Subject = 'Заявка с тестового сайта';
$mail->Body    = '' .$name . ' оставил заявку, его телефон ' .$phone. 
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: thank-you.html');
}
?>