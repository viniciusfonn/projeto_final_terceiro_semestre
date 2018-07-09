<?php 
$nome=$_POST['nome'];
$email=$_POST['email'];
$mensagem=$_POST['mensagem'];




use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require "PHPMailer/src/Exception.php";
require "PHPMailer/src/PHPMailer.php";
require "PHPMailer/src/SMTP.php";


$mail= new PHPMailer();

$mail->isSMTP();
$mail->Host='smtp.gmail.com';
$mail->Port= 587;
$mail->SMTPSecure= 'tls';
$mail->SMTPAuth = true;
$mail->Username="crudzera@gmail.com";
$mail->Password="crudzera123";


$mail->setFrom("crudzera@gmail.com" , "vinao");
$mail->addAddress("crudzera@gmail.com");
$mail->Subjetc="Email de contato do crudzera";
$mail->msgHTML("<html>de: {$nome} <br/> email: {$email}<br/> mensagem: {$mensagem} </html>");
$mail->AltBody="de: {$nome}\n email:{$email} \n mensagem:{$mensagem}";

if($mail->send()){
	header("Location: contato.php?sucesso=1");
}else{
	echo $mail->SMTPDebug = 2;
	
	header( "Refresh:5; url=contato.php?erro=0");
}

 ?>