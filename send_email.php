<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $observacao = htmlspecialchars($_POST['observacao']);

    $to = "willianferreira1987@hotmail.com"; // Substitua pelo e-mail de destino
    $subject = "Nova Mensagem do Formulário";
    $message = "Nome: $nome\nE-mail: $email\nObservação: $observacao";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "E-mail enviado com sucesso!";
    } else {
        echo "Falha ao enviar o e-mail.";
    }
}
?>
