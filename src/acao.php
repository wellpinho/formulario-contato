<?php

		// email de destino
		$para = "contato@dominio.com.br";

		$assunto = "Pedido de orçamento feito pelo site";
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$tel = $_POST['tel'];
		$cidade = $_POST['cidade'];
		$data = $_POST['data'];
		$hora = $_POST['hora'];
		$qtConvidados = $_POST['qtConvidados'];
		$msg = $_POST['msg'];

		$headers = "Content-Type: text/plain;charset=utf-8\r\n";
		$headers .="From: $email\r\n";
		$headers .= "Reply-To: $email\r\n"

		// Aqui é como o email será exibido 
		$corpo = "Formulário da página de contato\r\n";
		$corpo .= "Nome:" . $nome . "\r\n";
		$corpo .= "E-mail:" . $email . "\r\n";
		$corpo .= "Telefone: " . $tel . "\r\n";
		$corpo .= "Cidade: " . $cidade . "\r\n";
		$corpo .= "Data: " . $data . "\r\n";
		$corpo .= "Hora: " .$hora . "\r\n";
		$corpo .= "Convidados: " . $qtConvidados . "\r\n";
		$corpo .= "Mensagem: " . $msg;	

		mail($para, $assunto, $corpo, $headers);

		// redirecionamento após o POST
		header("location:../obrigado.html?status=mensagem-enviada");

?>