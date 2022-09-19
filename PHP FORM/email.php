<?php

$name = addcslashes($_POST['name']);
$email = addcslashes($_POST['email']);
$message = addcslashes($_POST['message']);

$to = "dariobferreira@gmail.com";
$subject = "Contato Teste PHP";
$body = "Nome: ".$name. "\r\n".
    "Email: ".$email. "\r\n".
    "Mensagem: ".$message;

$header = "From: dariobferreira@gmail.com"."\r\n".
        "Reply-To:".$email."\r\n".
        "X=Mailer:PHP./".phpversion();

if(mail($to,$subject,$body,$header)){
    echo("Email enviado!");
}
else{
    echo("O email não pode ser enviado");
}