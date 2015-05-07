<!DOCTYPE html>
<html lang="pt_BR">
<head>
	<meta charset="UTF-8">
	<title>Contato</title>
</head>
<body>
<?php
if($_POST)
{
require("contato/PHPMailer.php"); //Importa a class php mailer
$phpmail = new PHPMailer(); // faz uma instância da classe PHPMailer
$erros = "";

if(empty($_POST['nome'])){
 $erros .= "O nome deve ser preenchido.";
} else {
	$nome = $_POST['nome'];
}

if(empty($_POST['email']) ){
  $erros .= "O E-mail deve ser preenchido.";
}else{
  $email = $_POST['email'];
  @eregi("([\._0-9A-Za-z-]+)@([0-9A-Za-z-]+)(\.[0-9A-Za-z\.]+)",$email,$match);
if(!isset($match)){
   $erros .= "O e-mail informado é inválido.";
}
}

if(empty($_POST['assunto'])){
$erros .= "A assunto deve ser preenchido.";
} else {
	$assunto = $_POST['assunto'];
}
if(empty($_POST['mensagem'])){
$erros .= "A mensagem deve ser preenchida.";
}

if( empty($erros) ){
$phpmail->IsSMTP(); // Define que a mensagem será SMTP
$phpmail->Host = "mx1.hostinger.com.br"; // Endereço do servidor SMTP, não altere esse campo.
$phpmail->SMTPAuth = true; // ativando a autenticação SMTP (obrigatório, não alterar)
$phpmail->Username = 'contato@godfood.com.br'; // usuário de smtp Usuário do servidor SMTP (endereço de email), altere para suas informações.
$phpmail->Password = '3eomu7hl69'; // Senha do servidor SMTP (senha do email usado), altere para suas informações
$phpmail->Port = 2525; //Porta de envio de SMTP (obrigatório, não alterar)
$phpmail->From = $email; //Utilize o mesmo usuário do campo username, altere para suas informações
$phpmail->FromName = $nome; //tem que ser o mesmo usuário do campo username, altere para suas informações


$phpmail->AddAddress('contato@godfood.com.br', 'Contato - GodFood'); //E-mail que irá receber a mensagem
$phpmail->AddCC('contato@godfood.com.br', 'Contato - GodFood');  //E-mail que irá receber a cópia da mensagem
$phpmail->AddBCC('contato@godfood.com.br', 'Contato - GodFood'); //E-mail que irá receber a cópia oculta da mensagem

$phpmail->IsHTML(true); // Define que o e-mail será enviado como HTML
$phpmail->CharSet = 'UTF-8'; // Charset da mensagem


$phpmail->Subject  = $assunto; // Assunto da mensagem
$phpmail->Body .= "\r\n Mensagem: ".nl2br($_POST['mensagem']).""; // Texto da mensagem

//Envio da Mensagem
$enviado = $phpmail->Send();

//Limpa os destinatários
$phpmail->ClearAllRecipients();
$phpmail->ClearAttachments();

//Exibe uma mensagem de resultado
if ($enviado) {
echo '<h3>E-mail enviado com sucesso! <a href="index.php" title="voltar">Voltar ao Inicio</a></h3> ';
} else {
echo '<h3>Não foi possível enviar o e-mail. <a href="index.php" title="voltar">Voltar ao Inicio</a> </h3>';
}
} else {
echo $erros;
}
}
?>

</body>
</html>
