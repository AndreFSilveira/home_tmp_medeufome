teste
<?php
	error_reporting(E_ALL); 
	ini_set("display_errors", 1);
	require("PHPMailer/PHPMailerAutoload.php");

$Host = 'smtp.mandrillapp.com';
$Username = 'contato@medeufome.com';
$Password = '4yvWFUofBGYLb4fI4Z95Nw';
$Port = "587";
$mail = new PHPMailer();
$mail->IsSMTP(); // telling the class to use SMTP
$mail->Host = $Host; // SMTP server
$mail->SMTPDebug = 0; // enables SMTP debug information (for testing)
$mail->SMTPAuth = true; // enable SMTP authentication
$mail->Port = $Port; // set the SMTP port for the service server
$mail->Username = $Username; // account username
$mail->Password = $Password; // account password
$mail->From = 'contato@medeufome.com';
$mail->FromName = 'MeDeuFome.com';
$mail->Subject = "Teste";
// $mail->AddAddress($To, "");
$mail->AddAddress('contato@medeufome.com');
// ENVIO DO EMAIL PARA O ESTABELECIMENTO
$mail->MsgHTML("<h1>Nome:</h1>");
if(!$mail->Send()) {
	$mensagemRetorno = 'Erro ao enviar e-mail: '. print($mail->ErrorInfo);
} else {
	$mensagemRetorno = 'E-mail enviado com sucesso!';
}
// Limpa os destinatários e os anexos
$mail->ClearAllRecipients();
$mail->ClearAttachments();
// ENVIO DO EMAIL PARA O CLIENTE
// $mail->MsgHTML($customer_email);
// if(!$mail->Send()) {
// 	$mensagemRetorno = 'Erro ao enviar e-mail: '. print($mail->ErrorInfo);
// } else {
// 	$mensagemRetorno = 'E-mail enviado com sucesso!';
// }
die(var_dump($mensagemRetorno));
exit;

?>	