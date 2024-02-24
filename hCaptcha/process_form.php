<?php
// Verifica se o valor do hCaptcha preenchido foi recebido via POST
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['captchaFilled'])) {
    $captchaFilled = $_POST['captchaFilled'];

    if ($captchaFilled == 'true') {
        // Se o hCaptcha foi preenchido, faça algo aqui
        echo "O hCaptcha foi preenchido!";
    } else {
        // Se o hCaptcha não foi preenchido, faça algo aqui
        echo "O hCaptcha não foi preenchido!";
    }
} else {
    // Se o valor do hCaptcha preenchido não foi recebido via POST
    echo "Erro: Valor do hCaptcha preenchido não recebido.";
}
?>
