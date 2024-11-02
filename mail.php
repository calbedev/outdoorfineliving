<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura dos dados do formulário
    $name = htmlspecialchars(trim($_POST['con_name']));
    $email = htmlspecialchars(trim($_POST['con_email']));
    $message = htmlspecialchars(trim($_POST['con_message']));

    // Validação simples
    if (!empty($name) && !empty($email) && !empty($message) && filter_var($email, FILTER_VALIDATE_EMAIL)) {

        // Configurações de e-mail
        $to = "teldiocalbe@gmail.com";  // Substitua pelo seu email
        $subject = "Novo Pedido de Contato";
        $body = "Nome: $name\n";
        $body .= "Email: $email\n";
        $body .= "Mensagem: $message\n";

        $headers = "From: $email";

        // Envio do e-mail
        if (mail($to, $subject, $body, $headers)) {
            echo "Sua mensagem foi enviada com sucesso!";
        } else {
            echo "Erro ao enviar a mensagem. Tente novamente.";
        }

    } else {
        echo "Por favor, preencha todos os campos corretamente.";
    }
}
?>
