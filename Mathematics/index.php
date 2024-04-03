<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Contato</title>
</head>
<body>
    <?php
    session_start();

    // Verificação do formulário
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validação dos campos
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $captcha = $_POST['captcha'];

        if (empty($name) || empty($email) || empty($message) || empty($captcha)) {
            echo 'Todos os campos são obrigatórios.';
        } else {
            // Verificação do CAPTCHA
            if ($captcha != $_SESSION['captcha_answer']) {
                echo 'Resposta incorreta para a pergunta de CAPTCHA.';
            } else {
                // Processamento do formulário (envio de e-mail, etc.)
                echo 'Formulário enviado com sucesso!';
            }
        }
    }

    // Gerar um valor aleatório para o cálculo
    $num1 = rand(1, 10);
    $num2 = rand(1, 10);
    $captcha_answer = $num1 + $num2;
    $_SESSION['captcha_answer'] = $captcha_answer;
    ?>

    <form id="contactForm" action="" method="post">
        <input type="text" name="name" placeholder="Nome" required><br>
        <input type="email" name="email" placeholder="E-mail" required><br>
        <textarea name="message" placeholder="Mensagem" required></textarea><br>
        <label for="captcha">Quanto é <?php echo $num1 . ' + ' . $num2; ?>:</label>
        <input type="text" id="captcha" name="captcha" required><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
