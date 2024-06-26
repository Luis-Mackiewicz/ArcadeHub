<?php
// Incluindo o header comum
include 'includes/header.php';

// Dados dos jogos
$games = [
    [
        'nome' => 'BombSword',
        'descricao' => 'Um guerreiro caçando fantasmas com uma espada explosiva no vale da morte.',
        'imagem' => 'assets/imagens/BombSword/Luis_i2.jpg',
        'desenvolvedor' => 'Luis Mackiewicz',
        'personalidade' => 'Entusiasta da fantasia, criativo, sonhador.'
    ],
    [
        'nome' => 'Bamboo Strike',
        'descricao' => 'Design de um samurai cortando bambus com precisão, foco na fluidez dos movimentos.',
        'imagem' => 'assets/imagens/Bamboo_Strike/samurai.jpg',
        'desenvolvedor' => 'Pedro Rorato',
        'personalidade' => 'Estudante de Tads, disciplinado, focado.'
    ],
    [
        'nome' => 'Bubble Kid',
        'descricao' => 'Criação de uma bolha mágica explorando um mundo colorido.',
        'imagem' => 'assets/imagens/Bubble_Kid/bolha.jpg',
        'desenvolvedor' => 'Gabriel de Barros',
        'personalidade' => 'Sonhador, imaginativo e determinado.'
    ],
    [
        'nome' => 'Desordeon',
        'descricao' => 'Desenvolvimento de um jogo onde um macaco explora sua floresta em busca de bananas.',
        'imagem' => 'assets/imagens/Desordeon/monkey.jpg',
        'desenvolvedor' => 'Raul Miguel',
        'personalidade' => 'Amante da natureza, curioso, alegre.'
    ],
    [
        'nome' => 'ExplosionRace',
        'descricao' => 'Criação de uma corrida emocionante com mecânicas desafiadoras de desvio de obstáculos.',
        'imagem' => 'assets/imagens/ExplosionRace/ExplosionRace.png',
        'desenvolvedor' => 'Kassio',
        'personalidade' => 'Entusiasta de velocidade, gosta de desafios.'
    ],
    [
        'nome' => 'Speed Bird',
        'descricao' => 'Desenvolvimento de um jogo onde os jogadores assumem o papel de um pássaro veloz explorando os céus.',
        'imagem' => 'assets/imagens/Speed_Bird/bird.jpg',
        'desenvolvedor' => 'Samuel Ernandes',
        'personalidade' => 'Otimista, confiante e objetivo.'
    ]
];
?>

<!-- Início do conteúdo da página -->
<div class="container">
    <div id="carouselExampleControls" class="carousel slide mb-4" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- Itens do carrossel -->
            <div class="carousel-item active">
                <a href="pages/bomb_sword.php">
                    <img src="assets/imagens/BombSword/BannerBomb.png" class="d-block w-100" alt="Banner BombSword">
                </a>
            </div>
            <div class="carousel-item">
                <a href="pages/bamboo_strike.php">
                    <img src="assets/imagens/Bamboo_Strike/BambooStrike.png" class="d-block w-100" alt="Banner Bamboo Strike">
                </a>
            </div>
            <div class="carousel-item">
                <a href="pages/bubble_kid.php">
                    <img src="assets/imagens/Bubble_Kid/BubbleKid.png" class="d-block w-100" alt="Bubble Kid">
                </a>
            </div>
            <div class="carousel-item">
                <a href="pages/desordeon.php">
                    <img src="assets/imagens/Desordeon/Desordeon.jpeg" class="d-block w-100" alt="Desordeon">
                </a>
            </div>
            <div class="carousel-item">
                <a href="pages/explosion_race.php">
                    <img src="assets/imagens/ExplosionRace/ExplosionRace.png" class="d-block w-100" alt="Explosion Race">
                </a>
            </div>
            <div class="carousel-item">
                <a href="pages/speed_bird.php">
                    <img src="assets/imagens/Speed_Bird/SpeedBird.png" class="d-block w-100" alt="Speed Bird">
                </a>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Próximo</span>
        </button>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        <!-- Cards dos jogos -->
        <?php foreach ($games as $game): ?>
        <div class="col">
            <div class="card h-100">
                <img src="<?php echo $game['imagem']; ?>" class="card-img-top" alt="<?php echo $game['nome']; ?>">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $game['nome']; ?></h5>
                    <p class="card-text"><?php echo $game['descricao']; ?></p>
                    <a href="<?php echo strtolower(str_replace(' ', '_', $game['nome'])); ?>.php" class="btn btn-primary">Ver mais</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<?php
// Incluindo o footer comum
include 'includes/footer.php';
?>
