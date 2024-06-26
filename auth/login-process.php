<?php
// Inicia a sessão
session_start();

// Dados fictícios de usuário (substitua com seu sistema de autenticação real)
$valid_username = "usuario";
$valid_password = "senha123";

// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe os dados do formulário
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Verifica se o usuário e senha são válidos
    if ($username == $valid_username && $password == $valid_password) {
        // Define a variável de sessão para indicar que o usuário está logado
        $_SESSION["logged_in"] = true;
        $_SESSION["username"] = $username;

        // Redireciona para a página inicial ou outra página após o login
        header("Location: index.php"); // Substitua com o redirecionamento desejado
        exit();
    } else {
        // Caso as credenciais estejam incorretas, redireciona de volta para o login
        header("Location: login.php?error=invalid_credentials"); // Página de login com mensagem de erro
        exit();
    }
} else {
    // Se não foi enviado via POST, redireciona de volta para o formulário de login
    header("Location: login.php");
    exit();
}
?>
