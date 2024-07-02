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
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
                            <a class="nav-link" href="#">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <!-- Conteúdo das páginas será inserido aqui -->
