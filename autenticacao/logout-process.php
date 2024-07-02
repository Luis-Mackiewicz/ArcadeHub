<?php
// Inicia a sessão (se não estiver usando um script de inicialização de sessão global)
session_start();

// Finaliza a sessão
session_unset(); // Limpa todas as variáveis de sessão
session_destroy(); // Destrói a sessão

// Redireciona para a página de login ou qualquer outra página desejada após o logout
header('Location: login.php');
exit;
?>
