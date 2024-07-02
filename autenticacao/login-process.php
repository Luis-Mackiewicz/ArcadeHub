<?php
session_start(); // Inicia a sessão

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Validação básica de login (substitua por sua lógica real de validação)
        // Aqui é um exemplo simples de verificação
        if ($email === 'seu_email@exemplo.com' && $password === 'senha_secreta') {
            // Login bem-sucedido: define variáveis de sessão e redireciona para a página inicial
            $_SESSION['loggedin'] = true;
            $_SESSION['email'] = $email;
            header('Location: index.php'); // Redireciona após o login
            exit;
        } else {
            // Login falhou: redireciona de volta para o login com mensagem de erro
            header('Location: login.php?error=invalid_credentials');
            exit;
        }
    }
}
?>
