<?php
// Inicia a sessão (se não estiver usando um script de inicialização de sessão global)
session_start();

// Verifica se o usuário está logado
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    // Remove todas as variáveis de sessão
    $_SESSION = array();

    // Invalida a sessão
    session_destroy();

    // Redireciona para a página de login ou outra página após o logout
    header("Location: ../index.php"); // Substitua com o redirecionamento desejado após o logout
    exit();
} else {
    // Se não estiver logado, redireciona para a página inicial ou outra página
    header("Location: ../index.php");
    exit();
}
?>
