<?php
	
	if(isset($_POST(['email']) && !empty($_POST(['email'])){

	$nome = addcslashes($_POST(['name']));
	$email = addcslashes($_POST(['email']));
	$mensagem = addcslashes($_POST(['message']));

	$to = "formcontato@bibliotecaonline.com";
	$subject = "FORMULARIO - Biblioteca";

	$body = "nome:  ".$nome.  "\n";
			"Email: ".$email. "\n";
			"Mensagem: ".$mensagem;

	$header = "From:professormatheuslobo@gmail.com"."\r\n"."Reply-To:".$email."\r\n"."X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){

	echo("Email enviado com sucesso");

}
else{
	echo("Email não pode ser enviado, tente novamente.");
}

?>
