<?php
  if(isset($_POST["email"]) &&) !empty($_POST [email])

 $nome = addcslashes($_POST ["name"]);
 $email = addcslashes($_POST ["email"]);
 $mesnsagen = addcslashes($_POST ["messege"]);
 

 $to = "contato@contato.com";
 $subject = "contato - contato";
 $body = "Name : ".$name."\r\n".
         "Email : ".$email."\r\n".
         "Mensagem : ".$mesnsagen;
  
$header = "Fron:contato@escolhido.com"."\r\n".
          "Replay-to:".$email."\r\n"
          "X=Mailer:PHP/".phpversion();


if (mail($to,$subject,$body,$header)) {
    echo("Email enviado com sucesso!")
} else {
    echo("O envio do Email falhou!")
}

?>