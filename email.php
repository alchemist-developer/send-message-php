<?php

if(isset($_POST['email']) && !empty($_POST['email'])) {
    $name = addslashes($_POST['name']);
    $email = addslashes($_POST['email']);
    $message = addslashes($_POST['message']);

    $to = "alchdev@alchemistic.tech"; //example
    $subject = "Contato - Site";
    $body = "Nome: ".$name. "". "r\n".
            "Email: ".$email. "". "r\n".
            "Mensagem: ".$message;
    $header = "From: sendMail@alchemistic.tech" . "r\n" .
                "Reply-To: ".$email. "r\n" .
                "X-Mailer: PHP/".phpversion();

            if(mail($to, $subject, $body, $header)) {
                echo("sent successfully");
            } else {
                echo("email cannot be sent");
            }
}

?>
