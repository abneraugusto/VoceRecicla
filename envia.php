<?php
try{
	$nome = $_POST['Nome'];
	$telefone = $_POST['Telefone'];
	$email = $_POST['E-mail'];
	$mensagem = $_POST['Mensagem'];
	$headers = "From: ".$email."\r\n";

	$html = "".
	"Enviado de: ".$nome."\n".
	"Telefone: ".$telefone."\n".
	"Celular: ".$celular."\n".
	"E-mail: <a mailto='".$email."'>".$email."</a>"."\n".
	"------------------------------------------------------"."\n".
	$mensagem;

	$html = wordwrap($html, 70);
	mail("vocerecicla2017@gmail.com", "Nova Mensagem de Contato", $html, $headers);
	echo json_encode(array("Mensagem" => "E-mail enviado com sucesso."));
}catch(Exception $e){
	echo json_encode(array("Mensagem" => "Erro ao enviar e-mail."));
}
?>
