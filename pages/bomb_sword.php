<?php

include '../includes/header.php';


$game = [
    'nome' => 'BombSword',
    'descricao' => 'Um guerreiro caçando fantasmas com uma espada explosiva no vale da morte.',
    'imagem_principal' => 'assets/imagens/BombSword/Luis_i2.jpg',
    'video' => 'https://www.youtube.com/watch?v=g3uQZ_mpntk', 
    'imagens_carrossel' => [
        'assets/imagens/BombSword/f1.png',
        'assets/imagens/BombSword/f2.png',
        'assets/imagens/BombSword/f3.png'
    ],
    'jogar_url' => 'games/Bomb/index.html', 
];
?>

<!-- Início do conteúdo da página -->
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img src="<?php echo $game['imagem_principal']; ?>" class="img-fluid mb-4" alt="<?php echo $game['nome']; ?>">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="<?php echo $game['video']; ?>" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-md-6">
            <h2><?php echo $game['nome']; ?></h2>
            <p><?php echo $game['descricao']; ?></p>
            <a href="<?php echo $game['jogar_url']; ?>" target="_blank" class="btn btn-primary">Jogar</a>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col">
            <h3>Imagens do Jogo</h3>
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php foreach ($game['imagens_carrossel'] as $index => $imagem): ?>
                        <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                            <img src="<?php echo $imagem; ?>" class="d-block w-100" alt="Imagem do jogo">
                        </div>
                    <?php endforeach; ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Próximo</span>
                </button>
            </div>
        </div>
    </div>
</div>

<?php
// Incluindo o footer 
include '../includes/footer.php';
?>
