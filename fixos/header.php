<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArcadeHub</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Estilos customizados -->
    <link rel="stylesheet" href="../assets/css/styles.css">
    <!-- Font Awesome para ícones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="shortcut icon" href="../assets/imagens/arcade_hub.png">
    <style>
        /* Estilos específicos para o header */
        .navbar {
            background-color: #343a40; /* Cor de fundo */
            color: #f8f9fa; /* Cor do texto */
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="../index.php">
                    <img src="../assets/imagens/arcade_hub.png" width="30" height="30" class="d-inline-block align-top" alt="">
                    ArcadeHub
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="../paginas/home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../paginas/equipe.php">Equipe</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownGames" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Jogos
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownGames">
                                <?php if (isset($games) && is_array($games)) : ?>
                                    <?php foreach ($games as $game) : ?>
                                        <li><a class="dropdown-item" href="../paginas/<?php echo $game['slug']; ?>.php"><?php echo $game['title']; ?></a></li>
                                    <?php endforeach; ?>
                                <?php else : ?>
                                    <li><a class="dropdown-item" href="#">Nenhum jogo disponível</a></li>
                                <?php endif; ?>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="loginLink">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Modal de Login -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Formulário de login -->
                    <form action="../autenticacao/login-process.php" method="POST">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Senha</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Entrar</button>
                    </form>
                    <?php
                    // Exibe mensagem de erro, se houver
                    if (isset($_GET['error']) && $_GET['error'] == 'invalid_credentials') {
                        echo '<div class="alert alert-danger mt-3" role="alert">Credenciais inválidas. Por favor, tente novamente.</div>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS, Popper.js, and jQuery (se necessário) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-g2g3flMeIkCt+2ClxX/Sq5/+2W7B2tpDiZj4jBvrB30Y5Ghs06TH+6Y8TLn3b7tG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-XEce95vuoKwL7S9sZf0CIrKFea7bR/+mCMzQJ0Ee8sFyYgt2pzUK8frFZsoW3X3v" crossorigin="anonymous"></script>

    <!-- Script JavaScript para exibir modal de login -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var loginLink = document.getElementById('loginLink');
            var loginModal = new bootstrap.Modal(document.getElementById('loginModal'), {
                keyboard: false
            });

            loginLink.addEventListener('click', function() {
                loginModal.show();
            });
        });
    </script>
</body>
</html>
