<?php
// Inicia a sessão
session_start();

// Verifica se o usuário está logado
if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true) {
    // Remove todas as variáveis de sessão
    $_SESSION = array();

    // Invalida a sessão
    session_destroy();

    // Redireciona para a página de login ou outra página após o logout
    header("Location: index.php"); // Substitua com o redirecionamento desejado
    exit();
} else {
    // Se não estiver logado, redireciona para a página inicial ou outra página
    header("Location: index.php");
    exit();
}
?>
