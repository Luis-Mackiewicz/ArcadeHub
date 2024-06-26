<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    
    if ($email === 'seu_email@exemplo.com' && $password === 'sua_senha_segura') {
       
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = 'seu_usuario';
       
        header('Location: ../index.php');
        exit;
    } else {
        
        header('Location: ../pages/login.php?login=failed');
        exit;
    }
}
?>
