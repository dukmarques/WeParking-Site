<?php

if(isset($_POST['email']) && !empty($_POST['email'])){
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $mensagem = "Cadastro para atualizações do WeParking";
    
    $to = "dudu.ms0310@gmail.com";
    $subject = "Registro de atualizações WeParkig";
    $body = "Nome: ".$nome . "\n"
            ."E-mail: ".$email . "\n"
            ."Mensagem: ".$mensagem;

    $header = "From: dudu.mds0310@gmail.com"."\r\n"
                ."Replay-To:".$email."\r\n"
                ."X=Mailer:PHP/".phpversion();

    if(mail($to, $subject, $body, $header)){
        echo("E-mail enviado com sucesso!");
    }else{
        echo("E-mail não pode ser enviado!");
    }
}

?>