<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php

		if(isset($_POST(['email']) && !empty ($_POST(['email'])){
		
		$nome = addlashes($_POST(['nome']));
		$email = addlashes($_POST(['email']));
		$mensagem = addlashes($_POST(['mensagem']));
		$conteudo = addlashes($_POST(['conteudo']));
		
		$to = "davipassos010203@gmail.com";
		&subject = "Contato - Viana&Santos";
		$body = "Nome: ".$nome. "/r/n"
				"Email: ".$email. "/r/n"
				"Assunto: ".$mensagem. "/r/n"
				"Mensagem: ".$conteudo;
		$header = "From:josicleidepaiva1000@gmail.com". "/r/n"
					."Reply-to:".$email."/r/n"
					."X=Mailer:PHP/".phpversion();
					
		if(mail($to,$subject,$body,$header)){
		
			echo("Email enviado com sucesso !")
		
		}else{
		
			echo(Email não pode ser enviado);
		
		}
		
		
		
		
		}
	
	?> 
  </body>
</html>