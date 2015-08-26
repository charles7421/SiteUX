<?php

$para = "contato@uxsolucoes.com.br";
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$emailRetorno = $_POST['email'];
$assunto = $_POST['assunto'];
//4 – Agora definimos a mensagem que vai ser enviado no e-mail 
$mensagem = "<strong>Nome: </strong>" .$nome;
$mensagem .= "<br> <strong>Telefone: </strong>" .$telefone;
$mensagem .= "<br> <strong>Email: </strong>" .$emailRetorno;
$mensagem .= "<br> <strong>Mensagem: </strong>" . $_POST['mensagem'];
$headers = "Content-Type:text/html; charset=UTF-8\n";
$headers .= "From: Contato UX<contato@uxsolucoes.com.br>\n";
$headers .= "X-Sender: <contato@uxsolucoes.com.br>\n";
$headers .= "X-Mailer: PHP v" . phpversion() . "\n";
$headers .= "X-IP: " . $_SERVER['REMOTE_ADDR'] . "\n";
$headers .= "Return-Path: <contato@uxsolucoes.com.br>\n";
$headers .= "MIME-Version: 1.0\n";
mail($para, $assunto, $mensagem, $headers);
$msg = "Sua mensagem foi enviada com sucesso.";
echo "<script>location.href=`index.html`; alert(`$msg`);</script>";
?> 
