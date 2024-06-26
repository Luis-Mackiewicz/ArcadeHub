<?php
// Iniciar a sessão
session_start();

// Destruir a sessão do usuário
session_destroy();

// Redirecionar o usuário para a página inicial
header("Location: ../index.php");
exit;
?>