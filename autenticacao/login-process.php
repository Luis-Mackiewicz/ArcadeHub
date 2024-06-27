<?php
// Inicia a sessão (se não estiver usando um script de inicialização de sessão global)
session_start();

// Verifica se o formulário de login foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se os campos de email e senha foram preenchidos
    if (isset($_POST['email']) && isset($_POST['password'])) {
        // Validação básica do login (substitua por seu método de validação real)
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Verifique as credenciais (substitua por sua lógica real de verificação de login)
        // Exemplo simples: verificação fictícia de login
        if ($email === 'seu_email@exemplo.com' && $password === 'senha_secreta') {
            // Login bem-sucedido: define variáveis de sessão e redireciona para a página inicial
            $_SESSION['loggedin'] = true;
            $_SESSION['email'] = $email;
            header('Location: index.php'); // Redireciona para a página inicial após o login
            exit;
        } else {
            // Login falhou: redireciona de volta para a página de login com mensagem de erro
            header('Location: login.php?error=invalid_credentials');
            exit;
        }
    }
}
?>
